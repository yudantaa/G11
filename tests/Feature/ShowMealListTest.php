<?php

use App\Models\Meal;
use Tests\TestCase;


class ShowMealListTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testShowMealLogin()
    {
        $this->get('/login');

        $this->post('/login', [
            'email' => 'partnerlogin@gmail.com',
            'password' => 'wadewade',
        ]);
    }

    public function testShowMeal()
    {
        $this->testShowMealLogin();

        $response = Meal::all();
        $this->assertNotNull($response);
    }
}