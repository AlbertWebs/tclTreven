<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
			<div class="container">
				<div class="row title">
				<br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span><?php echo e($name); ?></span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Our Work</span>/<span><?php echo e($name); ?></span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   

<div id="project-detail-section" class="padding pb-60 pt-xs-60 pb-xs-30">
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">
						<div class="heading-box pb-30 ">
							<h2><span><?php echo e($name); ?></span> </h2>
							<span class="b-line l-left"></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="project-details">
							<figure>
								<img src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_one); ?>" alt="">
							</figure>
							<div class="project-info col-sm-12 col-lg-4 ">
								<h3>Project Description</h3>
								<ul>
                                    <li>
										<strong>Title:</strong> <?php echo e($Portfolio->title); ?>

									</li>
									<li>
										<strong>Client:</strong> <?php echo e($Portfolio->client); ?>

									</li>
									<li>
										<strong>Location:</strong> <?php echo e($Portfolio->location); ?>

									</li>
									
									<li>
                                        <strong>Service Renderes:</strong> <?php $SerPortfolio = DB::table('services')->where('id',$Portfolio->cat)->get(); ?>
                                        <?php $__currentLoopData = $SerPortfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SerPor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php echo e($SerPor->title); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-7 mt-30">
						<div class="box-title mb-20">
							<h3>Aenean suscipit eget mi act</h3>
						</div>
						<div class="text-content">
							<p>
                            <?php echo html_entity_decode($Portfolio->content); ?>	</p>
						</div>
					</div>

					
					<div class="col-sm-12 col-lg-12 mt-40 mt-xs-15">
						<ul class="project-gallery text-right">
							<li>
								<a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_two); ?>" class="fancylight" data-fancybox-group="light"><img src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_two); ?>" alt=""></a>
							</li>
							<li>
								<a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_three); ?>" class="fancylight" data-fancybox-group="light"><img src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_three); ?>" alt=""></a>
							</li>
							<li>
								<a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_four); ?>" class="fancylight" data-fancybox-group="light"><img src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_four); ?>" alt=""></a>
							</li>
							<li>
								<a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_five); ?>" class="fancylight" data-fancybox-group="light"><img src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_five); ?>" alt=""></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>