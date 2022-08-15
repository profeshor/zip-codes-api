<?php

namespace Database\Seeders;

use App\Models\SettlementType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettlementTypesSeeder extends Seeder
{
    private $settlementTypesList = [
        [ 'id' => 1, 'name' => 'Aeropuerto'],
        [ 'id' => 2, 'name' => 'Barrio'],
        [ 'id' => 4, 'name' => 'Campamento'],
        [ 'id' => 9, 'name' => 'Colonia'],
        [ 'id' => 10, 'name' => 'Condominio'],
        [ 'id' => 11, 'name' => 'Congregación'],
        [ 'id' => 12, 'name' => 'Conjunto habitacional'],
        [ 'id' => 15, 'name' => 'Ejido'],
        [ 'id' => 17, 'name' => 'Equipamiento'],
        [ 'id' => 18, 'name' => 'Exhacienda'],
        [ 'id' => 21, 'name' => 'Fraccionamiento'],
        [ 'id' => 23, 'name' => 'Granja'],
        [ 'id' => 24, 'name' => 'Hacienda'],
        [ 'id' => 28, 'name' => 'Pueblo'],
        [ 'id' => 29, 'name' => 'Ranchería'],
        [ 'id' => 31, 'name' => 'Unidad habitacional'],
        [ 'id' => 33, 'name' => 'Zona comercial'],
        [ 'id' => 34, 'name' => 'Zona federal'],
        [ 'id' => 37, 'name' => 'Zona industrial'],
        [ 'id' => 40, 'name' => 'Puerto'],
        [ 'id' => 45, 'name' => 'Paraje'],
        [ 'id' => 46, 'name' => 'Zona naval'],
        [ 'id' => 47, 'name' => 'Zona militar'],
        [ 'id' => 48, 'name' => 'Rancho'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlement_types')->truncate();
        SettlementType::insert($this->settlementTypesList);
    }
}
