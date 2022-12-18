<?php

use App\Models\User;
use Tests\TestCase;

class ShowManageMealTest extends TestCase
{
    public function testManageMealPartnerLogin()
    {
        $user = User::factory()->create([
            'fullName' => 'Kadek Romi Ardana Putra',
            'username' => 'Romi',
            'email' => 'romi@example.com',
            'phoneNumber' => '085792479249',
            'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
            'password' => bcrypt(($password = 'password')),
            'role' => 'partner',
            'age' => '50',
        ]);

        $this // Set the session store in the request.
            ->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);

        $this->assertAuthenticated(); // Assert that the user is authenticated.
        $response = $this->get('meal');
        $response->assertStatus(200);
    }
}