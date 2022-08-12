<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    private $statesList = [
        ['id' => 1, 'name'=>'Aguascalientes', 'code'=>'AG'],
		['id' => 2, 'name'=>'Baja California', 'code'=>'BJ'],
		['id' => 3, 'name'=>'Baja California Sur', 'code'=>'BS'],
		['id' => 4, 'name'=>'Campeche', 'code'=>'CP'],
		['id' => 5, 'name'=>'Chiapas', 'code'=>'CH'],
		['id' => 6, 'name'=>'Chihuahua', 'code'=>'CI'],
		['id' => 7, 'name'=>'Coahuila de Zaragoza', 'code'=>'CU'],
		['id' => 8, 'name'=>'Colima', 'code'=>'CL'],
		['id' => 9, 'name'=>'Ciudad de Mexico', 'code'=>null],
		['id' => 10, 'name'=>'Durango', 'code'=>'DG'],
		['id' => 11, 'name'=>'Estado Mexico', 'code'=>'EM'],
		['id' => 12, 'name'=>'Guanajuato', 'code'=>'GJ'],
		['id' => 13, 'name'=>'Guerrero', 'code'=>'GR'],
		['id' => 14, 'name'=>'Hidalgo', 'code'=>'HG'],
		['id' => 15, 'name'=>'Jalisco', 'code'=>'JA'],
		['id' => 16, 'name'=>'Mexico', 'code'=>'MX'],
		['id' => 17, 'name'=>'Michoacan', 'code'=>'MH'],
		['id' => 18, 'name'=>'Morelos', 'code'=>'MR'],
		['id' => 19, 'name'=>'Nayarit', 'code'=>'NA'],
		['id' => 20, 'name'=>'Nuevo Leon', 'code'=>'NL'],
		['id' => 21, 'name'=>'Oaxaca', 'code'=>'OA'],
		['id' => 22, 'name'=>'Puebla', 'code'=>'PU'],
		['id' => 23, 'name'=>'Queretaro', 'code'=>'QA'],
		['id' => 24, 'name'=>'Quintana Roo', 'code'=>'QR'],
		['id' => 25, 'name'=>'San Luis Potosi', 'code'=>'SL'],
		['id' => 26, 'name'=>'Sinaloa', 'code'=>'SI'],
		['id' => 27, 'name'=>'Sonora', 'code'=>'SO'],
		['id' => 28, 'name'=>'Tabasco', 'code'=>'TA'],
		['id' => 29, 'name'=>'Tamaulipas', 'code'=>'TM'],
		['id' => 30, 'name'=>'Tlaxcala', 'code'=>'TL'],
		['id' => 31, 'name'=>'Veracruz Llave', 'code'=>'VL'],
		['id' => 32, 'name'=>'Yucatan', 'code'=>'YC'],
		['id' => 33, 'name'=>'Zacatecas', 'code'=>'ZT'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();
        State::insert($this->statesList);
    }
}
