<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase; // This trait will refresh the database after each test.
    use WithoutMiddleware; // This trait will disable middleware for this test case.

    public function testRegisteredUserCanLogIn()
    {
        $user = User::factory()->create([
            'fullName' => 'Kadek Romi Ardana Putra',
            'username' => 'Romi',
            'email' => 'romi@example.com',
            'phoneNumber' => '085792479249',
            'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
            'password' => bcrypt(($password = 'password')),
            'role' => 'member',
            'age' => '50',
        ]);

        $this // Set the session store in the request.
            ->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);

        $this->assertAuthenticated(); // Assert that the user is authenticated.
    }

    public function testUnregisteredUserCannotLogIn()
    {
        $response = $this->post('/login', [
            'email' => 'romi@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(302); // Assert that the response status code is 302 (redirect).
        $this->assertGuest(); // Assert that the user is a guest.
    }
}
