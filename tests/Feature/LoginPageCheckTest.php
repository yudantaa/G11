<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageCheckTest extends TestCase
{
    use RefreshDatabase; // This trait will refresh the database after each test.

    public function testLoginPageRequest()
    {
        $response = $this->get('login');
        $response->assertStatus(200);
    }
}
