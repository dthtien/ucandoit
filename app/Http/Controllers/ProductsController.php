<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use App\Products;
use App\ShoeBrand;
use App\mdHelper;

class ProductsController extends Controller
{
    // get palladium shoe list from lazada
    public function  getPalalzdProduct()
    {
   $client = new Client();
   $products=new Products;
   $request = $client->request('GET', 'http://www.lazada.vn/catalog/?q=palladium&sort=priceasc');
   // Partern kiểm tra trong subject có tồn tại chuỗi abc không
    $pattern = '/\<script type\=\"application\/ld\+json\"\>(.*)\<\/script\>/';
    $subject = $request->getBody()->getContents();
    if (preg_match($pattern, $subject,$maches)){
        $arrlzd_pallas=explode('{"@type":"Product"',$maches[1]);
        $arrlzd_pallas=mdHelper::getProductLzd($arrlzd_pallas);
        for ($i=2; $i<count($arrlzd_pallas) ; $i++) { 
          $arrlzd_pallas[$i]=mdHelper::setShoeBrand($arrlzd_pallas[$i],"Palladium");
          $products->createProducts($arrlzd_pallas[$i]);
        }
      }
        else echo "err";
    }
    //end update palladium

    //get adidas product
    public function getAdidlzdProduct()
    {
      $client = new Client();
      $products=new Products;
      $request = $client->request('GET', 'http://www.lazada.vn/giay-the-thao-cho-nam/adidas/?dir=asc&itemperpage=120&sort=priceasc');
      $request2 = $client->request('GET', 'http://www.lazada.vn/giay-the-thao-da-ngoai-nu/adidas/?dir=asc&itemperpage=120&sort=priceasc');
      // Partern kiểm tra trong subject có tồn tại chuỗi abc không
      $pattern = '/\<script type\=\"application\/ld\+json\"\>(.*)\<\/script\>/';
      $subject = $request->getBody()->getContents();
      $subject2 = $request2->getBody()->getContents();
      if (preg_match($pattern, $subject,$maches)){
         $arrlzd_adi=explode('{"@type":"Product"',$maches[1]);
         $arrlzd_adi=mdHelper::getProductLzd($arrlzd_adi);
         for ($i=1; $i<=count($arrlzd_adi)-9; $i++) { 
          $arrlzd_adi[$i]=mdHelper::setShoeBrand($arrlzd_adi[$i],"Adidas");
          $products->createProducts($arrlzd_adi[$i]);
        }
    }
    else
    {
      echo "err";
    }
        if (preg_match($pattern, $subject2,$maches2)){
         $arrlzd_adi2=explode('{"@type":"Product"',$maches2[1]);
         $arrlzd_adi2=mdHelper::getProductLzd($arrlzd_adi2);
         for ($i=1; $i<=count($arrlzd_adi2)-19; $i++) { 
          $arrlzd_adi2[$i]=mdHelper::setShoeBrand($arrlzd_adi2[$i],"Adidas");
          $products->createProducts($arrlzd_adi2[$i]);
        }
      }
      else
      {
        echo "err";
      }
  }
    // end get adidas product

    // get Nike shoe list from lazada
    public function  getNikelzdProduct()
    {
   $client = new Client();
      $products=new Products;
      //shoes for man
      $request = $client->request('GET', 'http://www.lazada.vn/giay-chay-bo-cho-nam/nike/?dir=asc&itemperpage=120&sort=priceasc');
      $request2 = $client->request('GET', 'http://www.lazada.vn/giay-chay-bo-cho-nam/nike/?dir=asc&itemperpage=120&page=2&sort=priceasc');
      // shoe for women
      $request3 = $client->request('GET', 'http://www.lazada.vn/giay-the-thao-da-ngoai-nu/nike/?dir=asc&itemperpage=120&sort=priceasc');
      // Partern kiểm tra trong subject có tồn tại chuỗi abc không
      $pattern = '/\<script type\=\"application\/ld\+json\"\>(.*)\<\/script\>/';
      $subject = $request->getBody()->getContents();
      $subject2 = $request2->getBody()->getContents();
      $subject3 = $request3->getBody()->getContents();
      if (preg_match($pattern, $subject,$maches)){
         $arrlzd_nike=explode('{"@type":"Product"',$maches[1]);
         $arrlzd_nike=mdHelper::getProductLzd($arrlzd_nike);
         for ($i=1; $i< count($arrlzd_nike); $i++) { 
          $arrlzd_nike[$i]=mdHelper::setShoeBrand($arrlzd_nike[$i],"Nike");
          $products->createProducts($arrlzd_nike[$i]);
        }
      }
      else
      {
        echo "err";
      }
        if (preg_match($pattern, $subject2,$maches2)){
         $arrlzd_nike2=explode('{"@type":"Product"',$maches2[1]);
         $arrlzd_nike2=mdHelper::getProductLzd($arrlzd_nike2);
         for ($i=1; $i<count($arrlzd_nike2)-92; $i++) { 
          $arrlzd_nike2[$i]=mdHelper::setShoeBrand($arrlzd_nike2[$i],"Nike");
          $products->createProducts($arrlzd_nike2[$i]);
        }
      }
      else
      {
        echo "err";
      }
      if (preg_match($pattern, $subject3,$maches3)){
         $arrlzd_nike3=explode('{"@type":"Product"',$maches3[1]);
         $arrlzd_nike3=mdHelper::getProductLzd($arrlzd_nike3);
         for ($i=1; $i< count($arrlzd_nike3)-48; $i++) { 
          $arrlzd_nike3[$i]=mdHelper::setShoeBrand($arrlzd_nike3[$i],"Nike");
          $products->createProducts($arrlzd_nike3[$i]);
        }
      }
      else
      {
        echo "err";
      }
    }
    //end get nike product
    public function viewProducts()
    {
      $products=new Products;
      $brand=new ShoeBrand;
      $data= $products->getProducts();
      $brands=$brand->getShoeBrand();
      return view('product',compact('data','brands'));
    }

}
