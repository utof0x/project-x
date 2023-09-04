<?php

namespace App\Livewire;

use App\Models\Products;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Product extends Component
{
    public $products = [];

    public function getProductData()
    {
        $article = Route::current()->parameter('article');
        $products = Products::where('article', $article)->get();
        $clothesSizeIds = [];
        $colors = [];

        foreach ($products as $product) {
            $clothesSizeIds[] = $product->clothes_size_id;
            $colors[] = $product->color_id;
        }

        return [
            'gender' => $products->first()->gender->name,
            'type' => $products->first()->type->name,
            'category' => $products->first()->category->name,
            'name' => $products->first()->name,
            'description' => '',
            'price' => $products->first()->price,
            'old_price' => '200',
            'colors' => array_unique($colors),
            'clothesSizeIds' => array_unique($clothesSizeIds),
            'long_description' => '',
            'features' => '',
        ];
    }

    public function render()
    {
        return view('livewire.app.product', [
            'product' => $this->getProductData()
        ]);
    }
}
