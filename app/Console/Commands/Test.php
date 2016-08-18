<?php

namespace App\Console\Commands;

use App\Models\Image;
use App\Models\ProductImage;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for functionality testing, without running web';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $image = Image::find(1);
        // foreach ($image->productImages()->get() as $productImage) {
        //     dump($productImage);
        // }
        // dump($image->productImages());

        // $productImage = ProductImage::find(1);
        //
        // dump($productImage->image()->first());
    }
}
