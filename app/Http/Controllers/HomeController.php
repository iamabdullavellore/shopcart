<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubCategories;
use App\Categories;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories = Categories::all(); 
        $SubCategories = SubCategories::all(); 
        $Categories_SubCategories = DB::table('category')
                ->leftJoin('sub_category', 'sub_category.category', '=', 'category.id')
                ->orderBy('sub_category.id', 'asc')
                ->get();
        $Categories_SubCategories_Products = DB::table('category')
                ->leftJoin('sub_category', 'sub_category.category', '=', 'category.id')
                ->leftJoin('products', 'products.sub_category', '=', 'sub_category.id')
                ->orderBy('products.id', 'asc')
                ->get();
        return view('home',['Categories' =>$Categories,'SubCategories'=>$SubCategories,'Categories_SubCategories'=>$Categories_SubCategories,'Categories_SubCategories_Products'=>$Categories_SubCategories_Products]);
    }
}
