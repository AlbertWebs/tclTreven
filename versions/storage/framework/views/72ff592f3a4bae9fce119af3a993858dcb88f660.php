<?php $__env->startSection('content'); ?>
		<!--  Main Banner Start Here-->
		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>
					<?php $Slider = DB::table('slider')->where('id','1')->get(); ?>
						<?php if($Slider->isEmpty()): ?>

						<?php else: ?>
						<?php $__currentLoopData = $Slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderOne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!-- SLIDE  -->
						<li data-index="rs-129"  >
              <!-- MAIN IMAGE -->
              
							<img src="<?php echo e(url('/')); ?>/uploads/slider/<?php echo e($SliderOne->image); ?>"  alt="Treven Cleaners Limited"  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-129-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['700','700','700','720']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text">
									<span class="sub-text"><?php echo e($SliderOne->name); ?></span>
									<h2><?php echo e($SliderOne->title); ?></h2>
									<p>
										<?php echo html_entity_decode($SliderOne->content); ?>

									</p>
									<a class="btn-text" href="#"> Read More</a>
								</div>
              </div>
              
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  <?php endif; ?>

			  <?php $Slider = DB::table('slider')->where('id','2')->get(); ?>
			  <?php if($Slider->isEmpty()): ?>

			  <?php else: ?>
              <?php $__currentLoopData = $Slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderTwo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!-- SLIDE  -->
						<li data-index="rs-130" data-title="" data-description="">
							<!-- MAIN IMAGE -->
              
							<img src="<?php echo e(url('/')); ?>/uploads/slider/<?php echo e($SliderTwo->image); ?>"  alt="Treven Cleaners Limited"  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['700','700','700','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
                <div class="banner-text">
									<span class="sub-text"><?php echo e($SliderTwo->name); ?></span>
									<h2><?php echo e($SliderTwo->title); ?></h2>
									<p>
									<?php echo html_entity_decode($SliderTwo->content); ?>

									</p>
									<a class="btn-text" href="#"> Read More</a>
								</div>
              </div>
              
						</li>
						<!-- SLIDE  -->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  <?php endif; ?>

			  <?php $Slider = DB::table('slider')->where('id','3')->get(); ?>
			  <?php if($Slider->isEmpty()): ?>

			  <?php else: ?>
              <?php $__currentLoopData = $Slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderThree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li data-index="rs-131">
							<!-- MAIN IMAGE -->
							
							<img src="<?php echo e(url('/')); ?>/uploads/slider/<?php echo e($SliderTwo->image); ?>"  alt="Treven Cleaners Limited"  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-131-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['700','700','700','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">
                                <div class="banner-text">
									<span class="sub-text"><?php echo e($SliderThree->name); ?></span>
									<h2><?php echo e($SliderThree->title); ?></h2>
									<p>
									<?php echo html_entity_decode($SliderThree->content); ?>

									</p>
									<a class="btn-text" href="#"> Read More</a>
								</div>
              </div>
              
						</li>
						<!-- SLIDE  -->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  <?php endif; ?>
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!--  Main Banner End Here-->

		<!-- About Us -->
    <section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30">
					<div class="col-md-4 d-flex align-items-center">
						<div class="section_tit">
							<h2>About Us</h2>
							<span class="b-line"></span>
						</div>
					</div>

					<div class="col-md-8 mt-xs-30 text-center text-md-left">
						<p>
                
            <?php $About = DB::table('about')->get(); ?>
              <?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                <p><?php echo html_entity_decode($about->content); ?></p>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</p>
					</div>
				</div>
       
        <?php $Values = DB::table('values')->limit('4')->inRandomOrder()->get() ?>
				<div class="row mt-30 mt-xs-0">
          <?php $__currentLoopData = $Values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-3 col-md-6">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content text-center">
                <span class="fa <?php echo e($Value->style); ?> fa-5x"></span>
								<!-- <img src="<?php echo e(asset('theme/assets/images/cleaning-lady.svg')); ?>" alt="" height="50" width="50" /> -->
								<h3><?php echo e($Value->title); ?></h3>
								<p>
								  <?php echo html_entity_decode($Value->content); ?>

								</p>
							</div>
						</div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
				</div>

			</div>
		</section>
		<!-- About Us End-->
		<?php $Banner = DB::table('banners')->where('section','contact')->get(); ?>
		<?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<!-- Section -->
		<section class="padding ptb-xs-40 bg_contact light-color" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>') no-repeat 0 0;">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center call_headding">
						<h3>Are you looking for professional Cleaning services for your new Home/Office?</h3>
						<div class="contact_info mt-30">
            <?php $Sitesettings = DB::table('sitesettings')->get(); ?>
            <?php $__currentLoopData = $Sitesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <span class="call-us"><i class="ion-ios-telephone-outline"></i>Call us:  <?php echo e($Settings->mobile); ?></span><span>Or</span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<a class="btn btn-text" href="<?php echo e(url('/')); ?>/request-quote">Request Quote</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section_End -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<!-- Popular_Service_Section -->
		<section class="padding ptb-xs-40 gray-bg">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>Quality Services</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="slider_cours">
              <?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="courses_popular">
								<div class="top_cours">
									<figure>
										<img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($ser->image_one); ?>" alt="" />
									</figure>
									<div class="apply_box d-flex align-items-center">
										<div class="full_width">
											<a href="<?php echo e(url('/')); ?>/our-services/<?php echo e($ser->title); ?>" class="btn-text">Read More</a>
										</div>
									</div>
								</div>
								<div class="courses_detail text-center">
									<h3><a href="#"><?php echo e($ser->title); ?></a></h3>
									<p class=""><?php echo e($ser->pre); ?></p>
								</div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- Popular_Service_Section_End -->
		<?php $Banner = DB::table('banners')->where('section','quick')->get(); ?>
		<?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<!--Video Sec-->
		<section class="padding ptb-xs-40 video_sec" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>') no-repeat 0 0;">
			<div class="opacity-extra-medium bg-black"></div>
			<div class="container position-relative">
				<div class="row">
					<div class="col-lg-6 col-md-6 offset-md-3 text-center pop_section">
						<a class="popup-youtube popup-youtube" href="https://www.youtube.com/watch?v=gR4BiOBJfEc"><img src="<?php echo e(asset('theme/assets/images/icon-play.png')); ?>" alt="" data-no-retina=""></a>
					</div>

				</div>
			</div>
		</section>
		<!--Video Sec End-->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<!--  AJAX -->
		<?php echo $__env->make('front.quote', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- form_End -->


   
    <?php if($Testimonial->isEmpty()): ?>

    <?php else: ?>
	<?php $Banner = DB::table('banners')->where('section','testimonial')->get(); ?>
		<?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<!-- Testimonial_Section -->
		<section class="padding ptb-xs-40 testimonial_section" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>') no-repeat 0 0;">
			<div class="container">
				<div class="row pb-60 pb-xs-40 light-color">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>What clients Say About Us</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">

						<div class="say_testimonial dots_style owl-carousel">
              <?php $__currentLoopData = $Testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item_testimonial">
								<div class="patient_head d-flex align-items-stretch">
									<div class="patient_img">
										<figure>
											<img src="<?php echo e(url('/')); ?>/uploads/testimonials/<?php echo e($Tes->image); ?>" alt="" />
										</figure>
									</div>
									<div class="patient_detail d-flex align-items-center">
										<div>
											<h3><?php echo e($Tes->name); ?></h3>
											<span><?php echo e($Tes->position); ?></span>
										</div>
									</div>
								</div>
								<div class="patient_text">
									<p>
                  <?php echo html_entity_decode($Tes->content); ?>

									</p>
								</div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						

						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- Testimonial_Section_End -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>