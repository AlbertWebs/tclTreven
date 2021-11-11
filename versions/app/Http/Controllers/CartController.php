<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart; //introduces the cart lib

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use Session;

use App\Product;

use App\products;

use App\Pricing;
class CartController extends Controller
{
    public function index(){
        //Perfom a check to ensure that the cart is not empty
        $page_title = 'Your Cart';
        $SiteSettings = DB::table('sitesettings')->get();
        $CartItems = Cart::content();
        
        return view('cart.index', compact('CartItems','page_title','SiteSettings'));
    }
    
    
    public function addCart($id){
        $product = Product::find($id); //This gets product by id
         Cart::add($id, $product->name, 1,$product->price);
         
         return Redirect::back();
    }

    

//     public function addCart($id){
//         $product = Pricing::find($id); //This gets product by id
//         Cart::add($id, $product->service, 1,$product->price);
//         $page_title = 'Your Cart';
//         $SiteSettings = DB::table('sitesettings')->get();
//         $CartItems = Cart::content();
        
//         return view('cart.index', compact('CartItems','page_title','SiteSettings'));
//    }

    public function addItem($id){
         $product = Product::find($id); //This gets product by id
         Cart::add($id, $product->name, 1,$product->price);
          $res =  Cart::content();
          $count = Cart::count();
          $Total = Cart::subtotal();
          return json_encode(array($count, $Total));
          return back();
    }
    public function destroy($id){
        
        Cart::remove($id);
        return back(); //redirects back to cart
     }
     
     public function update(Request $request, $id){
        // dd($request->qty);
         Cart::update($id,$request->qty);
         return back();
     }

     public function veryfy(Request $request, $id, $rowId){
         $cart = Cart::count();
            if($cart>1){
                Session::flash('message-fail', "Use coupons and gifts if you have only one item in your "); 
                return Redirect::back();
            }else{
                $coupons = $request->coupons;
                $gifts = $request->gifts;
                if($coupons == '' AND $gifts == ''){
                    Session::flash('message-fail', "Invalid inputs");
                    return Redirect::back();
                }
                //Check the Coupons
                if($coupons != '' AND $gifts == ''){
                    //coupons is set
                    $Coupons = DB::table('coupons')->where('type','coupons')->where('status','0')->where('code',$coupons)->get();
                    //Counting
                    $CounterCoupons = count($Coupons);
                    if($CounterCoupons > 0){
                        foreach($Coupons as $value){
                            $PriceOFF = $value->price;
                            $CouponID = $value->id;
                            //Get Cart Price
                            $cartItems = Cart::content();
                            foreach($cartItems as $cartPrice){
                                $cartPriceVar = $cartPrice->price;
                                $newPrice = $cartPriceVar - $PriceOFF;
                                
                                //Updating the Cart
                                    $item = Cart::get($rowId);
                                    

                                    Cart::update(
                                        $rowId, [
                                        
                                        'price' => $newPrice, 
                                        
                                    ]);
                                    
                            }

                        }
                        
                        Session::put('discount', $PriceOFF);
                        Session::flash('message-coupon-success', "Your Coupon Code has been verified");
                        return Redirect::back();

                    }else{
                        Session::flash('message-fail', "The Coupon Code Entered Is Not Valid");
                        return Redirect::back();
                    }
                    
                }
                if($gifts != '' AND $coupons == ''){
                    //gifts is set
                    $Gifts = DB::table('coupons')->where('type','gifts')->where('status','0')->where('code',$gifts)->get();
                    $CounterGifts = count($Gifts);
                    if($CounterGifts > 0){
                        foreach($Gifts as $value){
                            $PriceOFF = $value->price;
                            $CouponID = $value->id;
                            //Get Cart Price
                            $cartItems = Cart::content();
                            foreach($cartItems as $cartPrice){
                                $cartPriceVar = $cartPrice->price;
                                $newPrice = $cartPriceVar - $PriceOFF;
                                
                                //Updating the Cart
                                    $item = Cart::get($rowId);
                                    

                                    Cart::update(
                                        $rowId, [
                                        
                                        'price' => $newPrice, 
                                        
                                    ]);
                                    
                            }

                        }
                        $updateDetails = array('status'=>1);
                        DB::table('coupons')->where('id',$CouponID)->update($updateDetails);
                        Session::put('discount', $PriceOFF);
                        Session::flash('message-gift-success', "Your Gift Code has been verified");
                        return Redirect::back();
                    }else{
                    Session::flash('message-fail', "The Gift Code Entered Is Not Valid");
                    return Redirect::back();
                    }
                }
                if($gifts != '' AND $coupons != ''){
                    //  Both have been set
                    Session::flash('message-fail', "Please use either coupon or gift codes at a time");
                    return Redirect::back();
                }
                //Update Cart \

                //Redirect Back to the main page
                
            }
        }
}