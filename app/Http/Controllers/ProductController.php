<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function home() {
        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->skip(0)->take(28)->get();
        return view('client.home', ['products' => $products]);
    }

    public function index(){
        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->paginate(16);
        return view('client.productList', ['products' => $products]);
    }

    // public function show($id_product){
    //     $products = DB::table('productDetail')
    //     ->join('products','productDetail.id_product',"=",'products.id_product')
    //     ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
    //     ->join('productClass','products.id_class',"=",'productClass.id_class')->where('id_product','=',$id_product)->get();

    //     return view('client.productDetail', ['products' => $products]);
    // }

    public function show($product_name, $id_product, $id_product_detail){
        $productList = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->join('productClass','products.id_class',"=",'productClass.id_class')->skip(0)->take(28)->get();

        $products = DB::table('productDetail')
        ->join('products','productDetail.id_product',"=",'products.id_product')
        ->join('productClass','products.id_class',"=",'productClass.id_class')
        ->where('id_product_detail','=',$id_product_detail)->get(); // ph???c v??? hi???m th??? class s???n ph???m, gi?? g???c v?? gi?? s???n ph???m sau khi gi???m gi??

        $componentList = DB::table('productDetail')
        ->join('productColor','productDetail.id_color',"=",'productColor.id_color')
        ->select('url_image','color_name', 'product_size')
        ->where('id_product','=',$id_product)
        ->get(); //ph???c v??? cho hi???m th??? h??nh ???nh d???a theo m??u s???c, hi???m th??? list m??u v?? size c???a s???n ph???m

        return view('client.productDetail', ['products' => $products, 'componentList' => $componentList, 'productName' => $product_name, 'productList' => $productList]);
    }

    public function delete($id_product){
        
    }
}
