@extends('front.master')
@section('content')
    <?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Our Products <area shape="" coords="" href="" alt=""></h1>
            <p class="text-white text-center">
              <a href="{{url('/')}}">Home</a>
              <span class="mx-2">/</span>
              <span>Our Products</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    @if($products->isEmpty())
    <div class="site-section">
        <div class="container">
            <div class="row">
                <center>There are No Products added to this page</center>
            </div>
        </div>
    </div>
    @else
    <div class="site-section">
        <div class="container">
            <div class="row">
              @foreach($products as $product)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="{{url('/')}}">
                            <span class="project-item-category"><?php $Cat = DB::table('category')->where('id',$product->id)->get();  ?>@foreach($Cat as $cat) {{$cat->cat}} @endforeach</span>
                            <h2 class="project-item-title">
                                {{$product->name}}
                            </h2>
                            </a>
                        </div>
                        <img style="max-height:500px" src="{{url('/')}}/uploads/product/{{$product->image_one}}" alt="Image" class="img-fluid">
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
    @endif
@endsection