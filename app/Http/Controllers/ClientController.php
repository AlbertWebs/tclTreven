<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use App\User;

use Session;

use App\orders;

use App\TraceServices;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $id = Auth::user()->id;
        $TraceServices = DB::table('traceservices')->where('status','0')->where('user_id',$id)->get();
        $page_title = 'ClientArea';
        return view('clientarea.index',compact('page_title','TraceServices'));
    }

    public function profile(){
        $id = Auth::user()->id;
        $User = User::find($id);
        $page_title = 'My Profile';
        return view('clientarea.profile',compact('page_title','User'));
    }

    public function orders(){
        $id = Auth::user()->id;
        $Orders = DB::table('orders')->where('user_id',$id)->get(); 
        $page_title = 'ClientArea';
        return view('clientarea.orders',compact('page_title','Orders'));
    }

    public function save(Request $request){
        $id = Auth::user()->id;
        if($request->email == Auth::user()->email ){
            $updateDetails = array(
                'name'=>$request->name,
                
                'mobile'=>$request->mobile,
            
            );
            DB::table('users')->where('id',$id)->update($updateDetails);
            Session::flash('message', "Changes have been saved");
            return Redirect::back();
        }else{
            $updateDetails = array(
                'name'=>$request->name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
            
            );
            DB::table('users')->where('id',$id)->update($updateDetails);
            Session::flash('message', "Changes have been saved");
            Auth::guard('web')->logout();
            return Redirect::back();
        }
    }
}
