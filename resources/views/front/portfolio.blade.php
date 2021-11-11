@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
				<br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span>Our Work</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Our Work</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    @endforeach
    <!-- Work Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Our Work Gallery</h2>
							<p class="mb-0">
								We enjoy what we do, We felt like its best if we leave these here for our visitors
							</p>
						</div>
					</div>
				</div>
				<!-- work Filter -->
				<div class="row">
					<div class="col-sm-12">
						<ul class="container-filter categories-filter">
							<li>
								<a class="categories active" data-filter="*">All</a>
              </li>
              <?php $Services = DB::table('services')->get(); ?>
              @foreach($Services as $Ser)
							<li>
								<a class="categories" data-filter=".cat_{{$Ser->id}}">{{$Ser->title}}</a>
              </li>
              @endforeach
							
						</ul>
					</div>
				</div>
				<!-- End work Filter -->
				<div class="row container-grid nf-col-3">


        <?php $Portfolio = DB::table('portfolio')->get(); ?>
        @foreach($Portfolio as $porfolio)
        <?php $SerPortfolio = DB::table('services')->where('id',$porfolio->cat)->get(); ?>
        @foreach($SerPortfolio as $SerPor)
					<div class="nf-item cat_{{$SerPor->id}} coffee spacing">
          @endforeach
						<div class="item-box">
							<a> <img alt="1" src="{{url('/')}}/uploads/portfolio/{{$porfolio->image_one}}" class="item-container"> </a>
							<div class="link-zoom">
								<a href="{{url('/')}}/our-work/{{$porfolio->title}}" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
								<a href="{{url('/')}}/uploads/portfolio/{{$porfolio->image_one}}" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
								<div class="gallery-heading">
									<h4><a href="{{url('/')}}/our-work/{{$porfolio->title}}">{{$porfolio->title}}</a></h4>

								</div>
							</div>

						</div>
          </div>
        @endforeach

					

				</div>

			</div>
		</section>
		<!-- End Work Section -->
@endsection