<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\ZipCode;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanRetrieveSingleZipCodeTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_retrieve_single_zip_code() {
        $this->withoutExceptionHandling();

        $zip_code = '01210';
        $locality = 'Ciudad de Mexico';
        $state_id = 9;
        $settlement_id = 82;
        $municipality_id = 10;

        ZipCode::create([
            'zip_code' => $zip_code,
            'locality' => $locality,
            'state_id' => $state_id,
            'settlement_id' => $settlement_id,
            'municipality_id' => $municipality_id,
        ]);

        return $this->getJson(sprintf('/api/zip-codes/%s', $zip_code))
            ->assertOk()
            ->assertExactJson([
                'zip_code' => $zip_code,
                'locality' => "CIUDAD DE MEXICO",
                'federal_entity' => [
                    "key"=> 9,
                    "name"=> "CIUDAD DE MEXICO",
                    "code"=> null
                ],
                'settlements' => [
                    "key"=> 82,
                    "name"=> "SANTA FE",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Pueblo"
                    ]
                ],
                "municipality"=> [
                    "key"=> 10,
                    "name"=> "ALVARO OBREGON"
                ]
            ]);
    }
}
