<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
}
