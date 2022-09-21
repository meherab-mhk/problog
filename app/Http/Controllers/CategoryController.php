<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $categories;
    public function addCategory()
    {
        return view('admin.category.add-category');
    }
    public function createCategory(Request $request)
    {
        Category::addCategory($request);
        return redirect('/add/blog-category')->with('message', 'added new category successfully');
    }
    public function manageCategory()
    {
        $this->categories = Category::all();
        return view('admin.category.manage-category',['categories'=>$this->categories]);
    }
}
