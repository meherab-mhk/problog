<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blogs, $categories;
    public function addBlog()
    {
        $this->categories = Category::where('status', 1)->get();
        return view('admin.blog.add-blog', ['categories'=>$this->categories]);
    }
    public function createBlog(Request $request)
    {
        Blog::addBlog($request);
        return redirect('/add/blog')->with('message', 'Added new blog successfully');
    }
    public function manageBlog()
    {
        $this->blogs = Blog::all();
        return view('admin.blog.manage-blog',['blogs'=>$this->blogs]);
    }
}
