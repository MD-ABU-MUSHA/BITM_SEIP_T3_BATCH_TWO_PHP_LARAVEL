<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog;
    private static $image;
    private static $imageName;
    private static $directory;

    protected static function getImageUrl($request){
        self::$image = $request->file('image');
        if(self::$image)
        {
            self::$imageName = self::$image->getClientOriginalName();
                self::$directory = 'blog-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory. self::$imageName;
        }else{
            return ' ';
        }
    }

    public static function newBlog($request){
        self::$blog = new Blog();
        self::$blog->title          = $request->title;
        self::$blog->author         = $request->author;
        self::$blog->description    = $request->description;
        self::$blog->image          = self::getImageUrl($request);
        self::$blog->save();
    }
}
