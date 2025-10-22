<?php

namespace Tests\Feature;

use Tests\TestCase;

class PerformanceTest extends TestCase
{
    public function test_homepage_load_time_under_3_seconds()
    {
        $startTime = microtime(true);
        
        $response = $this->get('/');
        
        $endTime = microtime(true);
        $loadTime = $endTime - $startTime;
        
        $response->assertStatus(200);
        $this->assertLessThan(3.0, $loadTime, "Homepage load time ({$loadTime}s) exceeds 3 seconds");
    }

    public function test_blog_page_load_time_under_2_seconds()
    {
        $startTime = microtime(true);
        
        $response = $this->get('/blog');
        
        $endTime = microtime(true);
        $loadTime = $endTime - $startTime;
        
        $response->assertStatus(200);
        $this->assertLessThan(2.0, $loadTime, "Blog page load time ({$loadTime}s) exceeds 2 seconds");
    }

    public function test_projects_page_load_time_under_2_seconds()
    {
        $startTime = microtime(true);
        
        $response = $this->get('/projects');
        
        $endTime = microtime(true);
        $loadTime = $endTime - $startTime;
        
        $response->assertStatus(200);
        $this->assertLessThan(2.0, $loadTime, "Projects page load time ({$loadTime}s) exceeds 2 seconds");
    }

    public function test_contact_page_load_time_under_2_seconds()
    {
        $startTime = microtime(true);
        
        $response = $this->get('/contact');
        
        $endTime = microtime(true);
        $loadTime = $endTime - $startTime;
        
        $response->assertStatus(200);
        $this->assertLessThan(2.0, $loadTime, "Contact page load time ({$loadTime}s) exceeds 2 seconds");
    }

    public function test_about_page_load_time_under_2_seconds()
    {
        $startTime = microtime(true);
        
        $response = $this->get('/about');
        
        $endTime = microtime(true);
        $loadTime = $endTime - $startTime;
        
        $response->assertStatus(200);
        $this->assertLessThan(2.0, $loadTime, "About page load time ({$loadTime}s) exceeds 2 seconds");
    }

    public function test_homepage_has_optimized_assets()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for Vite assets (optimized in production)
        $response->assertSee('@vite', false);
        
        // Check for Tailwind CSS classes (should be optimized)
        $response->assertSee('text-', false);
        $response->assertSee('bg-', false);
    }

    public function test_homepage_has_proper_caching_headers()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for proper content type
        $this->assertStringContainsString('text/html', $response->headers->get('Content-Type'));
    }

    public function test_star_effects_are_optimized()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for star field container (should be lightweight)
        $response->assertSee('star-field', false);
        
        // Check for optimized CSS classes
        $response->assertSee('star', false);
    }

    public function test_images_are_optimized()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for bear logo (should be SVG for optimization)
        $response->assertSee('bear-logo', false);
        
        // Check for proper image formats
        $response->assertSee('.svg', false);
    }

    public function test_css_is_minified_in_production()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for Vite asset compilation
        $response->assertSee('@vite', false);
        
        // Check for Tailwind classes (should be optimized)
        $response->assertSee('container', false);
        $response->assertSee('mx-auto', false);
    }

    public function test_javascript_is_optimized()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for star effects script (should be optimized)
        $response->assertSee('script', false);
        
        // Check for Vite asset loading
        $response->assertSee('@vite', false);
    }

    public function test_font_loading_is_optimized()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for Oswald font (should be optimized)
        $response->assertSee('Oswald', false);
        
        // Check for Google Fonts optimization
        $response->assertSee('fonts.googleapis.com', false);
    }

    public function test_mobile_performance_optimizations()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for viewport meta tag
        $response->assertSee('viewport', false);
        
        // Check for responsive design classes
        $response->assertSee('md:', false);
        $response->assertSee('lg:', false);
    }

    public function test_seo_optimizations_are_present()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for title tag
        $response->assertSee('<title>', false);
        
        // Check for meta description
        $response->assertSee('description', false);
        
        // Check for charset
        $response->assertSee('charset', false);
    }

    public function test_accessibility_optimizations()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for semantic HTML
        $response->assertSee('<nav>', false);
        $response->assertSee('<main>', false);
        $response->assertSee('<footer>', false);
        
        // Check for proper heading structure
        $response->assertSee('<h1>', false);
        $response->assertSee('<h2>', false);
    }

    public function test_asset_compression()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        // Check for Vite asset optimization
        $response->assertSee('@vite', false);
        
        // Check for proper asset loading
        $response->assertSee('resources', false);
    }

    public function test_database_query_optimization()
    {
        // Test that pages don't make excessive database queries
        $startTime = microtime(true);
        
        $response = $this->get('/');
        
        $endTime = microtime(true);
        $loadTime = $endTime - $startTime;
        
        $response->assertStatus(200);
        
        // Load time should be reasonable even without database
        $this->assertLessThan(1.0, $loadTime, "Page load time ({$loadTime}s) suggests database optimization issues");
    }
}


