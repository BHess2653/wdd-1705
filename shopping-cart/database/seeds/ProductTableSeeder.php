<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/31%2BcYX%2BI0mL._SL150_.jpg',
          'title' => 'BSE 59077 New Mass Airflow Sensor',
          'description' => 'BSEs Mass Air Flow is engineered for affordability, and convenience.',
          'price' => 61
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/41%2BTq3lXLEL._SL150_.jpg',
          'title' => 'Standard Motor Products AS217 MAP/BAPP Sensor',
          'description' => 'Manifold Absolute Pressure Sensor',
          'price' => 18
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/31Au5DyamtL._SL150_.jpg',
          'title' => 'Champion RC12MCC4 (439) Copper Plus Replacement Spark Plug, (Pack of 1)',
          'description' => 'Champion Double Platinum Power spark plugs deliver more powerful performance.',
          'price' => 3
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/513pSfsoBIL._SL150_.jpg',
          'title' => 'ECCPP Ignition Coils for Jeep Dodge Mitsubishi Compatible with C1231 5C1114 UF-270 UF-297 UF-399（Pack of 8)',
          'description' => 'Compatible with OEM numbers:UF270,56028138, 56028138AB, 56028138AD, 56028138AE, 56028138AF, UF297,#5C1114,C1231,COP101',
          'price' => 65
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/31GQzA7N07L._SL150_.jpg',
          'title' => 'Mopar Air Temp. Sensor',
          'description' => 'This is a MOPAR replacement Air Temperature Sensor for a 12-14 Wrangler JK.',
          'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/511rqp5JsxL._SL150_.jpg',
          'title' => 'Battery Tender 021-0123 Battery Tender Junior 12V, 0.75A',
          'description' => 'Battery Tender Junior 12V Battery Charger is much more than a trickle charger.',
          'price' => 25
        ]);
        $product->save();
    }
}
