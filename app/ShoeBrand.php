<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeBrand extends Model
{
    protected $table = 'shoe_brand';
    protected $fillable= ['name'];
    public $timestemp=false;
    public function shoe_lines_brand()
    {
    	return $this->hasMany(ShoeLinesBrand::class);
    }
     public static function getShoeBrand()
    {
    	return ShoeBrand::select('name_shoe_brand')->orderBy('id','asc')->get();
    }
}
