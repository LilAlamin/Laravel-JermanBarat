<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            'id' => '1',
            'judul' => 'Ahli Surga',
            'penulis'=> 'Amroe Bakul',
            'tahun_terbit'=>'2022'
        ]);
    }
}
