<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class FrontendController extends Controller
{
    
    //index show
    public function index(){
        return view('frontend.pages.index');
    }

     //about show
     public function about(){
        return view('frontend.pages.about');
    }

     //checkout show
     public function checkout(){
        return view('frontend.pages.checkout');
    }

     //contact show
     public function contact(){
        return view('frontend.pages.contact');
    }

     //login show
     public function login(){
        return view('frontend.pages.login');
    }

     //Product-details show
     public function productDetails(Product $product){
         $relatedProducts = Product::orderBy('id','desc')->where('status',1)->where('cat_id', $product->cat_id)->where('id','!=',$product->id)->get();
        return view('frontend.pages.product-details',compact('product','relatedProducts'));
    }

     //profile show
     public function profile(){
        return view('frontend.pages.profile');
    }

    public function subcat(Category $category){
        return view('frontend.pages.subCategory', compact('category'));
    }

       //shop show
       public function shop(Category $subcat){
           $products = Product::orderBy('id','desc')->where('status',1)->where('cat_id', $subcat->id)->paginate(20);
           $rproducts = Product::orderBy('id','desc')->where('status',1)->where('cat_id', $subcat->id)->get();
            return view('frontend.pages.shop', compact('subcat','products','rproducts'));
    }

     //signup show
     public function signup(){
        return view('frontend.pages.signup');
    }

}
