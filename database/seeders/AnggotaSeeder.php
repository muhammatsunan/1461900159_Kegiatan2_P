<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agt1 = new Anggota();
        $agt1->anggota_nama = "sunan";
        $agt1->anggota_alamat = "Lamongan";
        $agt1->anggota_jk = "L";
        $agt1->anggota_telp = "087635647897";
        $agt1->save();
    }
}
