<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeLinesBrand extends Model
{
    protected $table = 'shoe_lines_brand';
    protected $fillable= ['name'];
    public $timestemp=false;
    public function shoe_lines_brand()
    {
    	return $this->belongsTo('app\ShoeBrand');
    }
}
