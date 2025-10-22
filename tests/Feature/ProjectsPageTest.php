<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProjectsPageTest extends TestCase
{
    public function test_projects_page_loads_successfully()
    {
        $response = $this->get('/projects');

        $response->assertStatus(200);
    }

    public function test_projects_page_contains_expected_content()
    {
        $response = $this->get('/projects');

        $response->assertSee('Projects');
        $response->assertSee('Portfolio');
    }

    public function test_projects_page_has_grid_layout()
    {
        $response = $this->get('/projects');

        $response->assertSee('grid', false);
        $response->assertSee('md:grid-cols-', false);
    }

    public function test_projects_page_has_filtering()
    {
        $response = $this->get('/projects');

        $response->assertSee('filter', false);
        $response->assertSee('technology', false);
    }

    public function test_projects_page_has_search()
    {
        $response = $this->get('/projects');

        $response->assertSee('search', false);
    }

    public function test_projects_page_has_project_cards()
    {
        $response = $this->get('/projects');

        $response->assertSee('card', false);
        $response->assertSee('project', false);
    }

    public function test_projects_page_has_navigation()
    {
        $response = $this->get('/projects');

        $response->assertSee('nav', false);
        $response->assertSee('Home', false);
    }

    public function test_projects_page_has_footer()
    {
        $response = $this->get('/projects');

        $response->assertSee('footer', false);
    }

    public function test_projects_page_has_star_effects()
    {
        $response = $this->get('/projects');

        $response->assertSee('star-field', false);
    }

    public function test_projects_page_has_bear_branding()
    {
        $response = $this->get('/projects');

        $response->assertSee('BearJCC', false);
    }

    public function test_projects_page_has_proper_layout()
    {
        $response = $this->get('/projects');

        $response->assertSee('container', false);
        $response->assertSee('mx-auto', false);
    }

    public function test_projects_page_has_meta_tags()
    {
        $response = $this->get('/projects');

        $response->assertSee('viewport', false);
        $response->assertSee('charset', false);
    }

    public function test_projects_page_has_tailwind_classes()
    {
        $response = $this->get('/projects');

        $response->assertSee('text-', false);
        $response->assertSee('bg-', false);
    }
}


