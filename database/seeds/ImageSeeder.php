<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table((new \App\Models\Image())->getTable())->truncate();
        DB::table((new \App\Models\ProductImage())->getTable())->truncate();

        $images = [
            ['title' => 'test1', 'extension' => 'jpg', "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now(),],
            ['title' => 'asdf2', 'extension' => 'png', "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now(),],
        ];

        $productImages = [
            [ 'image_id' => 1, 'product_id' => 1, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now(),],
            [ 'image_id' => 1, 'product_id' => 2, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now(),],
        ];

        DB::table((new \App\Models\Image())->getTable())->insert($images);
        DB::table((new \App\Models\ProductImage())->getTable())->insert($productImages);
    }
}