<?php

namespace Tests\Unit\Models;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_can_be_created_with_fillable_attributes()
    {
        $project = Project::create([
            'title' => 'Test Project',
            'slug' => 'test-project',
            'description' => 'This is a test project description',
            'tech_stack' => ['Laravel', 'Vue.js', 'Tailwind CSS'],
            'github_url' => 'https://github.com/test/project',
            'live_url' => 'https://test-project.com',
            'featured_image' => 'test-image.jpg',
            'status' => 'published',
            'sort_order' => 1,
        ]);

        $this->assertDatabaseHas('projects', [
            'title' => 'Test Project',
            'slug' => 'test-project',
            'status' => 'published',
            'sort_order' => 1,
        ]);

        $this->assertInstanceOf(Project::class, $project);
    }

    public function test_project_has_correct_fillable_attributes()
    {
        $fillable = [
            'title',
            'slug',
            'description',
            'tech_stack',
            'github_url',
            'live_url',
            'featured_image',
            'status',
            'sort_order',
        ];
        
        $this->assertEquals($fillable, (new Project())->getFillable());
    }

    public function test_project_has_correct_casts()
    {
        $project = new Project();
        $casts = $project->getCasts();

        $this->assertArrayHasKey('tech_stack', $casts);
        $this->assertEquals('array', $casts['tech_stack']);
    }

    public function test_project_tech_stack_is_cast_to_array()
    {
        $techStack = ['Laravel', 'Vue.js', 'Tailwind CSS'];
        
        $project = Project::factory()->create([
            'tech_stack' => $techStack,
        ]);

        $this->assertIsArray($project->tech_stack);
        $this->assertEquals($techStack, $project->tech_stack);
    }

    public function test_project_can_be_created_with_factory()
    {
        $project = Project::factory()->create();

        $this->assertInstanceOf(Project::class, $project);
        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
        ]);
    }

    public function test_published_scope_returns_only_published_projects()
    {
        // Create published project
        $publishedProject = Project::factory()->create([
            'status' => 'published',
        ]);

        // Create draft project
        $draftProject = Project::factory()->create([
            'status' => 'draft',
        ]);

        $publishedProjects = Project::published()->get();

        $this->assertTrue($publishedProjects->contains($publishedProject));
        $this->assertFalse($publishedProjects->contains($draftProject));
    }

    public function test_ordered_scope_returns_projects_in_correct_order()
    {
        // Create projects with different sort orders
        $project3 = Project::factory()->create(['sort_order' => 3]);
        $project1 = Project::factory()->create(['sort_order' => 1]);
        $project2 = Project::factory()->create(['sort_order' => 2]);

        $orderedProjects = Project::ordered()->get();

        $this->assertEquals($project1->id, $orderedProjects[0]->id);
        $this->assertEquals($project2->id, $orderedProjects[1]->id);
        $this->assertEquals($project3->id, $orderedProjects[2]->id);
    }

    public function test_project_can_have_null_tech_stack()
    {
        $project = Project::factory()->create([
            'tech_stack' => null,
        ]);

        $this->assertNull($project->tech_stack);
    }

    public function test_project_can_have_empty_tech_stack_array()
    {
        $project = Project::factory()->create([
            'tech_stack' => [],
        ]);

        $this->assertIsArray($project->tech_stack);
        $this->assertEmpty($project->tech_stack);
    }

    public function test_project_uses_has_factory_trait()
    {
        $project = new Project();
        
        $this->assertTrue(method_exists($project, 'factory'));
    }

    public function test_project_can_have_null_urls()
    {
        $project = Project::factory()->create([
            'github_url' => null,
            'live_url' => null,
        ]);

        $this->assertNull($project->github_url);
        $this->assertNull($project->live_url);
    }

    public function test_project_can_have_null_featured_image()
    {
        $project = Project::factory()->create([
            'featured_image' => null,
        ]);

        $this->assertNull($project->featured_image);
    }

    public function test_project_can_have_null_sort_order()
    {
        $project = Project::factory()->create([
            'sort_order' => null,
        ]);

        $this->assertNull($project->sort_order);
    }

    public function test_project_has_required_attributes()
    {
        $project = Project::factory()->create([
            'title' => 'Test Project',
            'slug' => 'test-project',
            'description' => 'Test description',
        ]);

        $this->assertEquals('Test Project', $project->title);
        $this->assertEquals('test-project', $project->slug);
        $this->assertEquals('Test description', $project->description);
    }

    public function test_project_slug_must_be_unique()
    {
        Project::factory()->create(['slug' => 'test-project']);

        $this->expectException(\Illuminate\Database\QueryException::class);
        
        Project::factory()->create(['slug' => 'test-project']);
    }
}
