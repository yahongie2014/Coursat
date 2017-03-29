<?php $__env->startSection('title'); ?>
<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>    
    <section class="profile">
        <div class="container">
            
            <h3 class="md black">Profile</h3>
            <div class="row">
                <div class="col-md-9">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount">
                                <img src="<?php echo e(Auth::user()->pic); ?>" alt="<?php echo e(Auth::user()->name); ?>">
                            </div>
                        </div>   
                        <div class="info-acount">
                            <h3 class="md black"><?php echo e(Auth::user()->name); ?></h3>
                            <p><?php echo e(Auth::user()->des); ?></p>
                            <div class="profile-email-address">
                                <div class="profile-email">
                                    <h5>Email</h5>
                                    <p><?php echo e(Auth::user()->email); ?></p>
                                </div>
                                <div class="profile-address">
                                    <h5>Password</h5>
                                    <p>************</p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-3">
                    <div class="social-connect">
                    <p>Start Your First Course Now</p>
                    <button type="button" class="btn btn-info">Request Course Now</button>
                    </div>
                </div>
            </div>    
            </div>    
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>