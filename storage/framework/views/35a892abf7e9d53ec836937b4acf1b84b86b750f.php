<?php $__env->startSection('content'); ?>
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        <?php echo $__env->make('admin.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <?php echo $__env->make('admin.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                       <center> <h2> Admin Dashboard </h2> </center>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->
              
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class="row">
                    <div class="col-lg-7">

                        <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                                <i class="icon-envelope"></i>
                                Messages
                            
                            </div>

                            <div class="panel-body">
                                <ul class="chat">
                                <?php if($Message->isEmpty()): ?>
                                         <center><h2>You Have No New Message</h2></center>
                                    <?php else: ?>
                                <?php $__currentLoopData = $Message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="<?php echo e(url('/')); ?>/admins_theme/assets/img/1.png" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font "> <?php echo e($message->name); ?></strong>
                                                <small class="pull-right text-muted label label-success">
                                                   <a style="color:#ffffff;" href="<?php echo e(url('/admin/read')); ?>/<?php echo e($message->id); ?>"> <i class="icon-check"></i> Read </a>
                                                </small>

                                                <small class="pull-right text-muted label label-danger">
                                                   <a style="color:#ffffff;" onclick="return confirm('This Process Cannot Be Undone Please Confirm That You Want To Delete This Message')" href="<?php echo e(url('/admin/deleteMessage')); ?>/<?php echo e($message->id); ?>"> <i class="icon-trash"></i> Delete </a>
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                               <?php echo e($message->content); ?>

                                            </p>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                   
                                </ul>
                            </div>

                           

                        </div>


                    </div>
                    <div class="col-lg-5">
                         
                       <div class="panel panel-danger">
                            <div class="panel-heading">
                                <i class="icon-bell"></i> Notifications Alerts Panel
                            </div>

                            <div class="panel-body">
                            <?php
                               use App\Notifications;
                               $Notification = DB::table('notifications')->paginate(7); 
                               
                               

                            ?>
                                <div class="list-group">
                                  <?php $__currentLoopData = $Notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                                  <?php
                                  $Type = $notification->type;
                                  switch($Type) {
                                   case 'Payment':
                                       $Icon = 'money';
                                       break;
                                    case 'Comment':
                                       $Icon = 'comment';
                                       break;

                                    case 'Message':
                                       $Icon = 'envelope';
                                       break;

                                    case 'Order':
                                       $Icon = 'ok';
                                       break;
                                   
                                   default:
                                       $Icon= 'bell';
                                       break;
                                  }
                               ?>

                                    <a href="<?php echo e(url('/admin/notifications')); ?>" class="list-group-item">
                                        <i class=" icon-<?php echo e($Icon); ?>"></i> <?php echo e($notification->type); ?>

                                        <span class="pull-right text-muted small"><em><?php  $timestamp = $notification->created_at; echo timeago($timestamp); ?> </em>
                                    </span>
                                    </a>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                   
                                </div>

                                <a href="<?php echo e(url('/admin/notifications')); ?>" class="btn btn-default btn-block btn-primary">View All Alerts</a>
                            </div>

                        </div>

                    
                    
                    </div>
                </div>

                      
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         <?php echo $__env->make('admin.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>