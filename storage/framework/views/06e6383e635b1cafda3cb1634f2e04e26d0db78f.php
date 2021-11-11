<!-- Date_form AJAX -->
<section class="margin_top">
			<div class="container reponsive_full">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 bg_black d-flex align-items-center">
						<div class="form_home">
							<div class="section_heading mb-30 text-center">
								<h2>How would you like to clean Up? <span style="color:#fff;" class="fa fa-smile-o"></span></h2>
							</div>
							<!-- Contact FORM -->
							<form id="SubmitQuote" class="quote-form" id="contact">
                            <?php echo e(csrf_field()); ?>

								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong> for using our template. Your message has been sent.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="email" name="email" placeholder="Email">
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-field">
									<input class="input-sm form-full" id="phone" type="text" name="phone" placeholder="Your phone No.">
										</div>
									</div>
									
									

									<div class="col-md-12">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="message" placeholder="Your Message"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<button class="bnt btn-text sent-but white-btn" type="submit" id="quoteBtn" name="button">
											Send
										</button>
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->

						</div>
					</div>
					
					

				</div>
			</div>
		</section>
        <!-- Date_form_End -->
        


         <!-- <div class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 align-self-end">
          <?php $Banner = DB::table('banners')->where('section','testimonial')->get(); ?>
            <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>" alt="Image" class="img-fluid">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <div class="col-lg-7 align-self-center mb-5">

            <div class="bg-black  quote-form-wrap wrap text-white">
              <div class="mb-5">
                <h3 class="section-subtitle">Get A Quote</h3>
                <h2 class="section-title mb-4">Request A <strong>Quote</strong></h2>
              </div>
              <form id="SubmitQuote" class="quote-form">
              <?php echo e(csrf_field()); ?>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" name="email" class="form-control" placeholder="Your email*" required>
                  </div>
                 
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <textarea name="message" class="form-control"  placeholder="Message*" cols="30" rows="7"></textarea>
                  </div>
                  <div class="col-md-6 align-self-end">
                    <input type="submit" id="quoteBtn" class="btn btn-primary btn-block btn-lg rounded-0" value="Send Message">
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->