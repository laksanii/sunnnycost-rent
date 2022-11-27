<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            [
                'category_name' => 'VTuber'
            ],
        ]);

        DB::table('sizes')->insert([
            [
                'size' => 'S'
            ],
            [
                'size' => 'M'
            ],
            [
                'size' => 'L'
            ],
        ]);

        DB::table('costumes')->insert([
            [
                'costume_name' => 'Kobo Kanaeru',
                'description' => 'Kobo Kanaeru fullset include sepatu dan acc',
                'price' => 100000,
                'gambar' => 'kobo.jpg',
                'status' => 'ready',
                'category_id' => '1',
            ]
        ]);

        DB::table('costume_size')->insert([
            [
                'costume_id' => 1,
                'size_id' => 1,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'no_telepon' => '083832352467',
                'provinsi' => 'DKI Jakarta',
                'kota' => 'Jakarta Timur',
                'alamat' => 'jl Pangkalan Jati bla bla bla',
                'kode_pos' => '60182',
                'role' => 'admin',
            ]
        ]);
    }
}