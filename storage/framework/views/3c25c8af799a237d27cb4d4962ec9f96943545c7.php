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
              <strong>Create</strong> Image
            </div>
            <div class="card-body card-block">
              <form class="form-horizontal" action="<?php echo e(url("images")); ?>"
                    method="POST" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>


                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Image</label>
                      <div class="controls">
                          <input type="file" class="form-control" name="image_name">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="prependedInput">Type</label>
                    <select name="id_type">
                      <option value="" selected disabled>Please choose a type</option>
                      <?php $__currentLoopData = \App\Type::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Text</label>
                      <div class="controls">
                          <input type="text" class="form-control" name="image_text">
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