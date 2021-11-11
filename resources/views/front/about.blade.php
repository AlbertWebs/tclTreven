@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
				<br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span>About Us</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>About Us</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    @endforeach
	<!-- About Section -->
    <section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2">
						<div class="sec_hedding text-center">
							<h2>About us</h2>
              <span class="b-border"></span>
              <?php $About = DB::table('about')->get(); ?>
              @foreach($About as $about)
							<p>
							{!!html_entity_decode($about->content)!!}
              </p>
              @endforeach
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="solution_box about_new">
							<i class="fa fa-check-square-o color_orenge" aria-hidden="true"></i>
							<h4>Mission</h4>
							<p>
							{!!html_entity_decode($about->mission)!!}
							</p>

						</div>
					</div>

					<div class="col-lg-6 mt-sm-30 mt-xs-30">
						<div class="solution_box about_new">
							<i class="fa fa-binoculars color_orenge" aria-hidden="true"></i>
							<h4>Our Vision</h4>
							<p>
							{!!html_entity_decode($about->vision)!!}
							</p>

						</div>
					</div>

					

				</div>

			</div>
		</section>
		<!-- About Section End-->

	
		<!-- Story Section -->
		<div id="story-section" class="ptb ptb-xs-60 gray-bg">
			<div class="container">
				<div class="row ">
					<div class="col-md-12 col-lg-12">
						<div class="block-title v-line mb-35">
							<h2><span>Our</span> Values</h2>
							<p class="italic">
								Our Assuarance to you
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="ui-timline-container">
							<div class="ui-timeline">
								<div class="tl-item">
									<div class="tl-body">
										<div class="tl-entry">
											<div class="tl-caption">
												<a href="javascript:;" class="btn btn-primary btn-block">Values</a>
											</div>
										</div>
									</div>
                </div>
                <?php $Values = DB::Table('values')->get() ?>
                @foreach($Values as $val)
                @if($val->id % 2 == 0)
								<div class="tl-item">
									<div class="tl-body">
										<div class="tl-entry">
											<div class="tl-time">
												<small>Treven Cleaers Limited</small>
											</div>
											<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-info">
												<i class="fa {{$val->style}}"></i>
											</div>
											<div class="tl-content">
												<h4 class="tl-tile text-primary">{{$val->title}}</h4>
												<p>
												{!!html_entity_decode($val->content)!!}
												</p>
											</div>
										</div>
									</div>
                </div>
                @else
								<div class="tl-item alt">
									<div class="tl-body">
										<div class="tl-entry">
											<div class="tl-time">
                      <small>Treven Cleaers Limited</small>
											</div>
											<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-warning">
												<i class="fa {{$val->style}}"></i>
											</div>
											<div class="tl-content">
												<h4 class="tl-tile text-danger">{{$val->title}}</h4>
												<p>
                        {!!html_entity_decode($val->content)!!}
												</p>
											</div>
										</div>
									</div>
                </div>
                @endif
                @endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
@endsection