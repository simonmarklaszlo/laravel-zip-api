<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\County;
use App\Models\User;
use App\Models\Zipcode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ZipcodeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index_returns_all_zipcodes()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['county_id' => $county->id]);
        Zipcode::factory()->create(['zipcode' => 1011, 'city_id' => $city->id]);
        Zipcode::factory()->create(['zipcode' => 1012, 'city_id' => $city->id]);

        $response = $this->getJson('/api/zipcodes');

        $response->assertStatus(200)
            ->assertJsonFragment(['zipcode' => 1011])
            ->assertJsonFragment(['zipcode' => 1012]);
    }

    public function test_show_returns_zipcode_by_id()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['county_id' => $county->id]);
        $zipcode = Zipcode::factory()->create(['zipcode' => 1011, 'city_id' => $city->id]);

        $response = $this->getJson("/api/zipcodes/{$zipcode->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['zipcode' => 1011]);
    }

    public function test_show_returns_404_for_missing_zipcode()
    {
        $response = $this->getJson('/api/zipcodes/999');

        $response->assertStatus(404);
    }

    public function test_store_creates_new_zipcode()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['county_id' => $county->id]);
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/zipcodes', [
            'zipcode' => 2000,
            'city_id' => $city->id
        ]);

        $response->assertStatus(201)
            ->assertJsonFragment(['zipcode' => 2000]);

        $this->assertDatabaseHas('zipcode', ['zipcode' => 2000]);
    }

    public function test_update_modifies_existing_zipcode()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['county_id' => $county->id]);
        $zipcode = Zipcode::factory()->create(['zipcode' => 3000, 'city_id' => $city->id]);

        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson("/api/zipcodes/{$zipcode->id}", [
            'zipcode' => 3001,
            'city_id' => $city->id
        ]);

        $response->assertStatus(200)
            ->assertJsonFragment(['zipcode' => 3001]);

        $this->assertDatabaseHas('zipcode', ['id' => $zipcode->id, 'zipcode' => 3001]);
    }

    public function test_update_returns_404_for_missing_zipcode()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['county_id' => $county->id]);
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson('/api/zipcodes/999', [
            'zipcode' => 4000,
            'city_id' => $city->id
        ]);

        $response->assertStatus(404);
    }

    public function test_delete_removes_zipcode()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['county_id' => $county->id]);
        $zipcode = Zipcode::factory()->create(['zipcode' => 5000, 'city_id' => $city->id]);

        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->deleteJson("/api/zipcodes/{$zipcode->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('zipcode', ['id' => $zipcode->id]);
    }
}
