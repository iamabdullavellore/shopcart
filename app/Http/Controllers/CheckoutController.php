<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubCategories;
use App\Categories;
use App\Products;
use App\Cart;

class CheckoutController extends Controller
{
    public function index($id)
    {
    	$Total=0;
    	$Cart = DB::table('cart')
                ->leftJoin('products', 'products.id', '=', 'cart.product_id')            
                ->where('cart.user_id',$id)                
                ->get();
    	// $Total = DB::table('cart')
     //            ->leftJoin('products', 'products.id', '=', 'cart.product_id')            
     //            ->where('cart.user_id',$id)   
     //            ->sum('products.price');

        foreach ($Cart as $products) {
        	$Total +=$products->price*$products->quantity;
        }

        return view('checkout',['Cart'=>$Cart,'Total'=>$Total]);
    }
    // public function delete($id)
    // {
    //     $count = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->count();
    //     //echo $count;die();
    //     if($count>0){
    //         DB::table('cart')->where('user_id',Auth::user()->id)->where('product_id',$id)->delete();
    //     }

    //     return redirect('checkout/'.Auth::user()->id);
    // }
}
