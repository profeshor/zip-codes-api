<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\State;
use App\Models\Settlement;
use Illuminate\Support\Str;
use App\Models\Municipality;
use App\Models\SettlementType;
use Database\Seeders\StateSeeder;
use Database\Seeders\SettlementsSeeder;
use Database\Seeders\MunicipalitiesSeeder;
use Database\Seeders\SettlementTypesSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanGetSettlemenTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_single_settlement() {
        $key = 82;
        $name = "Santa Fe";
        $zone_type = "Urbano";

        $state = State::factory()->create();

        $municipality = Municipality::factory()->create([
            'state_id' => $state->id
        ]);

        $settlement_type = SettlementType::create(['name' => 'Pueblo']);

        $settlement = Settlement::create([
            'key' => $key,
            'name' => $name,
            'zone_type' => $zone_type,
            'settlement_type_id' => $settlement_type->id,
            'municipality_id' => $municipality->id
        ]);

        return $this->getJson(sprintf('/api/settlements/%s', $settlement->id))
            ->assertOk()
            ->assertExactJson([
                'key' => $key,
                'name' => strtoupper(Str::ascii($name)),
                'zone_type' => $zone_type,
                'settlement_type' => [
                    'name' => $settlement_type->name,
                ],
            ]);
    }

    public function test_can_fill_settlement_and_get () {
        $this->seed(StateSeeder::class);
        $this->seed(MunicipalitiesSeeder::class);
        $this->seed(SettlementTypesSeeder::class);
        $this->seed(SettlementsSeeder::class);
        return $this->getJson(sprintf('/api/settlements/%s', 1))
            ->assertOk()
            ->assertExactJson([
                'key' => 1,
                'name' => strtoupper(Str::ascii('Aguascalientes Centro')),
                'zone_type' => 'Urbano',
                'settlement_type' => [
                    'name' => 'Colonia',
                ],
            ]);
    }
}
