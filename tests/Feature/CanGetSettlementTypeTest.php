<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\SettlementType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanGetSettlementTypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_single_settlement_type() {
        $this->withoutExceptionHandling();
        $settlement_type = SettlementType::create([
            'name' => "Pueblo",
        ]);

        return $this->getJson(sprintf('/api/settlement_types/%s', $settlement_type->id))
        ->assertOk()
        ->assertExactJson([
            'name' => "Pueblo",
        ]);
    }
}
