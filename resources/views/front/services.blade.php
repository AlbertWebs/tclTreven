@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
					<div class="title_row">
					<br><br>
						<h1 data-title="Contact"><span>Our Services</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Our Services</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    @endforeach
    @if($Services->isEmpty())

    @else
<!-- Service Section -->
    <section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30 text-center">
					<div class="col-md-12">
						<div class="section-title_home">
							<h2>Our <span>Service</span></h2>
						</div>
					</div>
				</div>

				<div class="row">
        @foreach($Services as $Ser)
					<div class="col-md-6 col-lg-4 mb-30">
						<div class="service_box">
							<figure>
								<img src="{{url('/')}}/uploads/services/{{$Ser->image_one}}" alt="" />
							</figure>
							<h3><a href="{{url('/')}}/our-services/{{$Ser->title}}">{{$Ser->title}}</a></h3>
							<p>
								{{$Ser->pre}}
							</p>
						</div>
					</div>
        @endforeach
				</div>

			</div>
		</section>
		<!-- Service Section end -->
    @endif

@endsection