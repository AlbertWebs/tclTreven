<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
   <title><?php echo e(config('app.name', 'Laravel')); ?> | Login </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?php echo e(asset('admins_theme/assets/plugins/bootstrap/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admins_theme/assets/css/login.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admins_theme/assets/plugins/magic/magic.css')); ?>" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
     <h2><b><?php echo e(config('app.name', 'Laravel')); ?></b></h2>
        <p><b>Admin Login</b></p>
        

           <?php if($errors->has('email')): ?>
                <span class="help-block text-center alert-danger">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                   
          <?php endif; ?>
    </div>
    <center>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

    </center>

    
    <div class="tab-content">
        <div id="login" class="tab-pane active">
           
            <form class="form-signin" method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                        <?php echo e(csrf_field()); ?>

                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p>

                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            
                <input id="email" placeholder="julietkoi@gmail.com" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input id="password" placeholder="Enter your password" type="password" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <button class="btn text-muted text-center btn-danger" type="submit" name="login">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form method="POST" action="<?php echo e(route('admin.password.email')); ?>" class="form-signin">
            <?php echo e(csrf_field()); ?>

                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                <br />
                <button class="btn text-muted text-center btn-success" type="submit" name="reset">Send Password Reset Link</button>
            </form>
        </div>
        
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo e(asset('admins_theme/assets/plugins/jquery-2.0.3.min.js')); ?>"></script>
      <script src="<?php echo e(asset('admins_theme/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
   <script src="<?php echo e(asset('admins_theme/assets/js/login.js')); ?>"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>