<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand,$image,$imageName,$driectory,$imageUrl;
    public static function ImageUpload($request)
    {
        self::$image=$request->file('brand_image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$driectory="img/upload/";
        self::$image->move(self::$driectory,self::$imageName);
        return self::$driectory.self::$imageName;
    }
    public static function newBrand($request)
    {
        self::$imageUrl=self::ImageUpload($request);
        self::$brand=new Brand();
        self::$brand->barnd_name=$request->barnd_name;
        self::$brand->brand_image=self::$imageUrl;
        self::$brand->brand_description=$request->brand_description;
        self::$brand->save();
    }
    public static function UpdateBrand($request,$id)
    {
        self::$brand=Brand::find($id);
        if($request->file('brand_image'))
        {
            if(file_exists(self::$brand->brand_image))
            {
                unlink(self::$brand->brand_image);
            }
            self::$imageUrl=self::ImageUpload($request);
        }
        else
        {
           self::$imageUrl=self::$brand->brand_image;
        }
        self::$brand->barnd_name=$request->barnd_name;
        self::$brand->brand_image=self::$imageUrl;
        self::$brand->brand_description=$request->brand_description;
        self::$brand->status=$request->status;
        self::$brand->save();

    }
    public static function deleteBrand($id)
    {
        self::$brand=Brand::find($id);
        self::$brand->delete();
    }
}
