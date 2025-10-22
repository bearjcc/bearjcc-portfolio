<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_contact_page_loads_successfully()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function test_contact_page_contains_expected_content()
    {
        $response = $this->get('/contact');

        $response->assertSee('Contact');
        $response->assertSee('Get in Touch');
    }

    public function test_contact_page_has_contact_form()
    {
        $response = $this->get('/contact');

        $response->assertSee('form', false);
        $response->assertSee('name', false);
        $response->assertSee('email', false);
        $response->assertSee('subject', false);
        $response->assertSee('message', false);
    }

    public function test_contact_page_has_csrf_protection()
    {
        $response = $this->get('/contact');

        $response->assertSee('_token', false);
    }

    public function test_contact_page_has_submit_button()
    {
        $response = $this->get('/contact');

        $response->assertSee('submit', false);
        $response->assertSee('Send Message', false);
    }

    public function test_contact_page_has_contact_information()
    {
        $response = $this->get('/contact');

        $response->assertSee('Email', false);
        $response->assertSee('Phone', false);
        $response->assertSee('Location', false);
    }

    public function test_contact_page_has_services_section()
    {
        $response = $this->get('/contact');

        $response->assertSee('Services', false);
        $response->assertSee('Web Development', false);
    }

    public function test_contact_page_has_faq_section()
    {
        $response = $this->get('/contact');

        $response->assertSee('FAQ', false);
        $response->assertSee('Frequently Asked Questions', false);
    }

    public function test_contact_page_has_navigation()
    {
        $response = $this->get('/contact');

        $response->assertSee('nav', false);
        $response->assertSee('Home', false);
    }

    public function test_contact_page_has_footer()
    {
        $response = $this->get('/contact');

        $response->assertSee('footer', false);
    }

    public function test_contact_page_has_star_effects()
    {
        $response = $this->get('/contact');

        $response->assertSee('star-field', false);
    }

    public function test_contact_page_has_bear_branding()
    {
        $response = $this->get('/contact');

        $response->assertSee('BearJCC', false);
    }

    public function test_contact_page_has_proper_layout()
    {
        $response = $this->get('/contact');

        $response->assertSee('container', false);
        $response->assertSee('mx-auto', false);
    }

    public function test_contact_page_has_meta_tags()
    {
        $response = $this->get('/contact');

        $response->assertSee('viewport', false);
        $response->assertSee('charset', false);
    }

    public function test_contact_page_has_tailwind_classes()
    {
        $response = $this->get('/contact');

        $response->assertSee('text-', false);
        $response->assertSee('bg-', false);
    }

    public function test_contact_form_submission_requires_validation()
    {
        $response = $this->post('/contact', []);

        $response->assertStatus(302); // Redirect due to validation failure
    }

    public function test_contact_form_submission_with_valid_data()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message.',
            '_token' => csrf_token(),
        ];

        $response = $this->post('/contact', $data);

        // Should redirect or return success
        $response->assertStatus(302);
    }
}


