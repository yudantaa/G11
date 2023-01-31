<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class RegistrationTest extends TestCase
{
    use RefreshDatabase; // This trait will refresh the database after each test.
    use WithoutMiddleware; // This trait will disable middleware for this test case.

    // public function testUserCanBeRegistered()
    // {
    //     $response = $this->post('/register', [
    //         'fullName' => 'Kadek Romi Ardana Putra',
    //         'username' => 'Romi',
    //         'email' => 'romi@example.com',
    //         'phoneNumber' => '085792479249',
    //         'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
    //         'password' => 'password',
    //         'password_confirmation' => 'password',
    //         'role' => 'partner',
    //         'age' => '50',
    //     ]);

    //     $response->assertStatus(302); // Assert that the response status code is 302 (redirect).
    //     $this->assertDatabaseHas('users', [
    //         'fullName' => 'Kadek Romi Ardana Putra',
    //         'username' => 'Romi',
    //         'email' => 'romi@example.com',
    //         'phoneNumber' => '085792479249',
    //         'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
    //         'role' => 'partner',
    //         'age' => '50',
    //     ]); // Assert that the user has been added to the database.
    // }

    // public function testUserCannotBeRegisteredTwice()
    // {
    //     $this->post('/register', [
    //         'fullName' => 'Kadek Romi Ardana Putra',
    //         'username' => 'Romi',
    //         'email' => 'romi@example.com',
    //         'phoneNumber' => '085792479249',
    //         'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
    //         'password' => 'password',
    //         'password_confirmation' => 'password',
    //         'role' => 'member',
    //         'age' => '50',
    //     ]);

    //     $response = $this->post('/register', [
    //         'fullName' => 'Kadek Romi Ardana Putra',
    //         'username' => 'Romi',
    //         'email' => 'romi@example.com',
    //         'phoneNumber' => '085792479249',
    //         'address' => 'Jl. Taman Sari Madu No.30, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
    //         'password' => 'password',
    //         'password_confirmation' => 'password',
    //         'role' => 'member',
    //         'age' => '50',
    //     ]);

    //     $response->assertStatus(302); // Assert that the response status code is 302 (redirect).
    //     $this->assertDatabaseMissing('users', [
    //         'fullName' => 'Kadek Romi Ardana Putra',
    //         'email' => 'romi@example.com',
    //     ]); // Assert that the user has NOT been added to the database again.
    // }
}
