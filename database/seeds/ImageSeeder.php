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
        
        $images = [
            ['title' => 'test1', 'extension' => 'jpg',],
            ['title' => 'asdf2', 'extension' => 'png',],
        ];

        DB::table((new \App\Models\Image())->getTable())->insert($images);
    }
}