<?php $__env->startSection('content'); ?>
<div class="content mt-3">
      <div class="animated fadeIn">
              <div class="row">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger"><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header">
              <strong>Create</strong> Slider Image
            </div>
            <div class="card-body card-block">
              <form class="form-horizontal" action="<?php echo e(url("headerimages")); ?>"
                    method="POST" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Head Text</label>
                      <div class="controls">
                          <input class="form-control" size="16" type="text" name="head_text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Small Text</label>
                      <div class="controls">
                          <input class="form-control" size="16" type="text" name="small_text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Slider Image</label>
                      <div class="controls">
                          <input type="file" class="form-control" name="header_img">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="prependedInput">Active</label>

                      <input type="checkbox" name="active" value="1">

                  </div>
                  <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>