<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
			<div class="container">
				<div class="row title">
					<div class="title_row">
					<br><br>
						<h1 data-title="Contact"><span>Our Services</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Our Services</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if($Services->isEmpty()): ?>

    <?php else: ?>
<!-- Service Section -->
    <section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30 text-center">
					<div class="col-md-12">
						<div class="section-title_home">
							<h2>Our <span>Service</span></h2>
						</div>
					</div>
				</div>

				<div class="row">
        <?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-6 col-lg-4 mb-30">
						<div class="service_box">
							<figure>
								<img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($Ser->image_one); ?>" alt="" />
							</figure>
							<h3><a href="<?php echo e(url('/')); ?>/our-services/<?php echo e($Ser->title); ?>"><?php echo e($Ser->title); ?></a></h3>
							<p>
								<?php echo e($Ser->pre); ?>

							</p>
						</div>
					</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

			</div>
		</section>
		<!-- Service Section end -->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>