<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            'artist_name'=>'Justin',
            'country'=>'USA'
        ]);

        DB::table('artists')->insert([
            'artist_name'=>'Titi',
            'country'=>'Indonesia'
        ]);
    }
}
