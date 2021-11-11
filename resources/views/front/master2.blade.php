<!DOCTYPE html>
<html lang="en">
<?php $Sitesettings = DB::table('sitesettings')->get(); ?>
@foreach($Sitesettings as $Settings)
<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO -->
  {!! SEOMeta::generate() !!}
  {!! OpenGraph::generate() !!}
  {!! Twitter::generate() !!}
  <!-- SEO -->

  <link rel="shortcut icon" href="{{url('/')}}/uploads/logo/{{$Settings->logo}}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('theme/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('theme/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('theme/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('theme/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('theme/css/aos.css')}}">
  <link href="{{asset('theme/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Analytics Scripts -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150353173-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150353173-1');
  </script>

  <!-- </Analytics Scripts -->

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="{{url('/')}}">
              <img width="100" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="{{$Settings->sitename}}" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-placeholder text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">Nairobi</span>
                <span class="caption-text">{{$Settings->location}}</span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-call text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">{{$Settings->mobile}}</span>
                <span class="h4 d-block">{{$Settings->mobile_one}}</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-email text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">{{$Settings->email}}</span>
                <span class="caption-text">{{$Settings->email_one}}</span>
              </div>
            </div>
          </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="<?php if($page_title == 'Home'){ echo "active";}else{ echo ""; } ?>">
                  <a href="{{url('/')}}" class="nav-link text-center">Home</a>
                </li>
                <li class="<?php if($page_title == 'About Us'){ echo "active";}else{ echo ""; } ?>">
                  <a href="{{url('/about-us')}}" class="nav-link text-center">About Us</a>
                </li>
                <li class="<?php if($page_title == 'Our Products'){ echo "active";}else{ echo ""; } ?>">
                  <a href="{{url('/our-products')}}" class="nav-link text-center">Our Products</a>
                </li>
                <li class="<?php if($page_title == 'Our Supplies'){ echo "active";}else{ echo ""; } ?>">
                  <a href="{{url('/our-services')}}" class="nav-link text-center">Our Services</a>
                </li>

                <li class="<?php if($page_title == 'Our Works'){ echo "active";}else{ echo ""; } ?>">
                  <a href="{{url('/projects-and-gallery')}}" class="nav-link text-center">Projects & Gallery</a>
                </li>
              
                <li class="<?php if($page_title == 'Contact Us'){ echo "active";}else{ echo ""; } ?>">
                    <a href="{{url('/contact-us')}}" class="nav-link text-center">Contact</a>
                  </li>

                 
              </ul>  
                                                                                                                                                                                                                                                                                                    </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
    
    @yield('content')

    <div class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <p class="mb-4"><img src="{{url('/')}}/uploads/logo/" alt="{{$Settings->sitename}}" class="img-fluid"></p>
            <p>{!!html_entity_decode($Settings->welcome)!!}</p>  
           
          </div>
          <div class="col-lg-2">
            <h3 class="footer-heading"><span>Quick Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="{{url('/about-us')}}">About Us</a></li>
                <li><a href="{{url('/our-services')}}">Our Services</a></li>
                <li><a href="{{url('/our-products')}}">Our Products</a></li>
                <li><a href="{{url('/projects-and-gallery')}}">Projects & Gallery</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <?php $Services = DB::table('services')->limit('4')->inRandomOrder()->get(); ?>
                  @foreach($Services as $Service)
                  <li><a href="{{url('/services')}}/{{$Service->title}}">{{$Service->title}}</a></li>
                  @endforeach
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Infomation</span></h3>
              <ul class="list-unstyled">
                  <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                  <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                  <li><a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a></li>
                  <li><a href="{{url('/copyright')}}">Copyright Statement</a></li>
                  
              </ul>
          </div>
        </div>

        <!-- Social Media -->
        <center>
            <a href="{{$Settings->facebook}}" class="fa fa-facebook"></a>
            <a href="{{$Settings->twitter}}" class="fa fa-twitter"></a>
            <a href="{{$Settings->instagram}}" class="fa fa-instagram"></a>
            
            </center>
            <!-- Social Media -->

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered By <a href="https://designekta.com" target="_blank" >Designekta Studios</a>
                    <!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#07176A"/></svg></div>


  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

  <script src="{{asset('theme/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery-ui.js')}}"></script>
  <script src="{{asset('theme/js/popper.min.js')}}"></script>
  <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('theme/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('theme/js/aos.js')}}"></script>
  <script src="{{asset('theme/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('theme/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('theme/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('theme/js/main.js')}}"></script>
  <!-- Throw Ajax Here -->
  <!-- Request Quote -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
       $('#submitsbc').on('submit', function (e) {
          $('#subscribebtn').html('Submiting....')
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '{{url('/')}}/subscribe',
            data: $('#submitsbc').serialize(),
            success: function (rsl) {
              //clear the form
              $('form :input').val('');
              $('#subscribebtn').html('Subscribe')
              alert(rsl);
            
            }
          });

        });


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
            
            }
          });

        });
    </script>

  <!-- Subscriber -->
  <!-- Throw Ajax Here -->

</body>
@endforeach
</html>