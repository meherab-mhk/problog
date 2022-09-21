<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;
    private static $blog, $image, $imageName, $directory, $imageUrl, $extension;

    public static function getImage($request, $directory)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = 'problog_'. '.'.time(). '.' .self::$extension;
        self::$image->move($directory, self::$imageName);
        return $directory.self::$imageName;
    }
    public static function addBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->author = Auth::user()->id;
        self::$blog->title = $request->title;
        self::$blog->description = $request->description;
        self::$blog->image = self::getImage($request, 'website/blog_img/');
        self::$blog->status = $request->status;
        self::$blog->date = date('Y-m-d');
        self::$blog->save();
    }
}
