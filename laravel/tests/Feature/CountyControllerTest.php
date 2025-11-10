<?php

namespace Tests\Feature;

use App\Models\County;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CountyControllerTest extends TestCase
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

    public function test_index_returns_all_counties()
    {
        County::factory()->create(['name' => 'Pest']);
        County::factory()->create(['name' => 'Baranya']);

        $response = $this->getJson('/api/counties');

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Pest'])
            ->assertJsonFragment(['name' => 'Baranya']);
    }

    public function test_show_returns_county_by_id()
    {
        $county = County::factory()->create(['name' => 'Pest']);

        $response = $this->getJson("/api/counties/{$county->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Pest']);
    }

    public function test_show_returns_404_for_missing_county()
    {
        $response = $this->getJson('/api/counties/999');

        $response->assertStatus(404);
    }

    public function test_store_creates_new_county()
    {
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/counties', [
            'name' => 'Somogy'
        ]);

        $response->assertStatus(201)
            ->assertJsonFragment(['name' => 'Somogy']);

        $this->assertDatabaseHas('county', ['name' => 'Somogy']);
    }

    public function test_update_modifies_existing_county()
    {
        $county = County::factory()->create(['name' => 'Heves']);

        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson("/api/counties/{$county->id}", [
            'name' => 'Nógrád'
        ]);

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Nógrád']);

        $this->assertDatabaseHas('county', ['id' => $county->id, 'name' => 'Nógrád']);
    }

    public function test_update_returns_404_for_missing_county()
    {
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson('/api/counties/999', [
            'name' => 'Tolna'
        ]);

        $response->assertStatus(404);
    }

    public function test_delete_removes_county()
    {
        $county = County::factory()->create(['name' => 'Vas']);

        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->deleteJson("/api/counties/{$county->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('county', ['id' => $county->id]);
    }
}
