<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\ReplyMessage;

use Illuminate\Support\Facades\Redirect;

use Storage;

use Mail;

use Hash;

use Session;

use App\Product;

use App\Subscriber;

use App\Services;

use App\Testimonial;

use App\Portfolio;

use App\Slider;

use App\Service_Rendered;

use App\Quotation;

use App\Daily;

use App\Blog;

use App\Admin;

use App\Term;

use App\Privacy;

use App\Message;

use App\Notifications;

use App\ServiceRequest;

use App\Quote;



use SEOMeta;
use OpenGraph;
use Twitter;

## or


class HomeController extends Controller
{
     /**
     * @return \Illuminate\View\View
     */

    public function index()
    { 
        SEOMeta::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi,Carpet Cleaning In Machakos, Office Cleaning in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Proton Engineering and Services (E.A) Ltd - Best Engineering Equipment in East Africa');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get(); 
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        
        
        

        $About = DB::table('about')->get();
        $Slider = Slider::all();
        $Blog = DB::table('blog')->paginate(3);
        $Portfolio = DB::table('portfolio')->orderByDesc('id')->paginate(9);
        $Services = DB::table('services')->inRandomOrder()->paginate(13);
        $Testimonial = DB::table('testimonial')->limit('20')->inRandomOrder()->get();
        $Clients = DB::table('clients')->inRandomOrder()->paginate(20);
        $SiteSettings = DB::table('sitesettings')->get();
       
        $sitename = config('app.name', 'Laravel');
        $page_title = 'Home';
        return view('front.index',compact('About','SiteSettings','page_title','Testimonial','Slider','Services','Portfolio','Clients'));
    }

   
   

    public function portfolio()
    {
        SEOMeta::setTitle('Treven Cleaners Limited​ - Our Portfolio ');
        SEOMeta::setTitle('Projects and Gallery | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/projects-and-gallery');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/projects-and-gallery');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Portfolio = DB::table('portfolio')->paginate(9);
        $page_title = 'Our Works';
        return view('front.portfolio',compact('Portfolio','page_title'));
    }

    public function contact()
    {
        SEOMeta::setTitle('Contact Us | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/contact-us');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/contact-us');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $page_title = 'Contact Us';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.contact',compact('page_title','SiteSettings'));
    }

    public function products()
    {
        SEOMeta::setTitle('Our Products | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/contact');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/contact');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $page_title = 'Our Products';
        $products = DB::table('product')->paginate(12);
        return view('front.products',compact('page_title','products'));
    }

    public function about()
    {
        SEOMeta::setTitle('About Us | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/about');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/about');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Clients = DB::table('clients')->inRandomOrder()->paginate(20);
        $Testimonial = Testimonial::all();
        $Admin = Admin::all();
        $About = DB::table('about')->get(); 
        $SiteSettings = DB::table('sitesettings')->get();
        $Services = Services::all();
        $page_title = 'About Us';
        return view('front.about',compact('page_title','Clients','Testimonial','About','Admin'));
    }

    public function terms()
    {
        SEOMeta::setTitle('Terms and Conditions | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/terms');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/terms');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Term = Term::all();
        $page_title = 'Terms Of Service';
        return view('front.terms',compact('page_title','Term'));
    }

    public function privacy()
    {
        SEOMeta::setTitle('Privacy Policy | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/privacy');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/privacy');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Privacy = Privacy::all();
        $page_title = 'Privacy Policy';
        return view('front.privacy',compact('page_title','Privacy'));
    }

    public function copyright()
    {
        SEOMeta::setTitle('Copyright Statement | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/copyright');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/copyright');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Copyright = DB::table('copyright')->get();
        $page_title = 'Copyright Statement';
        return view('front.copyright',compact('page_title','Copyright'));
    }

    public function services()
    {
        SEOMeta::setTitle('Services | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/services');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/services');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Services = Services::all();
        $page_title = 'Our Supplies';
        return view('front.services',compact('Services','page_title'));
    }

    public function service($name)
    {

        SEOMeta::setTitle(''.$name.' | Treven Cleaners Limited​');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/services');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited​');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/services');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $Services = DB::table('services')->where('title',$name)->get();
        
            $page_title = $name;
           
            return view('front.service',compact('Services','page_title','name'));
        
        
    }

    public function portfolio_single($name)
    {
        $PortfolioName = DB::table('portfolio')->where('title',$name)->get();
        foreach ($PortfolioName as $key => $portfolioname) {
            $PagerTitle = $portfolioname->title;
            SEOMeta::setTitle('Treven Cleaners Limited​ - '.$portfolioname->title.'');
            SEOMeta::setDescription('');
            SEOMeta::setCanonical('http://trevencleanersltd.co.ke/portfolio/'.$name.'');

            OpenGraph::setDescription('');
            OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
            OpenGraph::setUrl('http://trevencleanersltd.co.ke/portfolio/'.$portfolioname->title.'');
            OpenGraph::addProperty('type', 'articles');
            $SiteSettings = DB::table('sitesettings')->get();
        
            Twitter::setTitle('Treven Cleaners Limited​');
            Twitter::setSite('@protonafica');
            $Portfolio = Portfolio::find($portfolioname->id);
            $page_title = $portfolioname->title;
            return view('front.portfolio_single',compact('Portfolio','page_title','name'));
        }
        
        
    }

    public function subscribe(Request $request){
        $FindMail = DB::table('subscribers')->where('email',$request->email)->get();
        $Countmails = count($FindMail);
        if($Countmails == 0){
            $email = $request->email;
            $Subscriber = new Subscriber; 
            $Subscriber->email = $email;
            $Subscriber->save();
            return "You have successfully subscribed to our news letters";
        }else{
            return "You are already in our subscribers list thank you for staying with us";
        }
        
    
        
    }

    public function quote(Request $request){

            $email = $request->email;
            $name = $request->name;
            $phone = $request->phone;
            $message = $request->message;

            $Quotation = new Quotation; 
            $Quotation->email = $email;
            $Quotation->name = $name;
            $Quotation->phone = $phone;
            $Quotation->message = $message;
            $Quotation->save();
            
       

            $Notifications = new Notifications;
            $Notifications->type = 'Quotation';
            $Notifications->content = 'You have a new Quotation';
            $Notifications->save();
            ReplyMessage::mailQuotation($name,$email,$phone,$message);
    
            return "Your Quotation Request Has Been Received";
        
    }

    
    public function requestQuote(){
        SEOMeta::setTitle('Request Quote | Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        SEOMeta::setDescription('');
        SEOMeta::setCanonical('http://trevencleanersltd.co.ke/about');

        OpenGraph::setDescription('');
        OpenGraph::setTitle('Treven Cleaners Limited - Best Cleaning Company in Nairobi , Best Cleaning Company in Machakos, Best Cleaning Company in Kiambu');
        OpenGraph::setUrl('http://trevencleanersltd.co.ke/about');
        OpenGraph::addProperty('type', 'articles');
        $SiteSettings = DB::table('sitesettings')->get();
        
        Twitter::setTitle('Treven Cleaners Limited​');
        Twitter::setSite('@protonafica');
        $page_title = 'Request Quote';
        $SiteSettings = DB::table('sitesettings')->get();
        return view('front.request_quote',compact('page_title','SiteSettings'));
      
    }
    public function servicerequest($id){
        $page_title = 'Order Service';
        $Pricings = DB::table('pricing')->where('id',$id)->get();
        return view('front.servicerequest',compact('page_title','Pricings'));
    }
    
    public function service_request(Request $request){
        $name = $request->name;
        $email = $request->email;
        $id = $request->id;
        $service = $request->service;
        $price = $request->price;
        $content = $request->content;
        $budget = $request->budget;

        $ServiceRequest = new ServiceRequest;
        $ServiceRequest->name = $name;
        $ServiceRequest->email = $email;
        $ServiceRequest->serviceID = $id;
        $ServiceRequest->service = $service;
        $ServiceRequest->content = $content;
        $ServiceRequest->price  = $price;
        $ServiceRequest->budget = $budget;
        $ServiceRequest->save();
        ReplyMessage::mailrequest($name,$email,$service,$price,$content,$budget);
        return "Your Request Has Been Received,If we dont respond within an hour kindly contact us through our contact form,call us or use the live chat";
    }

    public function checkEmail(Request $request){
        $email = $request->input('email');
        $isExists = \App\User::where('email',$email)->first();
        //Create The Logics To return AJAX
        if(empty($isExists)) {
            return "";
        }else{
            return "The Email Is already in use by another User";
        }
    }

    public function quote_request(Request $request){
        $name = $request->name;
        $email = $request->email;
        $service = $request->service;
        $content = $request->content;
        $Quote = new Quote;
        $Quote->name = $name;
        $Quote->email = $email;
        $Quote->service = $service;
        $Quote->content = $request->content;
        $Quote->save();
        $price = 'Quote Request';
        $budget = 'Quote Request';
        ReplyMessage::mailrequest($name,$email,$service,$price,$content,$budget);
        return "Your Request Has Been Received";

    }

    public function searchsite(Request $request){
        
        $Services = DB::table('services')
        ->where('title','like', '%'.$request->search.'%')->get();
        $page_title = $request->search;
        return view('front.services',compact('page_title','Services','SubCategory'));
    }

    public function commingsoon(){
        $page_title = 'We will be Back Shortly';
        return view('front.commingsoon',compact('page_title'));
    }
    public function submitMessage(Request $request){
        $email = $request->email;
        $name = $request->name;
        $message = $request->message;
        $subject = $request->subject;
        
        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->content = $message;

        $Message->save();
        $Notifications = new Notifications;
        $Notifications->type = 'Message';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();

     
        $subject = 'New Message';
        ReplyMessage::mailNotificaton($name, $email, $subject, $message);

        Session::flash('message', "Your Message Has Been Sent");
        return Redirect::back();
    }
}
