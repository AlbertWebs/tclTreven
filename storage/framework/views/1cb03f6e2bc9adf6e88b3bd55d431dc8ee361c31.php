<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
			<div class="container">
				<div class="row title">
					<div class="title_row">
					    <br><br>
						<h1 data-title="Contact"><span>Request Quote</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Request Quote</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br><br>
    <?php echo $__env->make('front.quote', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>