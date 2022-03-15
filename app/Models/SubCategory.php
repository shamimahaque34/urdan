<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','name','description','image','status'];

    protected static $subCategory;
    protected static $subCategoryImage;
    protected static $imageDirectory;
    protected static $imageName;
    protected static $imageUrl;

    public static function saveImage ($request)
    {
        self::$subCategoryImage = $request->file('image');
        self::$imageName = 'sub-category-image'.time().'.'.self::$subCategoryImage->getClientOriginalExtension();
        self::$imageDirectory = 'sub-category-image/';
        self::$subCategoryImage->move(self::$imageDirectory, self::$imageName);
        return self::$imageDirectory.self::$imageName;
    }
    public static function newSubCategory ($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id     = $request->category_id;
        self::$subCategory->name     = $request->name;
        self::$subCategory->description     = $request->description;
        self::$subCategory->image     = self::saveImage($request);
        self::$subCategory->status     = $request->status;
        self::$subCategory->save();
    }

    public static function updateSubCategory ($request)
    {
        self::$subCategory = SubCategory::find($request->category_id);

        if ($request->hasFile('image'))
        {
            if (file_exists(self::$subCategory->image))
            {
                unlink(self::$subCategory->image);
            }
            self::$imageUrl = self::saveImage($request);
        } else {
            self::$imageUrl = self::$subCategory->image;
        }

        self::$subCategory->category_id    = $request->category_id;
        self::$subCategory->name           = $request->name;
        self::$subCategory->description    = $request->description;
        self::$subCategory->image          = self::$imageUrl;
        self::$subCategory->status         = $request->status;
        self::$subCategory->save();
    }

    public function category ()
    {
        return $this->belongsTo('App\Models\Category');
//        return $this->belongsTo(Category::class);
    }
}
