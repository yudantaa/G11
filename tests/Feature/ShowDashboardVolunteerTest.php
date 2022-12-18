<?php

use App\Models\User;
use Tests\TestCase;

class ShowDashboardVolunteerTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testVolunteerLogin()
    {
        $this->post('/login', [
                'email' => 'zulfikar@gmail.com',
                'password' => 'wadewade',
            ]);
    }

    public function testShowDashboardVolunteer()
    {
        $this->testVolunteerLogin();
        $response = $this->get('/volunteer');
        $response->assertStatus(200);
    }
}