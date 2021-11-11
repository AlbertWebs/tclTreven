<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - {{$page_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/animate.css')}}">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.css')}}">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/font-awesome.min.css')}}">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/flaticon.css')}}">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/slicknav.min.css')}}">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/slick.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/styles.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('theme/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- Ajax CSRF -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<?php $Sitesettings = DB::table('sitesettings')->get(); ?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header-area start -->
    <header class="header-area bg-1">
        <!-- Top Header -->
        <div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                              @foreach($Sitesettings as $Settings)
				  				<a href="tel:{{$Settings->mobile}}">{{$Settings->mobile}}</a>
                                  <a href="mailto:{{$Settings->email}}">{{$Settings->email}}</a>	
                              @endforeach				  
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<ul>
                                  @foreach($Sitesettings as $Settings)
                                    <li><a href="{{$Settings->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{$Settings->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{$Settings->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{$Settings->google}}"><i class="fa fa-google-plus"></i></a></li>
                                  @endforeach
				  				</ul>			
				  			</div>
                          </div>
                          <hr class="hr">			  					
		  			</div>
				</div>
        <!-- top header -->
        
    </header>
       
    <header class="header-area bg-1" id="sticky-header">
       
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-9 col-sm-8 col-6">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('theme/assets/images/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="mainmenu">
                        <ul id="navigation">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/services')}}">Services</a></li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="search-wrapper">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul>
                                    <li>
                                        <form action="#">
                                            <input type="text" placeholder="Search Here...">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-2 d-lg-none d-sm-block">
                    <div class="responsive-menu-wrap floatright"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->
    @yield('content')
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-widget footer-logo">
                        @foreach($Sitesettings as $Settings)
                            <img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="">
                            <p>{!!html_entity_decode($Settings->welcome)!!}</p>
                            <h4>Working Hours: </h4>
                            <span>Mon - Sat 8:00 - 18:00</span>
                        @endforeach
                            <ul>
                            @foreach($Sitesettings as $Settings)
                                <li><a href="{{$Settings->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$Settings->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$Settings->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{$Settings->google}}"><i class="fa fa-google-plus"></i></a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-contact">
                            <h4 class="widget-title">GET IN TOUCH</h4>
                            <ul>
                            @foreach($Sitesettings as $Settings)
                                <li><i class="fa fa-home"></i> {{$Settings->location}}</li>
                                <li><i class="fa fa-phone"></i>  {{$Settings->mobile}}</li>
                                <li><i class="fa fa-phone"></i>  {{$Settings->mobile_one}}</li>
                                <li><i class="fa fa-envelope"></i> {{$Settings->email}}</li>
                                <li><i class="fa fa-envelope"></i> {{$Settings->email}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('/portfolio')}}">Our Works</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                <li><a href="{{url('/privacy')}}">Privacy</a></li>
                                <li><a href="{{url('/terms')}}">Terms</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget newsletter">
                            <h4 class="widget-title">newsletter</h4>
                            <p>Subscribe to get the latest Newsletters.</p>
                            <form action="#">
                                <input id="myEmail" autocomplete="off" type="text" placeholder="Enter Your Email">
                                
                                <button id="subscribebtn"><i class="fa fa-envelope"> Subscribe </i></button>
                                <div id="info-alert"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bootem">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> {{ config('app.name', 'Laravel') }} All rights reserved | Powered By <a href="https://designekta.com" target="_blank">Designekta Studios</a>
<!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area start -->
    <!-- jquery latest version -->
    <script src="{{asset('theme/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- popper.min.js -->
    <script src="{{asset('theme/assets/js/vendor/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
    <!-- slick.min.js -->
    <script src="{{asset('theme/assets/js/slick.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('theme/assets/js/plugins.js')}}"></script>
    <script>
		$(document).ready(function(){
            
		   $('#subscribebtn').click(function (event) {
				
				$('#info-alert').html('Submitting...............');
				event.preventDefault();
				var Email = $("#myEmail").val();

				$.ajax({
					headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
					type: "post",
					url : '/subscribe',
					data: {email:Email},
				success: function( msg ) {

					$('#subscribeMessage1').hide();
					$('#info-alert').show(400);
					$('#info-alert').html(msg);
					}
				});
		   });
        });
    </script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
    <script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(40.712764, -74.005667),
            styles: [{
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#bdbdbd"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dadada"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#c9c9c9"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                }
            ]
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);


        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            map: map
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
    <script src="{{asset('theme/assets/js/scripts.js')}}"></script>
</body>

</html>