<?php $__env->startSection('title'); ?>
Successfuly Sent
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="profile">
        <div class="container">
            
            <h3 class="md black">Successfuly</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="avatar-acount">
                        <div class="changes-avatar">
                            <div class="img-acount">
                                <img src="<?php echo e(Auth::user()->pic); ?>" alt="<?php echo e(Auth::user()->name); ?>">
                            </div>
                        </div>   
                        <div class="info-acount">
                            <h3 class="md black">Massage Sent by :<?php echo e(Auth::user()->name); ?></h3>
                            <p>Thank you For using Our Service 😍😍</p>
                            </div>
                        </div>
                    </div>    
                </div>
           </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>