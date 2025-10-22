<?php

namespace Tests\Unit\Controllers;

use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $controller;

    protected function setUp(): void
    {
        parent::setUp();
        $this->controller = new ProjectController();
    }

    public function test_index_method_returns_view()
    {
        $response = $this->controller->index();

        $this->assertInstanceOf(\Illuminate\View\View::class, $response);
    }

    public function test_index_method_returns_projects_index_view()
    {
        $response = $this->controller->index();

        $this->assertEquals('projects.index', $response->getName());
    }

    public function test_index_method_passes_projects_to_view()
    {
        $response = $this->controller->index();
        $viewData = $response->getData();

        $this->assertArrayHasKey('projects', $viewData);
        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $viewData['projects']);
    }

    public function test_show_method_returns_view_for_existing_project()
    {
        $project = Project::factory()->create();

        $response = $this->controller->show($project);

        $this->assertInstanceOf(\Illuminate\View\View::class, $response);
        $this->assertEquals('projects.show', $response->getName());
    }

    public function test_show_method_passes_project_to_view()
    {
        $project = Project::factory()->create();

        $response = $this->controller->show($project);
        $viewData = $response->getData();

        $this->assertArrayHasKey('project', $viewData);
        $this->assertEquals($project, $viewData['project']);
    }

    public function test_show_method_returns_404_for_nonexistent_project()
    {
        $this->expectException(\Illuminate\Database\Eloquent\ModelNotFoundException::class);
        
        $this->controller->show(999);
    }

    public function test_projects_route_returns_200_status()
    {
        $response = $this->get('/projects');

        $response->assertStatus(200);
    }

    public function test_projects_route_returns_projects_index_view()
    {
        $response = $this->get('/projects');

        $response->assertViewIs('projects.index');
    }

    public function test_project_show_route_returns_200_status_for_existing_project()
    {
        $project = Project::factory()->create();

        $response = $this->get("/projects/{$project->slug}");

        $response->assertStatus(200);
    }

    public function test_project_show_route_returns_projects_show_view()
    {
        $project = Project::factory()->create();

        $response = $this->get("/projects/{$project->slug}");

        $response->assertViewIs('projects.show');
    }

    public function test_project_show_route_returns_404_for_nonexistent_project()
    {
        $response = $this->get('/projects/nonexistent-project');

        $response->assertStatus(404);
    }

    public function test_project_controller_extends_base_controller()
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

    public function test_show_method_parameter_has_correct_type_hint()
    {
        $reflection = new \ReflectionMethod($this->controller, 'show');
        $parameters = $reflection->getParameters();

        $this->assertCount(1, $parameters);
        $this->assertEquals(Project::class, $parameters[0]->getType()->getName());
    }

    public function test_index_method_is_public()
    {
        $reflection = new \ReflectionMethod($this->controller, 'index');
        
        $this->assertTrue($reflection->isPublic());
    }

    public function test_show_method_is_public()
    {
        $reflection = new \ReflectionMethod($this->controller, 'show');
        
        $this->assertTrue($reflection->isPublic());
    }

    public function test_projects_route_contains_expected_content()
    {
        $response = $this->get('/projects');

        $response->assertSee('Projects');
    }

    public function test_project_show_route_contains_project_title()
    {
        $project = Project::factory()->create([
            'title' => 'Test Project',
        ]);

        $response = $this->get("/projects/{$project->slug}");

        $response->assertSee('Test Project');
    }
}
