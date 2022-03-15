<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'status'];

    protected static $brand;
    protected static $brandImage;
    protected static $imageDirectory;
    protected static $imageName;
    protected static $imageUrl;


    public static function saveImage($request)
    {
        self::$brandImage = $request->file('image');
        if(self::$brandImage)
        {
            self::$imageName = 'brand-image'.time().'.'.self::$brandImage->getClientOriginalExtension();
            self::$imageDirectory = 'brand-image/';
            self::$brandImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
            return self::$imageUrl;
        }
        else{
            return '';
        }
    }

    public static function newBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name     = $request->name;
        self::$brand->description     = $request->description;
        self::$brand->image     = self::saveImage($request);
        self::$brand->status     = $request->status;
        self::$brand->save();
    }

    public static function updateBrand($request)
    {
        self::$brand = Brand::find($request->brand_id);
        if ($request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::saveImage($request);
        } else{
            self::$imageUrl = self::$brand->image;
        }

        self::$brand->name     = $request->name;
        self::$brand->description     = $request->description;
        self::$brand->image     = self::$imageUrl;
        self::$brand->status     = $request->status;
        self::$brand->save();
    }
}
