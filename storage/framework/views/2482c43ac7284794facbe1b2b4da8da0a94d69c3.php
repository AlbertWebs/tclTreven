<?php $__env->startSection('content'); ?>
	<!-- Breadcrumb -->
	<?php echo $__env->make('front.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- BreadCrumb -->

        <!-- blog-area start -->
        <section class="blog-area ptb-140 bg-1">
            <div class="container">
            
                <div class="row">
                <?php if($Blog->isEmpty()): ?>
                   <center><h2>Sorry There Are No Blogs For That Category</h2></center>
                <?php else: ?>
                <?php $__currentLoopData = $Blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 portfolio col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="<?php echo e(url('')); ?>/uploads/blog/<?php echo e($blog->image_one); ?>" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> <?php echo e($blog->author); ?></a></li>
										<li><a href="#"><i class="fa fa-comment"></i> <?php $Comments = DB::table('comments')->where('blog_id',$blog->id)->get(); $Count = count($Comments); echo $Count; ?>  Comments</a></li>
										
                                    </ul>
                                </div>
                                <h3><a href="<?php echo e(url('/blog')); ?>/<?php echo e($blog->id); ?>"><?php echo e($blog->title); ?></a></h3>
                                <p>
                                        <?php
											$original_string = $blog->content;
											$num_words = 15;
											$words = array();
											$words = explode(" ", $original_string, $num_words);
											$shown_string = "";
											

											if(count($words) == 15){
											$words[14] = "... ";
											}

											$shown_string = implode(" ", $words);

										?>
								<!-- Elipses -->
							         <?php echo html_entity_decode($shown_string); ?>

                                </p>
                                <a href="<?php echo e(url('/blog')); ?>/<?php echo e($blog->title); ?>" class="btn-style">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                            <?php echo $Blog; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>