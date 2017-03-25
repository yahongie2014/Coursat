<?php $__env->startSection('title'); ?>
Login to your Account
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="clearfix"></div>
  <div class="page-header four">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Loing</h3>
        <h4>User Login Here...!</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="<?php echo e(URL('/')); ?>">Home</a> <i>/</i> Login</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
  <div class="clearfix"></div>
  <div class="section-lg counters m-bottom4">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 sec-heading text-center">
          <div class="row">
            <div class="login_form">
              <form class="sky-form" id="sky-form" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>


                <header class="font-slim">Login form</header>
                <fieldset>
                  <div class="section">
                    <div class="row">
                      <label class="label col col-4<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">E-mail</label>
                      <div class="col col-8">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="email" name="email">
                          <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                          <?php endif; ?>

                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="section">
                    <div class="row">
                      <label class="label col col-4<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">Password</label>
                      <div class="col col-8">
                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                          <input type="password" name="password">
                         <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                         <?php endif; ?>

                        </label>
                        <div class="note"><a class="modal-opener" href="<?php echo e(URL('/password/reset')); ?>">Forgot password?</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="section">
                    <div class="row">
                      <div class="col col-4"></div>
                      <div class="col col-8">
                        <label class="checkbox">
                          <input type="checkbox" checked="" name="remember">
                          <i></i>Keep me logged in</label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <footer>
                  <div class="fright"> <a class="button button-secondary" href="<?php echo e(URL('/register')); ?>">Register</a>
                    <button class="button" type="submit">Log in</button>
                  </div>
                </footer>
              </form>
            </div>
            <form class="sky-form sky-form-modal" id="sky-form2" action="<?php echo e(URL('/password/reset')); ?>" novalidate>
              <header>Password recovery</header>
              <fieldset>
                <div class="section">
                  <label class="label">E-mail</label>
                  <label class="input"> <i class="icon-append icon-user"></i>
                    <input type="email" id="email" name="email">
                  </label>
                </div>
              </fieldset>
              <footer>
                <button class="button" name="submit" type="submit">Submit</button>
                <a class="button button-secondary modal-closer" href="#">Close</a> </footer>
              <div class="message"> <i class="icon-ok"></i>
                <p>Your request successfully sent!<br>
                  <a class="modal-closer" href="#">Close window</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>