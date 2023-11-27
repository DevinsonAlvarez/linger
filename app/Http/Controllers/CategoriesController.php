<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories =  Category::query()->withCount('products')->orderBy('products_count', 'desc')->get();
        return view("categories.index", compact("categories"));
    }

    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back();
    }


    public function delete($id)
    {
        $categories =  Category::destroy($id);
        return redirect()->back();
    }
}
