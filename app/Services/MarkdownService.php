<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Illuminate\Support\Str;

class MarkdownService
{
    protected $markdownRenderer;
    protected $articlesPath;
    protected $projectsPath;

    public function __construct(MarkdownRenderer $markdownRenderer)
    {
        $this->markdownRenderer = $markdownRenderer;
        $this->articlesPath = base_path('content/articles');
        $this->projectsPath = base_path('content/projects');
    }

    /**
     * Get all articles with metadata
     */
    public function getAllArticles(): array
    {
        $articles = [];
        
        if (!File::exists($this->articlesPath)) {
            return $articles;
        }

        $files = File::files($this->articlesPath);
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'md') {
                $article = $this->getArticleMetadata($file->getPathname());
                if ($article) {
                    $articles[] = $article;
                }
            }
        }

        // Sort by date (newest first)
        usort($articles, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $articles;
    }

    /**
     * Get a single article by slug
     */
    public function getArticle(string $slug): ?array
    {
        $filePath = $this->articlesPath . '/' . $slug . '.md';
        
        if (!File::exists($filePath)) {
            return null;
        }

        $content = File::get($filePath);
        $metadata = $this->extractMetadata($content);
        $markdown = $this->extractMarkdown($content);
        
        return [
            'slug' => $slug,
            'title' => $metadata['title'] ?? 'Untitled',
            'description' => $metadata['description'] ?? '',
            'date' => $metadata['date'] ?? now()->format('Y-m-d'),
            'tags' => $metadata['tags'] ?? [],
            'image' => $metadata['image'] ?? null,
            'content' => $this->markdownRenderer->toHtml($markdown),
            'raw_content' => $markdown,
        ];
    }

    /**
     * Get article metadata without full content
     */
    public function getArticleMetadata(string $filePath): ?array
    {
        if (!File::exists($filePath)) {
            return null;
        }

        $content = File::get($filePath);
        $metadata = $this->extractMetadata($content);
        $slug = pathinfo($filePath, PATHINFO_FILENAME);

        return [
            'slug' => $slug,
            'title' => $metadata['title'] ?? 'Untitled',
            'description' => $metadata['description'] ?? '',
            'date' => $metadata['date'] ?? now()->format('Y-m-d'),
            'tags' => $metadata['tags'] ?? [],
            'image' => $metadata['image'] ?? null,
            'excerpt' => $this->generateExcerpt($this->extractMarkdown($content)),
        ];
    }

    /**
     * Extract metadata from markdown front matter
     */
    protected function extractMetadata(string $content): array
    {
        $metadata = [];
        
        if (preg_match('/^---\s*\n(.*?)\n---\s*\n/s', $content, $matches)) {
            $frontMatter = $matches[1];
            
            // Parse YAML-like front matter
            $lines = explode("\n", $frontMatter);
            foreach ($lines as $line) {
                $line = trim($line);
                if (empty($line) || strpos($line, '#') === 0) {
                    continue;
                }
                
                if (preg_match('/^([^:]+):\s*(.+)$/', $line, $parts)) {
                    $key = trim($parts[1]);
                    $value = trim($parts[2]);
                    
                    // Handle arrays (tags)
                    if ($key === 'tags' && strpos($value, '[') === 0) {
                        $value = $this->parseArray($value);
                    }
                    
                    $metadata[$key] = $value;
                }
            }
        }
        
        return $metadata;
    }

    /**
     * Extract markdown content (remove front matter)
     */
    protected function extractMarkdown(string $content): string
    {
        return preg_replace('/^---\s*\n.*?\n---\s*\n/s', '', $content);
    }

    /**
     * Generate excerpt from markdown content
     */
    protected function generateExcerpt(string $markdown, int $length = 200): string
    {
        // Remove markdown formatting
        $text = preg_replace('/#+\s+/', '', $markdown); // Remove headers
        $text = preg_replace('/\*\*(.*?)\*\*/', '$1', $text); // Remove bold
        $text = preg_replace('/\*(.*?)\*/', '$1', $text); // Remove italic
        $text = preg_replace('/\[([^\]]+)\]\([^)]+\)/', '$1', $text); // Remove links
        $text = preg_replace('/`([^`]+)`/', '$1', $text); // Remove inline code
        $text = preg_replace('/```.*?```/s', '', $text); // Remove code blocks
        
        // Get first paragraph
        $paragraphs = array_filter(array_map('trim', explode("\n\n", $text)));
        $firstParagraph = $paragraphs[0] ?? '';
        
        // Truncate to desired length
        if (strlen($firstParagraph) > $length) {
            $firstParagraph = substr($firstParagraph, 0, $length) . '...';
        }
        
        return $firstParagraph;
    }

    /**
     * Parse array from string (simple implementation)
     */
    protected function parseArray(string $value): array
    {
        // Remove brackets and split by comma
        $value = trim($value, '[]');
        if (empty($value)) {
            return [];
        }
        
        $items = array_map('trim', explode(',', $value));
        return array_filter($items);
    }

    /**
     * Get articles by tag
     */
    public function getArticlesByTag(string $tag): array
    {
        $articles = $this->getAllArticles();
        
        return array_filter($articles, function ($article) use ($tag) {
            return in_array($tag, $article['tags']);
        });
    }

    /**
     * Search articles
     */
    public function searchArticles(string $query): array
    {
        $articles = $this->getAllArticles();
        $results = [];
        
        foreach ($articles as $article) {
            $searchText = strtolower($article['title'] . ' ' . $article['description'] . ' ' . $article['excerpt']);
            if (strpos($searchText, strtolower($query)) !== false) {
                $results[] = $article;
            }
        }
        
        return $results;
    }
}
