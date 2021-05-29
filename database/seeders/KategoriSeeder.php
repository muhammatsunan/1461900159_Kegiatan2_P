<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ktg1 = new Kategori();
        $ktg1->kategori_nama = "Fiksi";
        $ktg1->save();
    }
}
