<?php

namespace Database\Seeders;

use App\Models\Rasyad;
use Illuminate\Database\Seeder;

class RasyadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku1 = new Rasyad();
        $buku1->id = "1";
        $buku1->judul = "Daskomputasi";
        $buku1->tahun_terbit = "2021";
        $buku1->save();

        $buku2 = new Rasyad();
        $buku2->id = "2";
        $buku2->judul = "Daskom Colony";
        $buku2->tahun_terbit = "2021";
        $buku2->save();
    }
}
