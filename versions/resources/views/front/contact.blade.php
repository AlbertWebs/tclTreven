@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<br><br>
						<h1 data-title="Contact"><span>Contact Us</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Contact Us</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    @endforeach
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">

					<div class="row">

						<div class="col-lg-8">

							<div class="headeing pb-30">
								<h2>Get in Touch</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<!-- Contact FORM -->
							<form class="contact-form " id="contact" action="{{url('/submitMessage')}}" method="post">
							{{ csrf_field() }}
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
								<div class="row">
									<div class="col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name">
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email" >
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="message" placeholder="Your Message" ></textarea>
										</div>
									</div>
									<div class="col-lg-12 mt-30">
										<button class="btn-text" type="submit" id="submit" name="button">
											Send Message
										</button>
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>

						<div class="col-lg-4 contact mt-sm-30 mt-xs-30">
							<div class="headeing pb-20">
								<h2>Contact Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">
                            @foreach($SiteSettings as $Setting)
								<ul class="info">
									<li>
										<div class="icon ion-ios-location"></div>
										<div class="content">
											<p>
												{{$Setting->location}}
											</p>
											<p>
                                                {{$Setting->address}}
											</p>
										</div>
									</li>

									<li>
										<div class="icon ion-android-call"></div>
										<div class="content">
											<p>
                                            {{$Setting->mobile}}
											</p>
											<p>
                                            {{$Setting->mobile_one}}
											</p>
											<p>
                                            {{$Setting->mobile_two}}
											</p>
										</div>
									</li>
									<li>
										<div class="icon ion-ios-email"></div>
										<div class="content">
											<p>
                                               {{$Setting->email}}
											</p>
											<p>
                                            {{$Setting->email_one}}
											</p>
										</div>
									</li>
								</ul>
								<ul class="event-social">
									<li>
										<a href="{{$Setting->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="{{$Setting->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="{{$Setting->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									
									<li>
										<a href="{{$Setting->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									</li>
                                </ul>
                            @endforeach
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			<!-- Map -->
			<!-- <section class="map-box">
				<div class="map">
					<div id="map"></div>
				</div>
			</section> -->
			<!-- Contact Section -->
			<!--End Contact-->
@endsection