<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Variant;
use App\Models\Product;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            Variant::factory()->count(3)->create(['product_id' => $product->id]);
        }
    }
}
