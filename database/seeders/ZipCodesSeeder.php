<?php

namespace Database\Seeders;

use App\Models\Municipality;
use App\Models\ZipCode;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ZipCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DistritoFederalZipCodesSeeder::class);
    }
}
