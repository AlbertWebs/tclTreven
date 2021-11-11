@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
					<div class="title_row">
					    <br><br>
						<h1 data-title="Contact"><span>Request Quote</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Request Quote</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
	@endforeach
	<br><br>
    @include('front.quote')
   
@endsection