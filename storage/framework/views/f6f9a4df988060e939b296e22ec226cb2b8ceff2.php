<?php $__env->startSection('title'); ?>
Sms 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="clearfix"></div>
  <div class="page-header">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Succcessfuly</h3>
        <h4>Sent SMS</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="<?php echo e(URL('/')); ?>">Home</a> <i>/</i>Sms</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>