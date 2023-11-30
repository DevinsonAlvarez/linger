<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateForm extends Component
{

    public $name = '';

    public function save()
    {
        Category::create([
            "name" => $this->name
        ]);
        $this->dispatch('render');
        $this->dispatch('closeModal');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.categories.create-form');
    }
}
