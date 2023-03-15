<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories/index')->with(['categories' => $category->getPaginateByLimit()]);
    }
    
    public function show(Category $category)
    {
        return view('categories/show')->with(['category' => $category]);
    }
    
    public function create()
    {
        return view('categories/create');
    }
    
    public function store(CategoryRequest $request, Category $category)
    {
        $input = $request['category'];
        $category->fill($input)->save();
        return redirect('/categories/' . $category->id);
    }
}
