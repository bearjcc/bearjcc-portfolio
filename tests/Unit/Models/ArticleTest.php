<?php

namespace Tests\Unit\Models;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function test_article_can_be_created_with_fillable_attributes()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $article = Article::create([
            'title' => 'Test Article',
            'slug' => 'test-article',
            'content' => 'This is test content',
            'status' => 'published',
            'published_at' => now(),
            'category_id' => $category->id,
            'user_id' => $user->id,
            'excerpt' => 'Test excerpt',
            'featured_image' => 'test-image.jpg',
        ]);

        $this->assertDatabaseHas('articles', [
            'title' => 'Test Article',
            'slug' => 'test-article',
            'status' => 'published',
        ]);

        $this->assertInstanceOf(Article::class, $article);
    }

    public function test_article_has_correct_fillable_attributes()
    {
        $fillable = [
            'title',
            'slug',
            'content',
            'status',
            'published_at',
            'category_id',
            'user_id',
            'excerpt',
            'featured_image',
        ];
        
        $this->assertEquals($fillable, (new Article())->getFillable());
    }

    public function test_article_has_correct_casts()
    {
        $article = new Article();
        $casts = $article->getCasts();

        $this->assertArrayHasKey('published_at', $casts);
        $this->assertEquals('datetime', $casts['published_at']);
    }

    public function test_article_belongs_to_category()
    {
        $category = Category::factory()->create();
        $article = Article::factory()->create(['category_id' => $category->id]);

        $this->assertInstanceOf(Category::class, $article->category);
        $this->assertEquals($category->id, $article->category->id);
    }

    public function test_article_belongs_to_user()
    {
        $user = User::factory()->create();
        $article = Article::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $article->user);
        $this->assertEquals($user->id, $article->user->id);
    }

    public function test_article_belongs_to_many_tags()
    {
        $article = Article::factory()->create();
        $tag1 = Tag::factory()->create();
        $tag2 = Tag::factory()->create();

        $article->tags()->attach([$tag1->id, $tag2->id]);

        $this->assertCount(2, $article->tags);
        $this->assertInstanceOf(Tag::class, $article->tags->first());
    }

    public function test_article_can_be_created_with_factory()
    {
        $article = Article::factory()->create();

        $this->assertInstanceOf(Article::class, $article);
        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
        ]);
    }

    public function test_published_scope_returns_only_published_articles()
    {
        // Create published article
        $publishedArticle = Article::factory()->create([
            'status' => 'published',
            'published_at' => now()->subDay(),
        ]);

        // Create draft article
        $draftArticle = Article::factory()->create([
            'status' => 'draft',
            'published_at' => null,
        ]);

        // Create future published article
        $futureArticle = Article::factory()->create([
            'status' => 'published',
            'published_at' => now()->addDay(),
        ]);

        $publishedArticles = Article::published()->get();

        $this->assertTrue($publishedArticles->contains($publishedArticle));
        $this->assertFalse($publishedArticles->contains($draftArticle));
        $this->assertFalse($publishedArticles->contains($futureArticle));
    }

    public function test_article_can_have_published_at_timestamp()
    {
        $publishedAt = now();
        $article = Article::factory()->create([
            'published_at' => $publishedAt,
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $article->published_at);
        $this->assertEquals($publishedAt->timestamp, $article->published_at->timestamp);
    }

    public function test_article_uses_has_factory_trait()
    {
        $article = new Article();
        
        $this->assertTrue(method_exists($article, 'factory'));
    }

    public function test_article_can_be_attached_to_tags()
    {
        $article = Article::factory()->create();
        $tag = Tag::factory()->create();

        $article->tags()->attach($tag->id);

        $this->assertDatabaseHas('article_tag', [
            'article_id' => $article->id,
            'tag_id' => $tag->id,
        ]);
    }

    public function test_article_can_be_detached_from_tags()
    {
        $article = Article::factory()->create();
        $tag = Tag::factory()->create();

        $article->tags()->attach($tag->id);
        $this->assertCount(1, $article->tags);

        $article->tags()->detach($tag->id);
        $this->assertCount(0, $article->fresh()->tags);
    }

    public function test_article_can_sync_tags()
    {
        $article = Article::factory()->create();
        $tag1 = Tag::factory()->create();
        $tag2 = Tag::factory()->create();
        $tag3 = Tag::factory()->create();

        // Initially attach tag1 and tag2
        $article->tags()->attach([$tag1->id, $tag2->id]);
        $this->assertCount(2, $article->tags);

        // Sync to tag2 and tag3
        $article->tags()->sync([$tag2->id, $tag3->id]);
        
        $this->assertCount(2, $article->fresh()->tags);
        $this->assertTrue($article->fresh()->tags->contains($tag2));
        $this->assertTrue($article->fresh()->tags->contains($tag3));
        $this->assertFalse($article->fresh()->tags->contains($tag1));
    }
}
