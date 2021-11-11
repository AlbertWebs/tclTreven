<?php

namespace App;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

use Mail;

class ReplyMessage extends Model
{
    public static function SendMessage($subject,$name,$email){
      $body = 'You have a new message, Log In To the admins panel to view more';
      //The Generic mailler Goes here
      $data = array(
        'name'=>$name,
        'subject'=>$subject,
        'messageAppend'=>$body
    );
    $appName = config('app.name');
    $appEmail = config('mail.username');
 
 
    $FromVariable = $appEmail;
    $FromVariableName = $appName;

    $toVariable = $appEmail;
    $toVariableName = $name;


    Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
        $message->from($FromVariable , $FromVariableName);
        $message->to($toVariable, $toVariableName)->cc('info@trevencleanersltd.co.ke')->cc('mwenimassimo92@gmail.com')->subject($subject);
    
    });
}
    public static function mailNotificaton($name, $email, $subject, $message){ 
        //The Generic mailler Goes here
        $messageee = 'Hi Admin, You have Received a Message From '.$email.'';
        $data = array(
        
            'content'=>$messageee,
            'messages'=>$message,
        
        
        );
        $subject = "You Have a New Message";
        $appName = config('app.name');
        $appEmail = config('mail.username');


        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Treven Cleaners Limited';


        Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email,$name){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@trevencleanersltd.co.ke')->cc('mwenimassimo92@gmail.com')->replyTo($email, $name)->subject($subject);
        });
    }
 
  

    public static function mailSubscriber(){

    }

    public static function mailSubscribers(){
        
    }

    public static function mailQuotation($name,$email,$phone,$message){
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'content'=>$message,
            'phone'=>$phone,
        );
        $subject = "Quote Request";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;
        $toVariableName = 'Treven Cleaners Limited';


        Mail::send('mailQuote', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$name,$email){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@trevencleanersltd.co.ke')->cc('mwenimassimo92@gmail.com')->replyTo($email, $name)->subject($subject);
        });
    }

    // public static function mailQuotation($name,$email,$phone,$message){
    //     //The Generic mailler Goes here
    //     $data = array(
    //         'name'=>$name,
    //         'email'=>$email,
    //         'content'=>$message,
    //         'phone'=>$phone,
            
    //     );
    //     $subject = "Quote Request";
    //     $appName = config('app.name');
    //     $appEmail = config('mail.username');
    
    
    //     $FromVariable = $appEmail;
    //     $FromVariableName = $appName;

    //     $toVariable = 'info@trevencleanersltd.co.ke';
    //     $toVariableName = 'Treven Cleaners Limited';


    //     Mail::send('mailQuotee', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
    //         $message->from($FromVariable , $FromVariableName);
    //         $message->to($toVariable, $toVariableName)->cc('info@trevencleanersltd.co.ke')->cc('mwenimassimo92@gmail.com')->subject($subject);
    //     });
    // }



}
