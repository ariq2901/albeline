<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert(
            [
                [
                    'user_id' => rand(2, 26),
                    'product_id' => rand(1, 27),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => rand(2, 26),
                    'product_id' => rand(1, 27),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => rand(2, 26),
                    'product_id' => rand(1, 27),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
