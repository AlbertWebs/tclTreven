@extends('front.master')
@section('content')
    <?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Who we are <area shape="" coords="" href="" alt=""></h1>
            <p class="text-white text-center">
              <a href="{{url('/')}}">Home</a>
              <span class="mx-2">/</span>
              <span>About Us</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
<!-- About -->
    <div class="site-section services-1-wrap">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-8">
              <?php $About = DB::table('about')->get(); ?>
              @foreach($About as $about)
              
                <h2 class="section-title mb-4 text-black"> <strong>Who We Are</strong>  </h2>
                <p>{!!html_entity_decode($about->content)!!}</p>

              @endforeach
          </div>
        </div>
        <!-- Value -->
        <div class="row no-gutters">

          <?php $Values = DB::table('values')->limit('10')->inRandomOrder()->get(); $count = 1; ?>
          @foreach($Values as $Value)
          <div class="col-lg-4 col-md-6">
            <div class="service-1">
              <span class="number">0{{$count}}</span>
              <div class="service-1-icon">
                <span class="flaticon-idea"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">{{$Value->title}}</h3>
                <p>{!!html_entity_decode($Value->content)!!}</p>
              </div>
            </div>
          </div>
          <?php $count++; ?>
          @endforeach
         
        </div>
        <!-- Value -->
      </div>
    </div>
    <!-- END services -->
    
<!-- </About> -->
@endsection