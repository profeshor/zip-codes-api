<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettlementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlements')->truncate();

        /*$this->call(AguasCalientesSettlementsSeeder::class);
        $this->call(BajaCaliforiaSettlementsSeeder::class);
        $this->call(BajaCaliforiaSurSettlementsSeeder::class);
        $this->call(CampecheSettlementsSeeder::class);
        $this->call(CoahuilaDeZaragozaSettlementsSeeder::class);
        $this->call(ColimaSettlementsSeeder::class);
        $this->call(ChiapasSettlementsSeeder::class);
        $this->call(ChihuahuaSettlementsSeeder::class);*/
        $this->call(DistritoFederalSettlementsSeeder::class);
       /* $this->call(DurangoSettlementsSeeder::class);
        $this->call(GuanajuatoSettlementsSeeder::class);
        $this->call(GuerreroSettlementsSeeder::class);
        $this->call(HidalgoSettlementsSeeder::class);
        $this->call(JalistoSettlementsSeeder::class);
        $this->call(MexicoSettlementsSeeder::class);
        $this->call(MichoacanDeOcampoSettlementsSeeder::class);
        $this->call(MorelosSettlementsSeeder::class);
        $this->call(NayaritSettlementsSeeder::class);
        $this->call(NuevoLeonSettlementsSeeder::class);
        $this->call(OaxacaSettlementsSeeder::class);
        $this->call(PueblaSettlementsSeeder::class);
        $this->call(QueretaroSettlementsSeeder::class);
        $this->call(QuintanaRooSettlementsSeeder::class);
        $this->call(SanLuisPotosiSettlementsSeeder::class);
        $this->call(SinaloaSettlementsSeeder::class);
        $this->call(SonoraSettlementsSeeder::class);
        $this->call(TabascoSettlementsSeeder::class);
        $this->call(TamaulipasSettlementsSeeder::class);
        $this->call(TlaxlacaSettlementsSeeder::class);
        $this->call(VeracruzSettlementsSeeder::class);
        $this->call(YucatanSettlementsSeeder::class);
        $this->call(ZacatecasSettlementsSeeder::class);*/
    }
}
