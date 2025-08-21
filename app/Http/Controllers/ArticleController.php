<?php

namespace App\Http\Controllers;

use App\Services\MarkdownService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    protected $markdownService;

    public function __construct(MarkdownService $markdownService)
    {
        $this->markdownService = $markdownService;
    }

    /**
     * Display a listing of articles
     */
    public function index(Request $request): View
    {
        $query = $request->get('q');
        $tag = $request->get('tag');

        if ($query) {
            $articles = $this->markdownService->searchArticles($query);
        } elseif ($tag) {
            $articles = $this->markdownService->getArticlesByTag($tag);
        } else {
            $articles = $this->markdownService->getAllArticles();
        }

        return view('articles.index', compact('articles', 'query', 'tag'));
    }

    /**
     * Display the specified article
     */
    public function show(string $slug): View
    {
        $article = $this->markdownService->getArticle($slug);

        if (!$article) {
            abort(404);
        }

        // Get related articles (same tags)
        $relatedArticles = [];
        if (!empty($article['tags'])) {
            $allArticles = $this->markdownService->getAllArticles();
            $relatedArticles = array_filter($allArticles, function ($related) use ($article) {
                return $related['slug'] !== $article['slug'] && 
                       !empty(array_intersect($related['tags'], $article['tags']));
            });
            $relatedArticles = array_slice($relatedArticles, 0, 3); // Limit to 3
        }

        return view('articles.show', compact('article', 'relatedArticles'));
    }
}
