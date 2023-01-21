<?php

namespace Tests\Feature\Auth\Client;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    private function createUser(string $type)
    {
        return User::factory()->create([
            'type' => User::TYPES[$type]
        ]);
    }

    private function loginRedirect(User $user, TestResponse $response)
    {
        $types = $user::TYPES;
        if ($user->type == $types['CLIENT']) {
            $response->assertRedirect(route('home.index'));
        }
        if ($user->type == $types['BUSINESS']) {
            $response->assertRedirect(route('dashboard'));
        }
        if ($user->type == $types['ADMIN']) {
            $response->assertRedirect(route('dashboard'));
        }
    }

    public function test_client_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/client/login');

        $response->assertStatus(200);
    }

    public function test_client_users_can_authenticate_using_the_login_screen(): void
    {
        $user = $this->createUser('CLIENT');

        $response = $this->post('/client/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->loginRedirect($user, $response);

        $this->assertAuthenticated();
    }

    public function test_client_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = $this->createUser('CLIENT');

        $this->post('/client/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
