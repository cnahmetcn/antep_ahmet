<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class UpdateProductStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:product-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ürünlerin durumunu günceller';

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
     * @return int
     */
    public function handle()
    {
        // işlem burda yapılır
        $products = Product::all();
        /*
        foreach($products as $p)
        {
            $p->update([
                'status' => false
            ]);
        }
        */

        $products->each(function($p){
            $p->update([
                'status' => false
            ]);
        });

        return 0;
    }
}
