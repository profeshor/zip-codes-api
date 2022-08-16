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
        $this->call(AguasCalientesZipCodesSeeder::class);
        $this->call(BajaCaliforniaZipCodesSeeder::class);
        $this->call(BajaCaliforniaSurZipCodesSeeder::class);
        $this->call(CampecheZipCodesSeeder::class);
        $this->call(CoahuilaDeZaragozaZipCodesSeeder::class);
        $this->call(ColimaZipCodesSeeder::class);
        $this->call(ChiapasZipCodesSeeder::class);
        $this->call(ChihuahuaZipCodesSeeder::class);
        $this->call(DistritoFederalZipCodesSeeder::class);
        $this->call(DurangoZipCodesSeeder::class);
        $this->call(GuanajuatoZipCodesSeeder::class);
        $this->call(GuerreroZipCodesSeeder::class);
        $this->call(HidalgoZipCodesSeeder::class);
        $this->call(JalistoZipCodesSeeder::class);
        $this->call(MexicoZipCodesSeeder::class);
        $this->call(MichoacanZipCodesSeeder::class);
        $this->call(MorelosZipCodesSeeder::class);
        $this->call(NayaritZipCodesSeeder::class);
        $this->call(NuevoLeonZipCodesSeeder::class);
        $this->call(OaxacaZipCodesSeeder::class);
        $this->call(PueblaZipCodesSeeder::class);
        $this->call(QueretaroZipCodesSeeder::class);
        $this->call(QuintanaRooZipCodesSeeder::class);
        $this->call(SanLuisPotosiZipCodesSeeder::class);
        $this->call(SinaloaZipCodesSeeder::class);
        $this->call(SonoraZipCodesSeeder::class);
        $this->call(TabascoZipCodesSeeder::class);
        $this->call(TamualipasZipCodesSeeder::class);
        $this->call(TlaxlacaZipCodesSeeder::class);
        $this->call(VeracruzZipCodesSeeder::class);
        $this->call(YucatanZipCodesSeeder::class);
        $this->call(ZacatecasZipCodesSeeder::class);
    }
}
