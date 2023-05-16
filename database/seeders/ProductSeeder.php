<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Boci',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-delicious-bakso_23-2148938561.jpg?size=626&ext=jpg&ga=GA1.2.1980583038.1684220368&semt=sph',
                'price' => 120,
                'description' => 'Gurih dan lezat',
                'stok' => 10
            ],
            [
                'name' => 'Stick Keju',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-delicious-tequenos_23-2148803247.jpg?size=626&ext=jpg&ga=GA1.2.1980583038.1684220368&semt=ais',
                'price' => 220,
                'description' => 'Manis dan gurih',
                'stok' => 10
            ],
            [
                'name' => 'Roti Bakar',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-tequenos-illustration_52683-54219.jpg?size=626&ext=jpg&ga=GA1.2.1980583038.1684220368&semt=ais',
                'price' => 300,
                'description' => 'Lumer dan creamy',
                'stok' => 10
            ],
            [
                'name' => 'Juz',
                'image' => 'https://img.freepik.com/free-vector/hand-drawn-illustration-delicious-granita_23-2149452137.jpg?size=626&ext=jpg&ga=GA1.2.1980583038.1684220368&semt=ais',
                'price' => 110,
                'description' => 'Segar dan creamy',
                'stok' => 10
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}

