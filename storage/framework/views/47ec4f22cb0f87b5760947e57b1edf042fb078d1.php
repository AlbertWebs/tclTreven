<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<!-- About Section -->
    <section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2">
						<div class="sec_hedding text-center">
							<h2>About us</h2>
              <span class="b-border"></span>
              <?php $About = DB::table('about')->get(); ?>
              <?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<p>
							<?php echo html_entity_decode($about->content); ?>

              </p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="solution_box about_new">
							<i class="fa fa-check-square-o color_orenge" aria-hidden="true"></i>
							<h4>Mission</h4>
							<p>
							<?php echo html_entity_decode($about->mission); ?>

							</p>

						</div>
					</div>

					<div class="col-lg-6 mt-sm-30 mt-xs-30">
						<div class="solution_box about_new">
							<i class="fa fa-binoculars color_orenge" aria-hidden="true"></i>
							<h4>Our Vision</h4>
							<p>
							<?php echo html_entity_decode($about->vision); ?>

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
                <?php $__currentLoopData = $Values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($val->id % 2 == 0): ?>
								<div class="tl-item">
									<div class="tl-body">
										<div class="tl-entry">
											<div class="tl-time">
												<small>Treven Cleaers Limited</small>
											</div>
											<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-info">
												<i class="fa <?php echo e($val->style); ?>"></i>
											</div>
											<div class="tl-content">
												<h4 class="tl-tile text-primary"><?php echo e($val->title); ?></h4>
												<p>
												<?php echo html_entity_decode($val->content); ?>

												</p>
											</div>
										</div>
									</div>
                </div>
                <?php else: ?>
								<div class="tl-item alt">
									<div class="tl-body">
										<div class="tl-entry">
											<div class="tl-time">
                      <small>Treven Cleaers Limited</small>
											</div>
											<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-warning">
												<i class="fa <?php echo e($val->style); ?>"></i>
											</div>
											<div class="tl-content">
												<h4 class="tl-tile text-danger"><?php echo e($val->title); ?></h4>
												<p>
                        <?php echo html_entity_decode($val->content); ?>

												</p>
											</div>
										</div>
									</div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>