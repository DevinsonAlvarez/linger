<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class EditForm extends Component
{

    public $open = false;
    public $category;

    protected $rules = [
        "category.name" => "required"
    ];

    protected $listeners = ['openModal', 'openModal'];

    public function openModal($id)
    {
        $this->category = Category::find($id);
        $this->open = true;
    }

    public function closeModal()
    {
        $this->open = false;
    }

    public function update()
    {
        $this->validate($this->rules);
        $this->category->save();
        $this->dispatch('render');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.categories.edit-form');
    }
}
