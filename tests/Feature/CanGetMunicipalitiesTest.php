<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\State;
use Illuminate\Support\Str;
use App\Models\Municipality;
use Database\Seeders\StateSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanGetMunicipalitiesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Tests getting the municipalities by an state id
     *
     * @return void
     */
    public function test_can_get_municipalities_by_state() {
        // $this->withoutExceptionHandling();
        $this->seed(StateSeeder::class);
        $state = State::first();
        $state->municipalities()->saveMany(
            Municipality::factory()->count(4)->create()
        );
        $this->getJson(sprintf('/api/states/%s/municipalities', $state->id))
            ->assertOk()
            ->assertJsonCount(4);
    }

    /**
     * Validates if municipalities are retrieved in correcto format
     *
     * @return void
     */
    public function test_municipalities_display_correct_format() {
        $this->seed(StateSeeder::class);

        $id = 10;
        $state_id = 9;

        Municipality::create([
            'id' => $id,
            'name' => "Álvaro Obregón",
            'state_id' => $state_id,
        ]);

        $this->getJson(sprintf('/api/states/%s/municipalities', $state_id))
            ->assertOk()
            ->assertExactJson([[
                'key' => $id,
                'name' => 'ALVARO OBREGON'
            ]]);

    }

    public function test_get_single_municipality() {
        $this->withoutExceptionHandling();
        $this->seed(StateSeeder::class);

        $id = 10;
        $state_id = 9;

        $municipality = Municipality::create([
            'id' => $id,
            'name' => "Álvaro Obregón",
            'state_id' => $state_id,
        ]);

        $state = State::find($state_id);

        $this->getJson(sprintf('/api/municipalities/%s/', $municipality->id))
            ->assertOk()
            ->assertExactJson([
                'key' => $id,
                'name' => 'ALVARO OBREGON',
                'federal_entity' => [
                    'key' => $state->id,
                    'name' => strtoupper(Str::ascii($state->name)),
                    'code' => $state->code,
                ]
            ]);
    }
}
