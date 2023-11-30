<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class EditForm extends Component
{
    public $open = false;
    public $product;
 
    protected $rules = [
        'product.name' => 'required',
        'product.description' => 'required',
        'product.price' => 'required',
        'product.stock' => 'required',
        'product.category_id' => 'required',
    ];

    protected $listeners = ['openModal' => 'openModal'];

    public function update()
    {
        $this->validate($this->rules);

        $this->product->save();
        $this->dispatch('render');
        $this->open = false;
    }

    public function closeModal()
    {
        $this->open = false;
    }

    public function openModal($id)
    {
        $this->product = Product::find($id);
        $this->open = true;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.products.edit-form', compact('categories'));
    }
}
