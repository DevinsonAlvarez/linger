<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class ListCategories extends Component
{

    protected $listeners = ['render' => 'render'];

    public function delete(Category $category)
    {
        $category->delete();
    }

    public function render()
    {
        $categories =  Category::query()->withCount('products')->orderBy('products_count', 'desc')->get();
        return view('livewire.categories.list-categories', compact('categories'));
    }
}
