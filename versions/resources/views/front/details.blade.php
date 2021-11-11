@extends('front.master')
@section('content')
   
 <!-- breadcumb-area start -->
 <?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <div class="breadcumb-area black-opacity" style="background: url({{url('/')}}/uploads/banners/{{$banner->image}}) no-repeat center center / cover" >
      
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap">
                        <h2>Project Details</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>/</li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li>/</li>
                            <li>{{$page_title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- breadcumb-area end -->
    <!-- blog-area start -->
    <div class="blog-area blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-wrap">
                       
                        <!-- Slider -->
                        <div class="slider-area">
                                <div class="slider-active next-prev-style">
                                <!-- Single -->
                                    <div class="slider-items">
                                        <img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_one}}" alt="" class="slider">
                                    </div>

                                    <div class="slider-items">
                                        <img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_two}}" alt="" class="slider">
                                    </div>

                                    <div class="slider-items">
                                        <img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_three}}" alt="" class="slider">
                                    </div>

                                     <div class="slider-items">
                                        <img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_four}}" alt="" class="slider">
                                    </div>

                                     <div class="slider-items">
                                        <img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_five}}" alt="" class="slider">
                                    </div>
                                <!-- </Single -->
                                    
                                
                                </div>
                        </div>
                        <!-- </Slider -->
                        
                    </div>
                    <div class="blog-details-wrap">
                        <p>{!!html_entity_decode($Portfolio->content)!!}</p>
                     </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <aside class="sidebar-wrap">
                        <div class="search-wrap widget">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget sidebar-menu">
                            <h3 class="widget-title">Other Projects</h3>
                            <ul>
                                <?php $Portfolio =  DB::table('portfolio')->paginate(20); ?>
                                @foreach($Portfolio as $value)
                                <li><a href="{{url('/')}}/portfolio/{{$value->id}}">{{$value->title}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                       
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->
    <!-- quote-area start -->
    <div class="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="quote-wrap text-center">
                        <h2>Would you like us to handle your project?</h2>
                        <a href="{{url('/contact')}}">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quote-area end -->     

@endsection