<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('categories')->insert([
                'category_name' => $faker->name,
                'category_type' => rand(0, 1),
                'created_at' => now()
            ]);

            DB::table('shopping_order')->insert([
                'customer_ID' => $index,
                'date' => $faker->date(),
                'created_at' => now()
            ]);

            DB::table('deliveries')->insert([
                'customer_ID' => $index,
                'date' => $faker->date(),
                'created_at' => now()
            ]);

            DB::table('products')->insert([
                'category_ID' => $index,
                'product_name' => $faker->name,
                'created_at' => now()
            ]);

            DB::table('customers')->insert([
                'name' => $faker->name,
                'contact_address' => $faker->phoneNumber,
                'address' => $faker->address,
                'created_at' => now()
            ]);

            DB::table('transaction_reports')->insert([
                'customer_ID' => $index,
                'order_ID' => $index,
                'product_ID' => $index,
                'payment_ID' => $index,
                'created_at' => now()
            ]);

            DB::table('seller')->insert([
                'product_ID' => $index,
                'name' => $faker->name,
                'created_at' => now()
            ]);

            DB::table('payment')->insert([
                'category_ID' => $index,
                'date' => $faker->date(),
                'created_at' => now()
            ]);
        }
    }
}
