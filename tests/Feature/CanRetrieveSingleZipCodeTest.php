<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\ZipCode;
use App\Models\Settlement;
use App\Models\Municipality;
use App\Models\SettlementType;
use App\Models\State;
use Database\Seeders\StatesSeeder;
use Database\Seeders\ZipCodesSeeder;
use Database\Seeders\SettlementsSeeder;
use Database\Seeders\MunicipalitiesSeeder;
use Database\Seeders\SettlementTypesSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanRetrieveSingleZipCodeTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_retrieve_single_zip_code() {
        $this->withoutExceptionHandling();

        $this->seed(StatesSeeder::class);

        $zip_code = '01210';
        $locality = 'Ciudad de Mexico';
        $state_id = 9;

        $municipality = Municipality::create([
            'key' => 10,
            'name' => "Álvaro Obregón",
            'state_id' => $state_id
        ]);

        $settlement_type = SettlementType::create([
            'name' => "Pueblo",
        ]);

        $zc = ZipCode::create([
            'zip_code' => $zip_code,
            'locality' => $locality,
            'state_id' => $state_id,
            'municipality_id' => $municipality->id,
        ]);

        Settlement::create([
            'key' => 82,
            'name' => 'Santa Fe',
            'zip_code_id' => $zc->id,
            'zone_type' => 'URBANO',
            'municipality_id' => $municipality->id,
            'settlement_type_id' => $settlement_type->id,
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
                'settlements' => [[
                    "key"=> 82,
                    "name"=> "SANTA FE",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Pueblo"
                    ]
                ]],
                "municipality"=> [
                    "key"=> 10,
                    "name"=> "ALVARO OBREGON"
                ]
            ]);
    }

    /**
     * Tests real data for DF
     *
     * @return void
     */
    public function test_can_retrieve_single_DF_zip_code_with_seed() {
        $this->withoutExceptionHandling();

        $this->seed(StatesSeeder::class);
        $this->seed(MunicipalitiesSeeder::class);
        $this->seed(SettlementTypesSeeder::class);
        $this->seed(ZipCodesSeeder::class);
        $this->seed(SettlementsSeeder::class);

        return $this->getJson(sprintf('/api/zip-codes/%s', '01210'))
            ->assertOk()
            ->assertExactJson([
                'zip_code' => '01210',
                'locality' => "CIUDAD DE MEXICO",
                'federal_entity' => [
                    "key"=> 9,
                    "name"=> "CIUDAD DE MEXICO",
                    "code"=> null
                ],
                'settlements' => [[
                    "key"=> 82,
                    "name"=> "SANTA FE",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Pueblo"
                    ]
                ]],
                "municipality"=> [
                    "key"=> 10,
                    "name"=> "ALVARO OBREGON"
                ]
            ]);
    }

    /**
     * Test for Aguas calientes with real data
     *
     * @return void
     */
    public function test_can_retrieve_single_AC_zip_code_with_seed() {
        $this->withoutExceptionHandling();

        $this->seed(StatesSeeder::class);
        $this->seed(MunicipalitiesSeeder::class);
        $this->seed(SettlementTypesSeeder::class);
        $this->seed(ZipCodesSeeder::class);
        $this->seed(SettlementsSeeder::class);

        return $this->getJson(sprintf('/api/zip-codes/%s', '20020'))
            ->assertOk()
            ->assertExactJson([
                'zip_code' => '20020',
                'locality' => "AGUASCALIENTES",
                'federal_entity' => [
                    "key"=> 1,
                    "name"=> "AGUASCALIENTES",
                    "code"=> null
                ],
                'settlements' => [
                    [
                    "key"=> 16,
                    "name"=> "BUENOS AIRES",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Colonia"
                        ]
                    ],
                    [
                    "key"=> 18,
                    "name"=> "CIRCUNVALACION NORTE",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Fraccionamiento"
                        ]
                    ],
                    [
                    "key"=> 19,
                    "name"=> "LAS ARBOLEDAS",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Fraccionamiento"
                        ]
                    ],
                    [
                    "key"=> 20,
                    "name"=> "VILLAS DE SAN FRANCISCO",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Fraccionamiento"
                        ]
                    ],
                ],
                "municipality"=> [
                    "key"=> 1,
                    "name"=> "AGUASCALIENTES"
                ]
            ]);
    }

    /**
     * Test for Baja California with real data
     *
     * @return void
     */
    public function test_can_retrieve_single_BC_zip_code_with_seed() {
        $this->withoutExceptionHandling();

        $this->seed(StatesSeeder::class);
        $this->seed(MunicipalitiesSeeder::class);
        $this->seed(SettlementTypesSeeder::class);
        $this->seed(ZipCodesSeeder::class);
        $this->seed(SettlementsSeeder::class);

        return $this->getJson(sprintf('/api/zip-codes/%s', '21120'))
            ->assertOk()
            ->assertExactJson([
                'zip_code' => '21120',
                'locality' => "MEXICALI",
                'federal_entity' => [
                    "key"=> 2,
                    "name"=> "BAJA CALIFORNIA",
                    "code"=> null
                ],
                'settlements' => [
                    [
                    "key"=> 38,
                    "name"=> "PUEBLO NUEVO",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Colonia"
                        ]
                    ],
                    [
                    "key"=> 39,
                    "name"=> "RIO NUEVO",
                    "zone_type"=> "URBANO",
                    "settlement_type" => [
                        "name"=> "Colonia"
                        ]
                    ],
                ],
                "municipality"=> [
                    "key"=> 2,
                    "name"=> "MEXICALI"
                ]
            ]);
    }
}
