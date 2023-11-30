<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class EditForm extends Component
{
    public $open = false;
    public $name = "";
    public $description = "";
    public $price = "";
    public $stock = "";
    public $categoryId = "";


    public function render()
    {
        $product = Product::find(1);
        $categories = Category::all();
        return view('livewire.products.edit-form', compact('product', 'categories'));
    }
}
