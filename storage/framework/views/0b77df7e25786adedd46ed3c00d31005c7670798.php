<?php $__env->startSection('title'); ?>
<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="<?php echo e(Auth::user()->pic); ?>" alt="<?php echo e(Auth::user()->name); ?>">
                </div>    
                <div class="name-author">
                    <h2 class="big"><?php echo e(Auth::user()->name); ?></h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3><?php echo e(Auth::user()->Address); ?></h3>
                </div>
            </div>
            <div class="info-follow">
                <div class="trophies">
                    <span>User</span>
                    <p>Coursat</p>
                </div>
                <div class="trophies">
                    <span><?php echo e(Auth::user()->id); ?></span>
                    <p>Id Number</p>
                </div>
                <div class="trophies">
                <?php
                        if (Auth::user()->teacher == 0 && Auth::user()->admin == 0) {
                            echo "<span class='badge bg-red'>Student</span>";
                        } elseif (Auth::user()->teacher == 1 && Auth::user()->admin == 0) {
                            echo "<span class='badge bg-yellow'>Teacher</span>";
                        } else {
                            echo "<span class='badge bg-light-blue'>Admin</span>";
                        }
                        ?>
                <p>Role Member</p>
                </div>

        </div>
    </section>
    <!-- END / PROFILE FEATURE -->


    <!-- CONTEN BAR -->
    <section class="content-bar">
        <div class="container">
            <ul>
            <?php if(Auth::user()->teacher == 1): ?>
                <li>
                    <a href="account-teaching.html">
                        <i class="icon md-people"></i>
                        Publich Aticle
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="account-assignment.html">
                        <i class="icon md-shopping"></i>
                        Assignment
                    </a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(url('/profile.html', Auth::user()->id)); ?>">
                        <i class="icon md-user-minus"></i>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- PROFILE -->
    
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
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
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
                    </div>
                </div>
            </div>    
            </div>    
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>