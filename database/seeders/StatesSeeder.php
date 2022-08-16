<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatesSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statesList = [
            ['id' => 1, 'name'=>'Aguascalientes', 'code'=>null],
            ['id' => 2, 'name'=>'Baja California', 'code'=>null],
            ['id' => 3, 'name'=>'Baja California Sur', 'code'=>null],
            ['id' => 4, 'name'=>'Campeche', 'code'=>null],
            ['id' => 5, 'name'=>'Coahuila de Zaragoza', 'code'=>null],
            ['id' => 6, 'name'=>'Colima', 'code'=>null],
            ['id' => 7, 'name'=>'Chiapas', 'code'=>null],
            ['id' => 8, 'name'=>'Chihuahua', 'code'=>null],
            ['id' => 9, 'name'=>'Ciudad de Mexico', 'code'=>null],
            ['id' => 10, 'name'=>'Durango', 'code'=>null],
            ['id' => 11, 'name'=>'Guanajuato', 'code'=>null],
            ['id' => 12, 'name'=>'Guerrero', 'code'=>null],
            ['id' => 13, 'name'=>'Hidalgo', 'code'=>null],
            ['id' => 14, 'name'=>'Jalisco', 'code'=>null],
            ['id' => 15, 'name'=>'Mexico', 'code'=>null],
            ['id' => 16, 'name'=>'Michoacan', 'code'=>null],
            ['id' => 17, 'name'=>'Morelos', 'code'=>null],
            ['id' => 18, 'name'=>'Nayarit', 'code'=>null],
            ['id' => 19, 'name'=>'Nuevo Leon', 'code'=>null],
            ['id' => 20, 'name'=>'Oaxaca', 'code'=>null],
            ['id' => 21, 'name'=>'Puebla', 'code'=>null],
            ['id' => 22, 'name'=>'Queretaro', 'code'=>null],
            ['id' => 23, 'name'=>'Quintana Roo', 'code'=>null],
            ['id' => 24, 'name'=>'San Luis Potosi', 'code'=>null],
            ['id' => 25, 'name'=>'Sinaloa', 'code'=>null],
            ['id' => 26, 'name'=>'Sonora', 'code'=>null],
            ['id' => 27, 'name'=>'Tabasco', 'code'=>null],
            ['id' => 28, 'name'=>'Tamaulipas', 'code'=>null],
            ['id' => 29, 'name'=>'Tlaxcala', 'code'=>null],
            ['id' => 30, 'name'=>'Veracruz Llave', 'code'=>null],
            ['id' => 31, 'name'=>'Yucatan', 'code'=>null],
            ['id' => 32, 'name'=>'Zacatecas', 'code'=>null],
        ];

        DB::table('states')->truncate();
        State::insert($statesList);
        unset($statesList);
    }
}
