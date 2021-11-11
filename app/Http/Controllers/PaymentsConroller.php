<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;

use Gloudemans\Shoppingcart\Facades\Cart;

use Storage;

use Mail;

use Hash;

use Session;

use datetime;

use App\Notifications;

use App\MPESA;

class PaymentsConroller extends Controller
{
    public function pay($invoice){
        
    }

    public function mpesa($invoice){
        //Add Transaction infomaton
        $MPESA = new MPESA;
        $MPESA->TransactionType = $TransactionType;
        $MPESA->TransID = $TransID;
        $MPESA->TransTime = $TransTime;
        $MPESA->TransAmount = $TransAmount;
        $MPESA->BusinessShortCode = $BusinessShortCode;
        $MPESA->BillRefNumber = $BillRefNumber;
        $MPESA->InvoiceNumber = $InvoiceNumber;
        $MPESA->MSISDN = $MSISDN;
        $MPESA->FirstName = $FirstName;
        $MPESA->MiddleName = $MiddleName;
        $MPESA->LastName = $LastName;
        $MPESA->OrgAccountBalance = $OrgAccountBalance;
        $MPESA->ThirdPartyTransID = $ThirdPartyTransID;
        $MPESA->save();

        //Submit A notification
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();

        //Return Action To Confirm Success Message If AJAX
    }
    public function confirm(){
        //return view('mpesa.confirm');
        $input = \Input::get();
        $transaction_array = array(
            
            'trans_type' => $input['TransactionType'],
            'trans_id' => $input['TransID'],
            'trans_time' => $input['TransTime'],
            'trans_amount' => $input['TransAmount'],
            'short_code' => $input['BusinessShortCode'],
            'org_account_balance' => $input['OrgAccountBalance'],
            'phone' => $input['MSISDN'],
            'bill_ref_number' => $input['BillRefNumber'],
            'invoice_number' => $input['InvoiceNumber'],
            'first_name' => $input['FirstName'],
            'middle_name' => $input['MiddleName'],
            'last_name' => $input['LastName'],
            'name' => $name,
        );
    }

    public function validation(){
        return view('mpesa.validate');
    }

    public function register(){
        return view('mpesa.register');
    }

    public function lipa_na_mpesa(){
        $page_title = 'Lipa Na MPESA';
        $CartItems = Cart::content();
        return view('front.lipa',compact('page_title','CartItems'));
    }

    public function stk(Request $request)
    {
       //Passs Json Request
    }
    public function till(Request $request)
    {
        //Check Payment
        $TransAmount = Cart::total();
      
        $CheckPayment = DB::table('mpesa_payments')->where('TransID',$request->TransID)->where('TransAmount',$TransAmount)->get();
        $CountResults = count($CheckPayment);
        if($CheckPayment->isEmpty())
        {
            return 'The Transaction Code You Entered May Not Be Valid, Please Contact Us';
        }else{
            return 'Your Payment Has Been Received';
        }

        //Return true or false
    }
}
