@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
				<br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span>{{$name}}</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Our Work</span>/<span>{{$name}}</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
        @endforeach
   

<div id="project-detail-section" class="padding pb-60 pt-xs-60 pb-xs-30">
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">
						<div class="heading-box pb-30 ">
							<h2><span>{{$name}}</span> </h2>
							<span class="b-line l-left"></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="project-details">
							<figure>
								<img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_one}}" alt="">
							</figure>
							<div class="project-info col-sm-12 col-lg-4 ">
								<h3>Project Description</h3>
								<ul>
                                    <li>
										<strong>Title:</strong> {{$Portfolio->title}}
									</li>
									<li>
										<strong>Client:</strong> {{$Portfolio->client}}
									</li>
									<li>
										<strong>Location:</strong> {{$Portfolio->location}}
									</li>
									
									<li>
                                        <strong>Service Renderes:</strong> <?php $SerPortfolio = DB::table('services')->where('id',$Portfolio->cat)->get(); ?>
                                        @foreach($SerPortfolio as $SerPor)
                                          {{$SerPor->title}}
                                        @endforeach
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-7 mt-30">
						<div class="box-title mb-20">
							<h3>Aenean suscipit eget mi act</h3>
						</div>
						<div class="text-content">
							<p>
                            {!!html_entity_decode($Portfolio->content)!!}	</p>
						</div>
					</div>

					
					<div class="col-sm-12 col-lg-12 mt-40 mt-xs-15">
						<ul class="project-gallery text-right">
							<li>
								<a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_two}}" class="fancylight" data-fancybox-group="light"><img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_two}}" alt=""></a>
							</li>
							<li>
								<a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_three}}" class="fancylight" data-fancybox-group="light"><img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_three}}" alt=""></a>
							</li>
							<li>
								<a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_four}}" class="fancylight" data-fancybox-group="light"><img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_four}}" alt=""></a>
							</li>
							<li>
								<a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_five}}" class="fancylight" data-fancybox-group="light"><img src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_five}}" alt=""></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		

   
@endsection