<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
class ProductComponent extends Component
{
    public function render()
    {
        $product = Product::all();
        return view(
            'livewire.admin.product-component',
            ['product'=>$product,]
    );}
}
