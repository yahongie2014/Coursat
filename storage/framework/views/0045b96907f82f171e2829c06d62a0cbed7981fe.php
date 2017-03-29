<?php $__env->startSection('title'); ?>
<?php echo e(Auth::user()->name); ?> - Sms
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="message-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="message-sb">
                            <div class="message-sb-title">
                                <h4>Inbox</h4>
                                <a href="#" class="new-message"><i class="icon md-plus"></i>New message</a>
                            </div>
                            <ul class="list-message">
                            <?php foreach($mg as $mgs): ?>
                                <li class="ac-new">
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span><?php echo e($mgs->Title); ?></span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p><?php echo e($mgs->mssg); ?></p>
                                            <div class="time">
                                                <span><?php echo date("d M Y", strtotime( $mgs->created_at )); ?></br><?php echo date("g:iA", strtotime($mgs->created_at)); ?></span>
                                            </div>
                                            <div class="indicator">
                                                <i class="icon md-paperclip"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                             </ul>
                        </div>
                    </div>
      <div class="col-md-9">
      <form method="post" action="<?php echo e(url('/profile/sms.html')); ?>" id="sky-form" class="sky-form" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<input type="hidden" name="user_name" value="<?php echo e(Auth::user()->name); ?>">
              <section>
                <label class="label" name="phone">Phone</label>
                <label class="input" name="phone"> <i class="icon-append fa fa-phone"></i>
                <input type="text" name="phone" id="phone">
                </label>
              </section>
              <section>
                <label class="label" name="Title">Title</label>
                <label class="input" name="Title"> <i class="icon-append fa fa-tag"></i>
                <input type="text" name="Title" id="Title">
                </label>
              </section>
              <section>
                <label class="label" name="mssg">Message</label>
                <label class="textarea" name="mssg"> <i class="icon-append fa fa-comment"></i>
                <textarea type="text" rows="4" value="mssg" name="mssg" id="mssg"></textarea>
                </label>
              </section>
            <footer>
              <button type="submit" class="button">Send message</button>
            </footer>
            </form>

                </div>
            </div>
        </div>
    </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>