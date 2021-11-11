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
							<a>Home</a>/ <span>Our Services</span> /<span>{{$name}}</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    @endforeach
    <!-- breadcumb-area end -->
    <!-- Service Section -->
		<div id="services-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sx-12">
						<div class="single-sidebar-widget">
							<div class="special-links">
								<ul>
                  <?php $ServisesList = DB::table('services')->get(); ?>
                  @foreach($ServisesList as $SerList)
									<li>
										<a class="active" href="{{url('/')}}/our-services/{{$SerList->title}}">{{$SerList->title}}</a>
                  </li>
                  @endforeach
									
								</ul>
							</div>
						</div>
						<div class="single-sidebar-widget">
							<div class="sec-title">
								<h2>Downloads</h2>
								<span>Here is some useful document(s)</span>
							</div>
							<ul class="brochure-btns">
                <?php $Files = DB::table('files')->get(); ?>
                @foreach($Files as $File)
								<li>
									<a download href="{{url('/')}}/uploads/files/{{$File->file}}" class="clearfix"><i class="fa fa-file-pdf-o"></i> <span>{{$File->name}}</span> </a>
                </li>
                @endforeach
								
							</ul>
						</div>
					</div>
					<div class="col-lg-8 mt-xs-30 mt-sm-30">
          @foreach($Services as $Service)
						<div class="full-pic">
							<figure>
								<img src="{{url('/')}}/uploads/services/{{$Service->image_one}}" alt="">
							</figure>
            </div>
           
						<div class="text-box mt-40">
							<div class="box-title mb-20">
								<h2>{{$name}}</h2>
							</div>
							<div class="text-content">
								<p>
								{!!html_entity_decode($Service->content)!!}
								</p>
							</div>
						
            </div>
            @endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- Service Section end -->

@endsection