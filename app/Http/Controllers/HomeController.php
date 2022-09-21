<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $blogs, $categories;
    public function index()
    {
        $this->categories = Category::where('status', 1)->get();
        $this->blogs = Blog::where('status', 1)->get();
        return view('website.home.index', [

            'categories'=>$this->categories,
            'blogs' => $this->blogs,

        ]);
    }
    public function category()
    {
        return view('website.category.category');
    }
    public function detail()
    {
        return view('website.detail.detail');
    }
}
