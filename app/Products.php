<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable= ['name','price','prd_link','img_link','prd_link','shop_name','shoe_brand_name'];
    public $timestemp=false;

    public static function createProducts($product)
    {
    	Products::create(['name'=>$product[2],'price'=>$product[3],'prd_link'=>$product[4],'img_link'=>$product[1],'shop_name'=>$product[6],'shoe_brand_name'=>$product[5]]);
    }

    public static function getProducts()
    {
    	return Products::orderBy('price','asc')->get();
    }
}
