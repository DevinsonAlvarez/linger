<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Validate;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CreateForm extends Component
{
    public $name = "";
    public $description = "";
    public $price = "";
    public $stock = "";
    public $categoryId = "";

    public function save()
    {
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'category_id' => $this->categoryId,
        ]);
        $this->dispatch('closeModal');
        $this->dispatch('render');
        $this->reset();
    }

    public function render()
    {
        $categories = Category::all(['id', 'name']);
        return view('livewire.products.create-form', compact('categories'));
    }
}
