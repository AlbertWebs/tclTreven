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
							<a>Home</a>/ <span>Our Services</span> /<span><?php echo e($name); ?></span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area end -->
    <!-- Service Section -->
		<div id="services-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sx-12">
						<div class="single-sidebar-widget">
							<div class="special-links">
								<ul>
                  <?php $ServisesList = DB::table('services')->get(); ?>
                  <?php $__currentLoopData = $ServisesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SerList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a class="active" href="<?php echo e(url('/')); ?>/our-services/<?php echo e($SerList->title); ?>"><?php echo e($SerList->title); ?></a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
								</ul>
							</div>
						</div>
						<div class="single-sidebar-widget">
							<div class="sec-title">
								<h2>Downloads</h2>
								<span>Here is some useful document(s)</span>
							</div>
							<ul class="brochure-btns">
                <?php $Files = DB::table('files')->get(); ?>
                <?php $__currentLoopData = $Files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $File): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<a download href="<?php echo e(url('/')); ?>/uploads/files/<?php echo e($File->file); ?>" class="clearfix"><i class="fa fa-file-pdf-o"></i> <span><?php echo e($File->name); ?></span> </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</ul>
						</div>
					</div>
					<div class="col-lg-8 mt-xs-30 mt-sm-30">
          <?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="full-pic">
							<figure>
								<img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($Service->image_one); ?>" alt="">
							</figure>
            </div>
           
						<div class="text-box mt-40">
							<div class="box-title mb-20">
								<h2><?php echo e($name); ?></h2>
							</div>
							<div class="text-content">
								<p>
								<?php echo html_entity_decode($Service->content); ?>

								</p>
							</div>
						
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Service Section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>