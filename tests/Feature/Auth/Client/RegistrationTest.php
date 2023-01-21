<?php

namespace Tests\Feature\Auth\Client;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    private function loginRedirect(User $user, TestResponse $response)
    {
        $types = $user::TYPES;
        if ($user->type == $types['CLIENT']) {
            $response->assertRedirect(route('home.index'));
        }
        if ($user->type == $types['BUSINESS']) {
            $response->assertTrue(true);
        }
        if ($user->type == $types['ADMIN']) {
            $response->assertTrue(true);
        }
    }

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/client/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/client/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        // $user = Auth::user();
        // $types = $user::TYPES;

        // if ($user->type == $types['CLIENT']) {
        //     $response->assertRedirect(route('home.index'));
        // }
        // if ($user->type == $types['BUSINESS']) {
        //     $response->assertRedirect('/dashboard');
        // }
        // if ($user->type == $types['ADMIN']) {
        //     $response->assertRedirect('/dashboard');
        // }
    }
}
