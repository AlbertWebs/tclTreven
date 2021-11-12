<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
							<form class="contact-form " id="contact" action="<?php echo e(url('/submitMessage')); ?>" method="post">
							<?php echo e(csrf_field()); ?>

								<!-- Message Here -->
								<center>
									<?php if(Session::has('message')): ?>
													<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
									<?php endif; ?>

									<?php if(Session::has('messageError')): ?>
													<div class="alert alert-danger"><?php echo e(Session::get('messageError')); ?></div>
									<?php endif; ?>
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
                            <?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<ul class="info">
									<li>
										<div class="icon ion-ios-location"></div>
										<div class="content">
											<p>
												<?php echo e($Setting->location); ?>

											</p>
											<p>
                                                <?php echo e($Setting->address); ?>

											</p>
										</div>
									</li>

									<li>
										<div class="icon ion-android-call"></div>
										<div class="content">
										
											<p>
												<a href="tel:+254706020308">Call Us +254706020308</a>
											</p>
											<p>
												<a href="tel: +254712857550">Call Us +254712857550</a>
											</p>
										</div>
									</li>
									<li>
										<div class="icon fa fa-whatsapp"></div>
										<div class="content">
											<p>
												<a href="https://wa.me/12025400134">WhatsApp +12025400134</a>
											</p>
											
										</div>
									</li>
									<li>
										<div class="icon ion-ios-email"></div>
										<div class="content">
											<p>
                                               <?php echo e($Setting->email); ?>

											</p>
											<p>
                                            <?php echo e($Setting->email_one); ?>

											</p>
										</div>
									</li>
								</ul>
								<ul class="event-social">
									<li>
										<a href="<?php echo e($Setting->instagram); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo e($Setting->twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo e($Setting->facebook); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									
									<li>
										<a href="<?php echo e($Setting->linkedin); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									</li>
                                </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>