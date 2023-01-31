<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartnerCreateMealTest extends TestCase
{
    use RefreshDatabase; // This trait will refresh the database after each test.

    public function testPartnerLogin()
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
        
        $response = $this->get('member/menu/detail/{id}');
        $response->assertStatus(200);
    }

}
