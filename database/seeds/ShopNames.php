<?php

use Illuminate\Database\Seeder;
use App\Models\Variant;

class ShopNames extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=10; $i++ )
        {
            $sku= str_random(10);
            $inventory_quantity=rand(20,50);

            for ($j=0; $j<5; $j++)
            {
                Variant::insert(array('variant_id' => rand(1, 10),
                    'product_id' => rand(1, 10),
                    'product_title' => str_random(13),
                    'title' => str_random(10),
                    'price' => rand(500, 1300),
                    'inventory_quantity' => $inventory_quantity,
                    'exclude' => (1),
                    'sku' =>$sku));
            }
        }

    }
}
