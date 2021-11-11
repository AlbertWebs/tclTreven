@extends('front.master2')
@section('content')
	<!-- Breadcrumb -->
	@include('front.breadcrumb')
	<!-- BreadCrumb -->
       
        <!-- blog-details-area start -->
        <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                           
                            @include('clientarea.menu')
                        
                        </aside>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="blog-details-wrap">
                    <div class="col-md-8">
                        <div class="contact-wrap form-style">
                            <h3>Your Details</h3>
                            <center>
                            @if(Session::has('message'))
                                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @endif
                            </center>
							<form action="{{url('/clientarea')}}/save" method="post" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<input type="text" placeholder="Name" value="{{$User->name}}" id="fname" name="name">
									</div>
									<div class="col-sm-12 col-xs-12">
                                       <span class="fa-fa-envelope"></span>
										<input type="text" placeholder="Email" value="{{$User->email}}" id="email" name="email">
									</div>
									<div class="col-xs-12">
										<input type="text" placeholder="Mobile" value="{{$User->mobile}}" id="subject" name="mobile">
									</div>
									<div class="col-xs-12">
										<button id="submit" class="cont-submit btn-contact" name="submit">Save Changes</button>
									</div>
                                    <div class="col-md-8">
                        
                                </div>
								</div>
							</form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <blockquote>
                                   Changing your email destroys the current session Data
                        </blockquote>
                    </div>
                         </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
    @endsection