<?php

use App\Models\User;
use Tests\TestCase;

class ShowCreatePartnerProfileTest extends TestCase
{
    public function testCreatePartnerProfileLogin()
    {
        $user = User::factory()->create([
            'fullName' => 'Cade Wade',
            'username' => 'Cade',
            'email' => 'cade@example.com',
            'phoneNumber' => '085792479249',
            'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
            'password' => bcrypt(($password = 'password')),
            'role' => 'partner',
            'age' => '22',
        ]);

        $this // Set the session store in the request.
            ->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);

        $this->assertAuthenticated(); // Assert that the user is authenticated.
        $response = $this->get('partner/create');
        $response->assertStatus(200);
    }
}