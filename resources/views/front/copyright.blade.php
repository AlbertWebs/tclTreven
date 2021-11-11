@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			<div class="container">
				<div class="row title">
                <br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span>Copyright Statement</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Copyright Statement</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    @endforeach
   
        <div class="testmonial-area testmonial-area2 ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                @if($Copyright->isEmpty())
                        <center><h2>No Copyrights</h2></center>
                @else
                @foreach($Copyright as $value)
                    <div class="section-title text-center">
                        <h2 style="color:#000">Copyright Statement</h2>
                        <p style="color:#000">{!!html_entity_decode($value->content)!!}</p>
                    </div>
                @endforeach
                @endif
                </div>
            </div>
          
        </div>
    </div>
    @endsection