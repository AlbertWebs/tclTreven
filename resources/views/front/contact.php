@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name', 'page')->where('section', 'page')->get();?> 
    @foreach($Banner as $banner)
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Get In Touch</h1>
            <p class="text-white text-center">
              <a href="{{url('/')}}">Home</a>
              <span class="mx-2">/</span>
              <span>Contact Us</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    <!-- Message Here -->
    <center>
        @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

        @if(Session::has('messageError'))
                        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
        @endif
    </center>
    <!-- Message Here -->
    <div class="site-section">
        <div class="container">
        <form action="{{url('/submitMessage')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Name</label>
                    <input type="text" id="fname" name="name" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="text" name="email" id="eaddress" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 form-group">
                    <label for="eaddress">Subject</label>
                    <input type="text" name="subject" id="eaddress" class="form-control form-control-lg" required>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 px-3 px-5">
                </div>
            </div>
        </form>
        </div>
    </div>
   @foreach($SiteSettings as $Setting) 
   <!-- More Info -->
   <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3><i class="" aria-hidden="true"></i>Address & Location</h3>
            <p><i class="fa fa-check" aria-hidden="true"></i>  {{$Setting->sitename}} </p>
            <p><i class="fa fa-address-card" aria-hidden="true"></i>  Address: {{$Setting->address}} </p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>  Location: {{$Setting->location}} </p>
            <!-- Social Media -->
            <center>
            <a href="{{$Setting->facebook}}" class="fa fa-facebook"></a>
            <a href="{{$Setting->twitter}}" class="fa fa-twitter"></a>
            <a href="{{$Setting->instagram}}" class="fa fa-instagram"></a>
           
            </center>
            <!-- Social Media -->

        </div>

        <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Contacts</h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i>  Phone: {{$Setting->mobile}} </p>
            <p><i class="fa fa-phone" aria-hidden="true"></i>  Phone: {{$Setting->mobile_one}} </p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i>  Email: {{$Setting->email}} </p>
            <p><i class="fa fa-globe" aria-hidden="true"></i>  Website:  <a href="{{$Setting->url}}">{{$Setting->url}}</a> </p>
        </div>
        </div>
    </div>
    </div>
    @endforeach
   <!-- More Info -->

      
@endsection