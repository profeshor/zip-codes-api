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
            ['id' => 1, 'name'=>'Aguascalientes', 'code'=>'AG'],
            ['id' => 2, 'name'=>'Baja California', 'code'=>'BJ'],
            ['id' => 3, 'name'=>'Baja California Sur', 'code'=>'BS'],
            ['id' => 4, 'name'=>'Campeche', 'code'=>'CP'],
            ['id' => 5, 'name'=>'Coahuila de Zaragoza', 'code'=>'CU'],
            ['id' => 6, 'name'=>'Colima', 'code'=>'CL'],
            ['id' => 7, 'name'=>'Chiapas', 'code'=>'CH'],
            ['id' => 8, 'name'=>'Chihuahua', 'code'=>'CI'],
            ['id' => 9, 'name'=>'Ciudad de Mexico', 'code'=>null],
            ['id' => 10, 'name'=>'Durango', 'code'=>'DG'],
            ['id' => 11, 'name'=>'Guanajuato', 'code'=>'GJ'],
            ['id' => 12, 'name'=>'Guerrero', 'code'=>'GR'],
            ['id' => 13, 'name'=>'Hidalgo', 'code'=>'HG'],
            ['id' => 14, 'name'=>'Jalisco', 'code'=>'JA'],
            ['id' => 15, 'name'=>'Mexico', 'code'=>'MX'],
            ['id' => 16, 'name'=>'Michoacan', 'code'=>'MH'],
            ['id' => 17, 'name'=>'Morelos', 'code'=>'MR'],
            ['id' => 18, 'name'=>'Nayarit', 'code'=>'NA'],
            ['id' => 19, 'name'=>'Nuevo Leon', 'code'=>'NL'],
            ['id' => 20, 'name'=>'Oaxaca', 'code'=>'OA'],
            ['id' => 21, 'name'=>'Puebla', 'code'=>'PU'],
            ['id' => 22, 'name'=>'Queretaro', 'code'=>'QA'],
            ['id' => 23, 'name'=>'Quintana Roo', 'code'=>'QR'],
            ['id' => 24, 'name'=>'San Luis Potosi', 'code'=>'SL'],
            ['id' => 25, 'name'=>'Sinaloa', 'code'=>'SI'],
            ['id' => 26, 'name'=>'Sonora', 'code'=>'SO'],
            ['id' => 27, 'name'=>'Tabasco', 'code'=>'TA'],
            ['id' => 28, 'name'=>'Tamaulipas', 'code'=>'TM'],
            ['id' => 29, 'name'=>'Tlaxcala', 'code'=>'TL'],
            ['id' => 30, 'name'=>'Veracruz Llave', 'code'=>'VL'],
            ['id' => 31, 'name'=>'Yucatan', 'code'=>'YC'],
            ['id' => 32, 'name'=>'Zacatecas', 'code'=>'ZT'],
        ];

        DB::table('states')->truncate();
        State::insert($statesList);
        unset($statesList);
    }
}
