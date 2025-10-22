<?php

namespace Tests\Feature;

use App\Services\MarkdownService;
use Tests\TestCase;

class BlogPageTest extends TestCase
{
    public function test_blog_page_loads_successfully()
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
    }

    public function test_blog_page_contains_expected_content()
    {
        $response = $this->get('/blog');

        $response->assertSee('Blog');
        $response->assertSee('Articles');
    }

    public function test_blog_page_has_search_functionality()
    {
        $response = $this->get('/blog');

        $response->assertSee('search', false);
        $response->assertSee('q=', false);
    }

    public function test_blog_page_has_tag_filtering()
    {
        $response = $this->get('/blog');

        $response->assertSee('tag', false);
    }

    public function test_blog_page_has_article_cards()
    {
        $response = $this->get('/blog');

        $response->assertSee('article', false);
        $response->assertSee('card', false);
    }

    public function test_blog_page_has_pagination()
    {
        $response = $this->get('/blog');

        $response->assertSee('pagination', false);
    }

    public function test_blog_page_has_proper_layout()
    {
        $response = $this->get('/blog');

        $response->assertSee('container', false);
        $response->assertSee('grid', false);
    }

    public function test_blog_page_has_navigation()
    {
        $response = $this->get('/blog');

        $response->assertSee('nav', false);
        $response->assertSee('Home', false);
    }

    public function test_blog_page_has_footer()
    {
        $response = $this->get('/blog');

        $response->assertSee('footer', false);
    }

    public function test_blog_page_has_star_effects()
    {
        $response = $this->get('/blog');

        $response->assertSee('star-field', false);
    }

    public function test_blog_page_has_bear_branding()
    {
        $response = $this->get('/blog');

        $response->assertSee('BearJCC', false);
    }

    public function test_blog_page_has_meta_tags()
    {
        $response = $this->get('/blog');

        $response->assertSee('viewport', false);
        $response->assertSee('charset', false);
    }

    public function test_blog_page_has_tailwind_classes()
    {
        $response = $this->get('/blog');

        $response->assertSee('text-', false);
        $response->assertSee('bg-', false);
    }
}


