<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'iPhone 15 Pro Max',
                'precio' => 5500,
                'marca_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'iPhone 14',
                'precio' => 4500,
                'marca_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Moto G84 5G',
                'precio' => 3000,
                'marca_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Moto E13',
                'precio' => 2300,
                'marca_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Huawei Y9a',
                'precio' => 2700,
                'marca_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Huawei P60 Pro',
                'precio' => 2800,
                'marca_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
