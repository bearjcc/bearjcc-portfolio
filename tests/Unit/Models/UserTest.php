<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_be_created_with_fillable_attributes()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $this->assertInstanceOf(User::class, $user);
    }

    public function test_user_has_correct_fillable_attributes()
    {
        $fillable = ['name', 'email', 'password'];
        
        $this->assertEquals($fillable, (new User())->getFillable());
    }

    public function test_user_has_correct_hidden_attributes()
    {
        $hidden = ['password', 'remember_token'];
        
        $this->assertEquals($hidden, (new User())->getHidden());
    }

    public function test_user_has_correct_casts()
    {
        $user = new User();
        $casts = $user->getCasts();

        $this->assertArrayHasKey('email_verified_at', $casts);
        $this->assertEquals('datetime', $casts['email_verified_at']);
        
        $this->assertArrayHasKey('password', $casts);
        $this->assertEquals('hashed', $casts['password']);
    }

    public function test_user_can_be_created_with_factory()
    {
        $user = User::factory()->create();

        $this->assertInstanceOf(User::class, $user);
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
        ]);
    }

    public function test_user_has_required_attributes()
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->assertEquals('Test User', $user->name);
        $this->assertEquals('test@example.com', $user->email);
    }

    public function test_user_email_must_be_unique()
    {
        User::factory()->create(['email' => 'test@example.com']);

        $this->expectException(\Illuminate\Database\QueryException::class);
        
        User::factory()->create(['email' => 'test@example.com']);
    }

    public function test_user_password_is_hashed()
    {
        $user = User::factory()->create([
            'password' => 'plaintext_password',
        ]);

        $this->assertNotEquals('plaintext_password', $user->password);
        $this->assertTrue(password_verify('plaintext_password', $user->password));
    }

    public function test_user_can_have_email_verified_at_timestamp()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $user->email_verified_at);
    }

    public function test_user_uses_has_factory_trait()
    {
        $user = new User();
        
        $this->assertTrue(method_exists($user, 'factory'));
    }

    public function test_user_uses_notifiable_trait()
    {
        $user = new User();
        
        $this->assertTrue(method_exists($user, 'notify'));
    }
}
