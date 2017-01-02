<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable= ['name','price','prd_link','img_link'];
    public $timestemp=false;
}
