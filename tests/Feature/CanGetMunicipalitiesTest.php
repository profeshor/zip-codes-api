<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\State;
use Illuminate\Support\Str;
use App\Models\Municipality;
use Database\Seeders\StatesSeeder;
use Database\Seeders\MunicipalitiesSeeder;
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
        $this->seed(StatesSeeder::class);
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
        $this->seed(StatesSeeder::class);

        $key = 10;
        $state_id = 9;

        Municipality::create([
            'key' => $key,
            'name' => "Álvaro Obregón",
            'state_id' => $state_id,
        ]);

        $this->getJson(sprintf('/api/states/%s/municipalities', $state_id))
            ->assertOk()
            ->assertExactJson([[
                'key' => $key,
                'name' => 'ALVARO OBREGON'
            ]]);

    }

    /**
     * Retrieves single municipality and gets format
     *
     * @return void
     */
    public function test_get_single_municipality() {
        $this->withoutExceptionHandling();
        $this->seed(StatesSeeder::class);

        $key = 10;
        $state_id = 9;

        $municipality = Municipality::create([
            'key' => $key,
            'name' => "Álvaro Obregón",
            'state_id' => $state_id,
        ]);

        $state = State::find($state_id);

        $this->getJson(sprintf('/api/municipalities/%s/', $municipality->id))
            ->assertOk()
            ->assertExactJson([
                'key' => $key,
                'name' => 'ALVARO OBREGON',
                'federal_entity' => [
                    'key' => $state->id,
                    'name' => strtoupper(Str::ascii($state->name)),
                    'code' => $state->code,
                ]
            ]);
    }

    /**
     * Data provider for testing municipalities seeder
     *
     * @return array
     */
    public function municipalities_data_provider (): array {
        return [
            'There should be 11 municipalities when State "Aguas Calientes"' => [1, 11],
            'There should be 11 municipalities when State "Baja California"' => [2, 7],
            'There should be 5 municipalities when State "Baja California Sur"' => [3, 5],
            'There should be 5 municipalities when State "Campeche"' => [4, 13],
            'There should be 5 municipalities when State "Campeche"' => [4, 13],
            'There should be 5 municipalities when State "Distrito Federal"' => [9, 16],
        ];
    }
    /**
     * There should be 16 municipalities when State "Distrito Federal" is
     * @dataProvider municipalities_data_provider
     * @return void
     */
    public function test_can_seed_Municipality_and_retrieve_by_state($state_id, $municipalities_count) {
        $this->seed(StatesSeeder::class);
        $this->seed(MunicipalitiesSeeder::class);

        $municipalities = $this->getJson(sprintf('/api/states/%s/municipalities', $state_id));
        $municipalities->assertOk()->assertJsonCount($municipalities_count);
    }
}
