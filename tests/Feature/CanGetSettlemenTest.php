<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\State;
use App\Models\Settlement;
use App\Models\Municipality;
use App\Models\SettlementType;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanGetSettlemenTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_single_settlement() {
        $id = 82;
        $name = "Santa Fe";
        $zone_type = "Urbano";

        $state = State::factory()->create();

        $municipality = Municipality::factory()->create([
            'state_id' => $state->id
        ]);

        $settlement_type = SettlementType::create(['name' => 'Pueblo']);

        $settlement = Settlement::create([
            'id' => $id,
            'name' => $name,
            'zone_type' => $zone_type,
            'settlement_type_id' => $settlement_type->id,
            'municipality_id' => $municipality->id
        ]);

        return $this->getJson(sprintf('/api/settlements/%s', $settlement->id))
            ->assertOk()
            ->assertExactJson([
                'key' => $id,
                'name' => strtoupper(Str::ascii($name)),
                'zone_type' => $zone_type,
                'settlement_type' => [
                    'name' => $settlement_type->name,
                ],
            ]);
    }
}
