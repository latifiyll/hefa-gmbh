<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    plugins: 'link',
    menubar: false
  });
</script>
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
              <strong>Create</strong> Product
            </div>
            <div class="card-body card-block">
              <form class="form-horizontal" action="<?php echo e(url("type")); ?>"
                    method="POST" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Name</label>
                      <div class="controls">
                          <input class="form-control" size="16" type="text" name="type_name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Category</label>
                      <select name="id_category">
                        <option value="" selected disabled>Please choose a category</option>
                        <?php $__currentLoopData = \App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id_category); ?>"><?php echo e($category->cat_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Image</label>
                      <div class="controls">
                          <input class="form-control" size="16" type="file" name="image_name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Text</label>
                      <div class="controls">
                          <textarea class="form-control" size="16" type="text" name="type_text"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">More Text</label>
                      <div class="controls">
                          <textarea class="form-control" size="16" type="text" name="type_text2"></textarea>
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