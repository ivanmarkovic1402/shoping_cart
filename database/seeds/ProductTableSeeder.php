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
            'imagePath' => 'https://m.media-amazon.com/images/M/MV5BNjQ3NWNlNmQtMTE5ZS00MDdmLTlkZjUtZTBlM2UxMGFiMTU3XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_UX182_CR0,0,182,268_AL_.jpg',
            'title' => 'Harry Potter',
            'description' => 'Harry Potter opis ovde',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://cdn.waterstones.com/bookjackets/large/9780/0074/9780007448036.jpg',
            'title' => 'Game of thrones',
            'description' => 'Opis gejmotrona ovde',
            'price' => 20
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images.gr-assets.com/books/1320538159l/53418.jpg',
            'title' => 'Hulio Cortasar-The winners',
            'description' => 'Dobitnici opis',
            'price' => 20
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51EstVXM1UL._SX331_BO1,204,203,200_.jpg',
            'title' => 'Lord of the rings',
            'description' => 'Lord of the rings opis',
            'price' => 15
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/DaVinciCode.jpg/220px-DaVinciCode.jpg',
            'title' => 'Da vinci code',
            'description' => 'da vinci code description',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.knjizare-vulkan.rs/files/thumbs/files/images/slike_proizvoda/thumbs_1200/292606_1200_1200px.jpg',
            'title' => 'Problem Spinoza',
            'description' => 'Description of Irvin Jalom\'s spinosa',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://www.jamessacorey.com/wp-content/uploads/2015/05/Corey_NemesisGames_HC.jpg',
            'title' => 'Budjenje nemani',
            'description' => 'Opis bydjenja nemani',
            'price' => 12
        ]);
        $product->save();
    }
}
