<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mdHelper extends Model
{

	// get product from lazada
   public static function getProductLzd($arrProduct)
   {
     $arraydel = array(',"availability":"http://schema.org/InStock",','"@type":"Product",',':"Offer"',':{""','{"@context":"http://schema.org","@type":"ItemList","itemListElement":[{','}]}','"@type"',':{','"priceCurrency":"VND"},','availability');
     $ardel = array('":"','"','}','{','price','url','image','name','offers');
     $rpl="";
     for ($i=1; $i <count($arrProduct); $i++) { 
        $arrProduct[$i]=str_replace($arraydel,$rpl, $arrProduct[$i]);
        $arrProduct[$i]=explode(',', $arrProduct[$i]);
        for ($j=0; $j <count($arrProduct[$i]); $j++) { 
            $arrProduct[$i][$j]=str_replace($ardel,$rpl, $arrProduct[$i][$j]);
            if($j==4)
            {
            	$arrProduct[$i][$j+1]="";
              $arrProduct[$i][$j+2]='Lazada';
            }
        }
       }
       return $arrProduct;
   }


   //set shoe brand name
   public static function setShoeBrand($arrProduct,$brandName)
   {
   	for ($j=0; $j <count($arrProduct); $j++) { 
             if($j==4)
            {
              $arrProduct[$j+1]=$brandName;
            }
          }
          return $arrProduct;
   }
}
