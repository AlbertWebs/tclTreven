<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\orders;

use App\User;

use Session;

use Hash;

use App\ReplyMessage;

use App\Http\Requests;

class CheckoutController extends Controller
{

  
    public function index(){
        $page_title = 'Checkout';
        $CartItems = Cart::content();
        $SiteSettings = DB::table('sitesettings')->get();
        
        if(Auth::check()){
            $email = Auth::user()->email;
            $User = DB::table('users')->where('email',$email)->get();
            return view('front.checkout', compact('CartItems','page_title','SiteSettings'));
        }
        else{
            
            return view('front.checkout', compact('CartItems','page_title','SiteSettings'));
        }
         
        //Perfom a check to ensure that the cart is not empty
    }

    public function placeOrder(){
        $Name = Auth::user()->name;
        Orders::createOrder();
        //destroy cart
        
        $page_title = 'Thank you!';
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $service = 'Order';
        $pricee = Cart::content();
        foreach ($pricee as $key => $value) {
            $price = $value->price;
        
        $budget = 'Order';
        $content = 'Order';
        ReplyMessage::mailrequest($name,$email,$service,$price,$content,$budget);
        }
        Cart::destroy();
        $page_message = 'Dear '.$Name.',Thank you For Using Our Web Commerce, We will get back to you shortly';
        return view('front.thankyou',compact('page_title','page_message'));

    }

    public function checkout_payment(Request $request){
        $page_title = 'Checkout';
        $description = 
        //Insert to orders table
        $orders = new orders;
        $orders->user_id = Auth::user()->id;
        $orders->total = Cart::total();
        $orders->description = $description;
        $orders->save();
        $cartItems = Cart::content();
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.checkout_payment', compact('cartItems','SiteSettings','page_title'));
    }

    public function formvalidate(Request $request)
   {
        $page_title = 'Checkout';
        $password_confirm = $request->password_confirm;
        $password_inSecured = $request->password;
        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        //Checking if Session is active
        if(Auth::check()){
            //redirect back to complete checkout
            $CartItems = Cart::content();
            return Redirect::back();
           
        }else{
             //check pasword matching
             if($password_inSecured == $password_confirm){
                //register new user
                $User = new User;
                $User->name = $name;
                $User->email = $email;
                $User->mobile = $mobile;
                $User->password = Hash::make($password_inSecured);
                $User->save();
                //Login the user
                
                $user = User::where('email','=',$email)->first();
                Auth::loginUsingId($user->id, TRUE);

                

                return Redirect::back();
             }else{
                Session::flash('message', "Passwords Did Not Match");
                return Redirect::back();
             }
          
        }

     } 
}