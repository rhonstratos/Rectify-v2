<?php

namespace Tests\Feature\Auth\Business;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    private function createUser(string $type)
    {
        return User::factory()->create([
            'email_verified_at' => null,
            'type' => User::TYPES[$type]
        ]);
    }

    public function test_email_verification_screen_can_be_rendered(): void
    {
        $user = $this->createUser('BUSINESS');

        $response = $this->actingAs($user)->get('/business/verify-email');

        $response->assertStatus(200);
    }

    public function test_email_can_be_verified(): void
    {
        $user = $this->createUser('BUSINESS');

        Event::fake();

        $verificationUrl = URL::temporarySignedRoute(
            'auth.r_business.verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        $response = $this->actingAs($user)->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($user->fresh()->hasVerifiedEmail());
        $response->assertRedirect(RouteServiceProvider::HOME . '?verified=1');
    }

    public function test_email_is_not_verified_with_invalid_hash(): void
    {
        $user = $this->createUser('BUSINESS');

        $verificationUrl = URL::temporarySignedRoute(
            'auth.r_business.verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($user)->get($verificationUrl);

        $this->assertFalse($user->fresh()->hasVerifiedEmail());
    }
}
