<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
			<div class="container">
				<div class="row title">
				<br><br>
					<div class="title_row">
						<h1 data-title="Contact"><span>Our Work</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Our Work</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- Work Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Our Work Gallery</h2>
							<p class="mb-0">
								We enjoy what we do, We felt like its best if we leave these here for our visitors
							</p>
						</div>
					</div>
				</div>
				<!-- work Filter -->
				<div class="row">
					<div class="col-sm-12">
						<ul class="container-filter categories-filter">
							<li>
								<a class="categories active" data-filter="*">All</a>
              </li>
              <?php $Services = DB::table('services')->get(); ?>
              <?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a class="categories" data-filter=".cat_<?php echo e($Ser->id); ?>"><?php echo e($Ser->title); ?></a>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</ul>
					</div>
				</div>
				<!-- End work Filter -->
				<div class="row container-grid nf-col-3">


        <?php $Portfolio = DB::table('portfolio')->get(); ?>
        <?php $__currentLoopData = $Portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $porfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $SerPortfolio = DB::table('services')->where('id',$porfolio->cat)->get(); ?>
        <?php $__currentLoopData = $SerPortfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SerPor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="nf-item cat_<?php echo e($SerPor->id); ?> coffee spacing">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="item-box">
							<a> <img alt="1" src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($porfolio->image_one); ?>" class="item-container"> </a>
							<div class="link-zoom">
								<a href="<?php echo e(url('/')); ?>/our-work/<?php echo e($porfolio->title); ?>" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
								<a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($porfolio->image_one); ?>" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
								<div class="gallery-heading">
									<h4><a href="<?php echo e(url('/')); ?>/our-work/<?php echo e($porfolio->title); ?>"><?php echo e($porfolio->title); ?></a></h4>

								</div>
							</div>

						</div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					

				</div>

			</div>
		</section>
		<!-- End Work Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>