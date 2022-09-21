<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    private static $category,$image, $imageName, $imageUrl, $directory, $extension;

    public static function getImage($request, $directory)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = 'problog_'. '.' .time(). '.' .self::$extension;
        self::$image->move($directory, self::$imageName);
        return $directory.self::$imageName;
    }
    public static function addCategory($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::getImage($request, 'website/category_img/');
        self::$category->status = $request->status;
        self::$category->save();
    }
    public static function manageCategory()
    {

    }
}
