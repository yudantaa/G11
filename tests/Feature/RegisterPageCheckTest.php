<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterPageCheckTest extends TestCase
{
    use RefreshDatabase; // This trait will refresh the database after each test.

    public function testRegisterPageRequest()
    {
        $response = $this->get('register');
        $response->assertStatus(200);
    }
}
