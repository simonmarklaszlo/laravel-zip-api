<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\County;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CityControllerTest extends TestCase
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

    public function test_index_returns_all_cities()
    {
        $county = County::factory()->create();
        City::factory()->create(['name' => 'Budapest', 'county_id' => $county->id]);
        City::factory()->create(['name' => 'Debrecen', 'county_id' => $county->id]);

        $response = $this->getJson('/api/cities');

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Budapest'])
            ->assertJsonFragment(['name' => 'Debrecen']);
    }

    public function test_show_returns_city_by_id()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['name' => 'Budapest', 'county_id' => $county->id]);

        $response = $this->getJson("/api/cities/{$city->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Budapest']);
    }

    public function test_show_returns_404_for_missing_city()
    {
        $response = $this->getJson('/api/cities/999');

        $response->assertStatus(404);
    }

    public function test_store_creates_new_city()
    {
        $county = County::factory()->create();
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/cities', [
            'name' => 'Szeged',
            'county_id' => $county->id
        ]);

        $response->assertStatus(201)
            ->assertJsonFragment(['name' => 'Szeged']);

        $this->assertDatabaseHas('city', ['name' => 'Szeged']);
    }

    public function test_update_modifies_existing_city()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['name' => 'Pécs', 'county_id' => $county->id]);

        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson("/api/cities/{$city->id}", [
            'name' => 'Győr',
            'county_id' => $county->id
        ]);

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Győr']);

        $this->assertDatabaseHas('city', ['id' => $city->id, 'name' => 'Győr']);
    }

    public function test_update_returns_404_for_missing_city()
    {
        $county = County::factory()->create();
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson('/api/cities/999', [
            'name' => 'Miskolc',
            'county_id' => $county->id
        ]);

        $response->assertStatus(404);
    }

    public function test_delete_removes_city()
    {
        $county = County::factory()->create();
        $city = City::factory()->create(['name' => 'Eger', 'county_id' => $county->id]);

        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->deleteJson("/api/cities/{$city->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('city', ['id' => $city->id]);
    }
}
