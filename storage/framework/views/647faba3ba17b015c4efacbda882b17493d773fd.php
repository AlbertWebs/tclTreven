<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
			<div class="container">
				<div class="row title">
                <br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span>Privacy Policy</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Privacy Policy</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="testmonial-area testmonial-area2 ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php if($Privacy->isEmpty()): ?>
                        <center><h2>No privacy Policies Added</h2></center>
                <?php else: ?>
                <?php $__currentLoopData = $Privacy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $privacy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="section-title text-center">
                        <h2 style="color:#000"><?php echo e($privacy->title); ?></h2>
                        <p style="color:#000"><?php echo html_entity_decode($privacy->content); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </div>
            </div>
          
        </div>
    </div>
        
    <?php $__env->stopSection(); ?>

     
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>