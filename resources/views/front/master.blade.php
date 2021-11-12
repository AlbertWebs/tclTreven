<!DOCTYPE html>
<html lang="en">
<?php $Sitesettings = DB::table('sitesettings')->get(); ?>

@foreach($Sitesettings as $Settings)

    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		{!! SEOMeta::generate() !!}
		
		<meta property="og:title" content="Treven Cleaners Limited">
		<meta property="og:site_name" content="Treven Cleaners Limited">
		<meta property="og:url" content="https://trevencleanersltd.co.ke/">
		<meta property="og:description" content="Treven Cleaners is The Best Cleaning Company in Nairobi, Carpet Cleaning In Nairobi, Vehicle Interior Cleaning, Post Construction Cleaning">
		<meta property="og:type" content="website">
		<meta property="og:image" content="http://trevencleanersltd.co.ke/uploads/logo/TREVEN W-01.png">

		{!! Twitter::generate() !!}
		<!-- SEO -->
		<link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('theme/assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('theme/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('theme/assets/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('theme/assets/css/magnific-popup.css')}}" type="text/css" rel="stylesheet">

		<!--Main Slider-->
		<link href="{{asset('theme/assets/css/settings.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('theme/assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('theme/assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('theme/assets/css/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('theme/assets/css/header1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('theme/assets/css/footer1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('theme/assets/css/index1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('theme/assets/css/theme-color/default.css')}}" rel="stylesheet" type="text/css" id="theme-color" />
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5dfb1a10d96992700fccf9bc/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>

		<!--loader-->

		<!-- HEADER -->
		<header id="header" class="header header-1 header_tran">
			<div id="top-bar" class="top-bar-section top-bar-bg-color">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="top_loction pull-left">
								<ul>
									<li>
										<a href="#!"><i class="fa fa-map-marker"></i> {{$Settings->location}} </a>
									</li>
									<li>
										<a href="mailto:Support@Domain.Com"><i class="fa fa-envelope"></i> {{$Settings->email}} </a>
									</li>
									<li>
										<a href="tel:1234567890"><i class="fa fa-phone"></i>{{$Settings->mobile}}</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="top-social-icon icons-hover-black">
								<div class="icons-hover-black">
									<a href="{{$Settings->facebook}}"> <i class="fa fa-facebook"></i> </a>
									<a href="{{$Settings->twitter}}"> <i class="fa fa-twitter"></i> </a>
									<a href="{{$Settings->youtube}}"> <i class="fa fa-youtube"></i> </a> 
                  <a href="{{$Settings->linkedin}}"> <i class="fa fa-linkedin"></i> </a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="nav-wrap">
				<div class="reletiv_box">
					<div class="container">
						<div class="row d-flex align-items-center">
							<div class="col-md-3">
								<div class="logo">
									<a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="{{$Settings->sitename}}"></a>
								</div>
								<!-- Phone Menu button -->
								<button id="menu" class="menu hidden-md-up"></button>
							</div>
							<div class="col-md-9 nav-bg">
								<nav class="navigation">
									<ul>
							<li>
                
								<a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
								
								
              </li>
              
              <li>
                
								<a href="{{url('/about-us')}}"><i class="fa fa-info-circle"></i> About Us</a>
								
								
              </li>

              <li>
                
								<a href="{{url('/our-services')}}"><i class="fa fa-wrench"></i> Our Services</a>
								
								
			  </li>
			  
			  
			  <li>
                
								<a href="{{url('/request-quote')}}"><i class="fa fa-send"></i> Request Quote</a>
								
								
			  </li>
			  <?php $PortfolioMenu = DB::table('portfolio')->get() ?>
			  @if($PortfolioMenu->isEmpty())
			  
			  @else
              <li>
                
								<a href="{{url('/our-work')}}"><i class="fa fa-briefcase"></i> Portfolio</a>
								
								
			  </li>
			  @endif
              
              <li>
                
								<a href="{{url('/contact-us')}}"><i class="fa fa-phone"></i> Contact Us</a>
								
								
							</li>
              
						</ul>

								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->

    @yield('content')

		<!-- Footer -->
		<footer>
			{{-- <div class="top_footer_info__block ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-phone"></i>
								<h4>{{$Settings->mobile}} <span>Monday-Friday, 8am-7pm</span></h4>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-envelope-o"></i>
								<h4>{{$Settings->email}} <span>Monday-Friday, 8am-7pm</span></h4>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-map-marker"></i>
								<h4>{{$Settings->location}} <span>Get all the information</span></h4>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<?php $Banner = DB::table('banners')->where('section','footer')->get(); ?>
		    @foreach($Banner as $banner)
			<div class="main_footer__block pb-0 pt-60" style="background: url('{{url('/')}}/uploads/banners/{{$banner->image}}') no-repeat 0 0;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer_box__block address-box">
								<h4 class="text-center">About Us</h4>
								<p class="text-center">{!!html_entity_decode($Settings->welcome)!!}</p>
								
									<ul>
									
										<li>
											<i class="fa fa-clock-o"></i>
											<p>
											{!!html_entity_decode($Settings->days)!!}
											</p>
										</li>
									</ul>
								
							</div>
						</div>
						<div class="col-lg-3 mt-sm-30 mt-xs-30">
							<div class="footer_box__block text-center">
								<h4>Quick Links</h4>
								<ul>
									<li>
										<a href="{{url('/')}}">Home</a>
									</li>
									<li>
										<a href="{{url('/about-us')}}">About Us</a>
									</li>
									<li>
										<a href="{{url('/Our Services')}}">Our Services</a>
                  </li>
                  <li>
										<a href="{{url('/our-work')}}">Our Work</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 mt-xs-30 mt-sm-30">
							<div class="footer_box__block text-center">
								<h4>Quick Info</h4>
								<ul>
									<li>
										<a href="{{url('/copyright')}}">Copyright</a>
									</li>
									<li>
										<a href="{{url('/privacy-policy')}}">Privacy Policy</a>
									</li>
									<li>
										<a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a>
                  </li>
                  <li>
										<a href="{{url('/contact-us')}}">Contact Us</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 mt-sm-30 mt-xs-30">
							<div class="footer_box__block address-box">
								<h4>Contact info</h4>
								<ul>
									<li>
										<i class="fa fa-whatsapp"></i>
										<p>
											<a href="https://wa.me/12025400134">WhatsApp +12025400134</a>
										</p>
									</li>
								
									
									<li>
										<i class="fa fa-phone"></i>
										<p>
											<a href="tel:+254706020308">Call Us +254706020308</a>
										</p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										<p>
											<a href="tel: +254712857550">Call Us +254712857550</a>
										</p>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i>
										<p>
											<a href="mailto:{{$Settings->email}}">{{$Settings->email}}</a>
										</p>
									</li>
									<li>
										<i class="fa fa-map-marker"></i>
										<p>
                                            {{$Settings->location}}
										</p>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="copyriight_block ptb-20 mt-20">
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="footer__block-logo"><img width="100" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="{{$Settings->sitename}}"></a>
							</div>
							<div class="col-sm-8 text-right">
								<p>
									&copy; <?php $date = date('Y'); echo $date; ?> <a href="{{url('/copyright')}}">{{$Settings->sitename}}</a> All Rights Reserved 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</footer>
		<!-- Footer_End -->

		<!-- Site Wraper End -->
		<script type="text/javascript" src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('theme/assets/js/jquery.easing.js')}}" type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="{{asset('theme/assets/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
		<script src="{{asset('theme/assets/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
		<!-- popup -->
		<script src="{{asset('theme/assets/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>

		<!-- carousel Js -->
		<script src="{{asset('theme/assets/js/owl.carousel.js')}}" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="{{asset('theme/assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="{{asset('theme/assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('theme/assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('theme/assets/js/jquery.appear.js')}}" type="text/javascript"></script>
		<!-- Mail Function Js -->
		<script src="{{asset('theme/assets/js/mail.js')}}" type="text/javascript"></script>

		<!-- revolution Js -->
		<script type="text/javascript" src="{{asset('theme/assets/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('theme/assets/js/jquery.revolution.js')}}"></script>
		<!-- custom Js -->
		<script src="{{asset('theme/assets/js/custom1.js')}}" type="text/javascript"></script>

		<!-- Throw Ajax Here -->
  <!-- Request Quote -->
  <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
  <script>
     


        $('#SubmitQuote').on('submit', function (e) {
          $('#quoteBtn').html('Submiting....')
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '{{url('/')}}/quote',
            data: $('#SubmitQuote').serialize(),
            success: function (rsl) {
              //clear the form
              $('form :input').val('');
              $('#quoteBtn').html('Send Message')
              alert(rsl);
			  location.reload();
            
            }
          });

        });
    </script>

  <!-- Subscriber -->
  <!-- Throw Ajax Here -->
		

	</body>

<!-- index107:11-->
@endforeach
</html>

