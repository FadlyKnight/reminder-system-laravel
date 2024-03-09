<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserReminder;
use Database\Seeders\ReferenceSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function prepareSeederReminder()
    {
        Artisan::call('db:seed', ['--class' => 'ReferenceSeeder']);
    }

     /**
     * Test store method.
     *
     * @return void
     */
    public function test_store_method()
    {
        $this->prepareSeederReminder();
        $data = [
            "email" => fake()->email(),
            "first_name"  => fake()->firstName(),
            "last_name"  => fake()->lastName(),
            "rmndr_type" => "birth-day",
            "timezone" => fake()->timezone(),
            "occur_date" => fake()->date('Y-m-d', 'now')
        ];
        $response = $this->postJson('/api/user', $data);
        $response->assertStatus(200);
    }

    /**
     * Test update method.
     *
     * @return void
     */
    public function test_update_method()
    {
        $this->prepareSeederReminder();
        $user = User::factory()->create(); // Create a model instance
        $data = [
            "email" => fake()->email(),
            "first_name"  => fake()->firstName(),
            "last_name"  => $user->last_name.' EDITED',
            "rmndr_type" => "birth-day",
            "timezone" => fake()->timezone(),
            "occur_date" => fake()->date('Y-m-d', 'now')
        ];
        $response = $this->putJson("/api/user/{$user->id}", $data);
        $response->assertStatus(200);
    }

    /**
     * Test delete method.
     *
     * @return void
     */
    public function test_delete_method()
    {
        $user = User::factory()->create(); // Create a model instance
        $response = $this->delete("/api/user/{$user->id}");
        $response->assertStatus(200);
    }
}
