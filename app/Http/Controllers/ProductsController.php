<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use App\Products;

class ProductsController extends Controller
{
    // update database 
    public function  test()
    {
   $client = new Client();
   $products=new Products;
   $request = $client->request('GET', 'http://www.lazada.vn/catalog/?q=palladium&sort=priceasc');
   // Partern kiểm tra trong subject có tồn tại chuỗi abc không
    $pattern = '/\<script type\=\"application\/ld\+json\"\>(.*)\<\/script\>/';
    $subject = $request->getBody()->getContents();
    $arraydel = array('"@type":"Product",',':"Offer"',',"availability":"http://schema.org/InStock",',':{""','{"@context":"http://schema.org","@type":"ItemList","itemListElement":[{','}]}','"@type"',':{','"priceCurrency":"VND"},');
    $rpl="";
    if (preg_match($pattern, $subject,$maches)){
       $arrlzd_pallas=explode('{"@type":"Product"',$maches[1]);

       for ($i=2; $i <count($arrlzd_pallas); $i++) { 
        $arrlzd_pallas[$i]=str_replace($arraydel,$rpl, $arrlzd_pallas[$i]);
        $arrlzd_pallas[$i]=explode(',', $arrlzd_pallas[$i]);
        for ($j=0; $j <count($arrlzd_pallas[$i]); $j++) { 
            $ardel = array('":"','"','}','{','price','url','image','name','offers');
            $arrlzd_pallas[$i][$j]=str_replace($ardel,$rpl, $arrlzd_pallas[$i][$j]);
            if($j==4)
            {
              $arrlzd_pallas[$i][$j+1]='Palladium';
              $arrlzd_pallas[$i][$j+2]='Lazada';
            }
        }
         $products->createProducts($arrlzd_pallas[$i]);
       }
       echo "<pre>";
       print_r($arrlzd_pallas);
       // print_r($maches[1]);
        }
        else echo "err";
    }
    //end update palladium

    public function viewProducts()
    {
      $products=new Products;
      $data= $products->getProducts();
      return view('product',compact('data'));
    }

}
