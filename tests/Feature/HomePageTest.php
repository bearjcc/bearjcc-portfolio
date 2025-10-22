<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_homepage_loads_successfully()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_homepage_contains_expected_content()
    {
        $response = $this->get('/');

        $response->assertSee('BearJCC');
        $response->assertSee('Portfolio');
    }

    public function test_homepage_has_correct_title()
    {
        $response = $this->get('/');

        $response->assertSee('<title>', false);
        $response->assertSee('BearJCC', false);
    }

    public function test_homepage_has_navigation_menu()
    {
        $response = $this->get('/');

        $response->assertSee('About');
        $response->assertSee('Projects');
        $response->assertSee('Blog');
        $response->assertSee('Contact');
    }

    public function test_homepage_has_call_to_action_buttons()
    {
        $response = $this->get('/');

        $response->assertSee('View Projects');
        $response->assertSee('Read Blog');
    }

    public function test_homepage_has_star_effects_container()
    {
        $response = $this->get('/');

        $response->assertSee('star-field', false);
    }

    public function test_homepage_has_bear_logo()
    {
        $response = $this->get('/');

        $response->assertSee('bear-logo', false);
    }

    public function test_homepage_has_hero_section()
    {
        $response = $this->get('/');

        $response->assertSee('hero', false);
    }

    public function test_homepage_has_proper_meta_tags()
    {
        $response = $this->get('/');

        $response->assertSee('viewport', false);
        $response->assertSee('charset', false);
    }

    public function test_homepage_has_tailwind_css_classes()
    {
        $response = $this->get('/');

        $response->assertSee('container', false);
        $response->assertSee('mx-auto', false);
    }

    public function test_homepage_has_oswald_font()
    {
        $response = $this->get('/');

        $response->assertSee('Oswald', false);
    }
}


