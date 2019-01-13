<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubCategories;
use App\Categories;
use App\Products;
use App\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add($id)
    {
        //$user=Auth::user()->id;
        $count = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->count();
        //echo $count;die();
        if($count>0){
            $Cart = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
            $previous_quantity=$Cart->quantity;
            //print_r($Cart->product_id); die();
            Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->update(['quantity' =>$previous_quantity+1]);
        }else{
            //$previous_quantity=0;
            $Cart = new Cart;
            $Cart->product_id = $id;
            $Cart->user_id = Auth::user()->id;
            $Cart->quantity = 1;
            $Cart->save();
        }
        
        return redirect('cart/'.Auth::user()->id);
    }
    public function delete($id)
    {
        $count = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->count();
        //echo $count;die();
        if($count>0){
            DB::table('cart')->where('user_id',Auth::user()->id)->where('product_id',$id)->delete();
        }

        return redirect('cart/'.Auth::user()->id);
    }

    public function minus($id)
    {
        //$user=Auth::user()->id;
        $Cart = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
        //echo $Cart;die();
        if($Cart->quantity>1){
            $Cart = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
            $previous_quantity=$Cart->quantity;
            //print_r($Cart->product_id); die();
            Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->update(['quantity' =>$previous_quantity-1]);
        }else if($Cart->quantity<=1) {
            DB::table('cart')->where('user_id',Auth::user()->id)->where('product_id',$id)->delete();
        }
        
        return redirect('cart/'.Auth::user()->id);
    }

    public function plus($id)
    {        
        $Cart = Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
        $previous_quantity=$Cart->quantity;
        //print_r($Cart->product_id); die();
        Cart::where('user_id',Auth::user()->id)->where('product_id',$id)->update(['quantity' =>$previous_quantity+1]);        
        
        return redirect('cart/'.Auth::user()->id);
    }

    public function index($id)
    {            
        
        $Cart = DB::table('cart')
                ->leftJoin('products', 'products.id', '=', 'cart.product_id')            
                ->where('cart.user_id',$id)                
                ->get();
        return view('cart',['Cart'=>$Cart]);
    }
}
