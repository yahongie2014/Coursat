<?php $__env->startSection('title'); ?>
Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="clearfix"></div>
  <div class="page-header">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Welcome</h3>
        <h4>Admin</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="<?php echo e(URL('/')); ?>">Home</a> <i>/</i>Admin</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>