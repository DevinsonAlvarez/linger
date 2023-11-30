<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $sort = 'id';
    public $desc = true;
    public $search = '';

    protected $listeners = ['render' => 'render'];

    public function orderBy($column)
    {
        if ($this->sort == $column) {
            $this->desc = !$this->desc;
        } else {
            $this->desc = false;
        }
        $this->sort = $column;
    }

    public function delete(Product $product)
    {
        $product->delete();
    }

    public function render()
    {
        $products = Product::query()->with('category')
            ->orderBy($this->sort, $this->desc ? 'desc' : 'asc')
            ->where('name', 'like', "%$this->search%")
            ->paginate(10);
        return view('livewire.products.data-table', compact('products'));
    }
}
