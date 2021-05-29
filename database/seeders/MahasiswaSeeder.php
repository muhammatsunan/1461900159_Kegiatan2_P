<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900159";
        $mhs1->nama_mhs = "Muhamat Sun'an";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "1461900158";
        $mhs2->nama_mhs = "Dwi Agus Purnomo";
        $mhs2->save();

        $mhs3 = new Mahasiswa();
        $mhs3->nbi = "1461900157";
        $mhs3->nama_mhs = "Wahyu Eko Wijayanto";
        $mhs3->save();
    }
}
