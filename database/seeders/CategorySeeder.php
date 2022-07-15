<?php

namespace Database\Seeders;

use app\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_mimpi')->insert([
            'name' => 'Elektronik',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Edukasi',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Pakaian',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Hiburan',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Perjalanan',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Kendaraan',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Olahraga',
        ]);
        DB::table('category_mimpi')->insert([
            'name' => 'Lainnya',
        ]);
    }
}
