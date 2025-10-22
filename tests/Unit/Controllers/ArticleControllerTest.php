<?php

namespace Tests\Unit\Controllers;

use App\Http\Controllers\ArticleController;
use App\Services\MarkdownService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $controller;
    protected $markdownService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->markdownService = $this->createMock(MarkdownService::class);
        $this->controller = new ArticleController($this->markdownService);
    }

    public function test_article_controller_has_markdown_service_dependency()
    {
        $this->assertInstanceOf(MarkdownService::class, $this->markdownService);
    }

    public function test_index_method_returns_view()
    {
        $request = new Request();
        $this->markdownService->method('getAllArticles')->willReturn([]);

        $response = $this->controller->index($request);

        $this->assertInstanceOf(\Illuminate\View\View::class, $response);
    }

    public function test_index_method_returns_articles_index_view()
    {
        $request = new Request();
        $this->markdownService->method('getAllArticles')->willReturn([]);

        $response = $this->controller->index($request);

        $this->assertEquals('articles.index', $response->getName());
    }

    public function test_index_method_with_search_query()
    {
        $request = new Request(['q' => 'test']);
        $this->markdownService->method('searchArticles')->willReturn([]);

        $response = $this->controller->index($request);

        $this->assertEquals('articles.index', $response->getName());
        $this->markdownService->expects($this->once())->method('searchArticles')->with('test');
    }

    public function test_index_method_with_tag_filter()
    {
        $request = new Request(['tag' => 'laravel']);
        $this->markdownService->method('getArticlesByTag')->willReturn([]);

        $response = $this->controller->index($request);

        $this->assertEquals('articles.index', $response->getName());
        $this->markdownService->expects($this->once())->method('getArticlesByTag')->with('laravel');
    }

    public function test_index_method_passes_articles_to_view()
    {
        $request = new Request();
        $articles = [
            ['title' => 'Test Article', 'slug' => 'test-article'],
            ['title' => 'Another Article', 'slug' => 'another-article'],
        ];
        $this->markdownService->method('getAllArticles')->willReturn($articles);

        $response = $this->controller->index($request);
        $viewData = $response->getData();

        $this->assertArrayHasKey('articles', $viewData);
        $this->assertEquals($articles, $viewData['articles']);
    }

    public function test_show_method_returns_view_for_existing_article()
    {
        $article = [
            'title' => 'Test Article',
            'slug' => 'test-article',
            'content' => 'Test content',
            'tags' => ['laravel', 'php'],
        ];
        $this->markdownService->method('getArticle')->willReturn($article);

        $response = $this->controller->show('test-article');

        $this->assertInstanceOf(\Illuminate\View\View::class, $response);
        $this->assertEquals('articles.show', $response->getName());
    }

    public function test_show_method_returns_404_for_nonexistent_article()
    {
        $this->markdownService->method('getArticle')->willReturn(null);

        $this->expectException(\Symfony\Component\HttpKernel\Exception\NotFoundHttpException::class);
        
        $this->controller->show('nonexistent-article');
    }

    public function test_show_method_passes_article_to_view()
    {
        $article = [
            'title' => 'Test Article',
            'slug' => 'test-article',
            'content' => 'Test content',
            'tags' => ['laravel'],
        ];
        $this->markdownService->method('getArticle')->willReturn($article);

        $response = $this->controller->show('test-article');
        $viewData = $response->getData();

        $this->assertArrayHasKey('article', $viewData);
        $this->assertEquals($article, $viewData['article']);
    }

    public function test_show_method_finds_related_articles()
    {
        $article = [
            'title' => 'Test Article',
            'slug' => 'test-article',
            'content' => 'Test content',
            'tags' => ['laravel', 'php'],
        ];
        
        $allArticles = [
            [
                'title' => 'Related Article 1',
                'slug' => 'related-1',
                'tags' => ['laravel'],
            ],
            [
                'title' => 'Related Article 2',
                'slug' => 'related-2',
                'tags' => ['php'],
            ],
            [
                'title' => 'Unrelated Article',
                'slug' => 'unrelated',
                'tags' => ['javascript'],
            ],
        ];

        $this->markdownService->method('getArticle')->willReturn($article);
        $this->markdownService->method('getAllArticles')->willReturn($allArticles);

        $response = $this->controller->show('test-article');
        $viewData = $response->getData();

        $this->assertArrayHasKey('relatedArticles', $viewData);
        $this->assertCount(2, $viewData['relatedArticles']);
    }

    public function test_show_method_limits_related_articles_to_3()
    {
        $article = [
            'title' => 'Test Article',
            'slug' => 'test-article',
            'content' => 'Test content',
            'tags' => ['laravel'],
        ];
        
        $allArticles = [
            ['title' => 'Related 1', 'slug' => 'related-1', 'tags' => ['laravel']],
            ['title' => 'Related 2', 'slug' => 'related-2', 'tags' => ['laravel']],
            ['title' => 'Related 3', 'slug' => 'related-3', 'tags' => ['laravel']],
            ['title' => 'Related 4', 'slug' => 'related-4', 'tags' => ['laravel']],
        ];

        $this->markdownService->method('getArticle')->willReturn($article);
        $this->markdownService->method('getAllArticles')->willReturn($allArticles);

        $response = $this->controller->show('test-article');
        $viewData = $response->getData();

        $this->assertCount(3, $viewData['relatedArticles']);
    }

    public function test_show_method_handles_articles_without_tags()
    {
        $article = [
            'title' => 'Test Article',
            'slug' => 'test-article',
            'content' => 'Test content',
            'tags' => [],
        ];

        $this->markdownService->method('getArticle')->willReturn($article);

        $response = $this->controller->show('test-article');
        $viewData = $response->getData();

        $this->assertArrayHasKey('relatedArticles', $viewData);
        $this->assertEmpty($viewData['relatedArticles']);
    }

    public function test_article_controller_extends_base_controller()
    {
        $this->assertInstanceOf(\App\Http\Controllers\Controller::class, $this->controller);
    }

    public function test_index_method_has_correct_return_type()
    {
        $reflection = new \ReflectionMethod($this->controller, 'index');
        $returnType = $reflection->getReturnType();

        $this->assertEquals('Illuminate\View\View', $returnType->getName());
    }

    public function test_show_method_has_correct_return_type()
    {
        $reflection = new \ReflectionMethod($this->controller, 'show');
        $returnType = $reflection->getReturnType();

        $this->assertEquals('Illuminate\View\View', $returnType->getName());
    }
}
