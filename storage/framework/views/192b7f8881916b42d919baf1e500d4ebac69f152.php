<?php $__env->startSection('content'); ?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Images</strong>
                            <a href="<?php echo e(url('images/create')); ?>" style="float: right;">
                                + Add Image
                            </a>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                              <thead>
                              <tr>
                                <th hidden></th>
                                  <th>Image</th>
                                  <th>Type</th>
                                  <th>Text</th>
                                  <th>Active</th>
                                  <th>Edit</th>
                                  <?php if(Auth::check() && Auth::user()->role == "admin"): ?>
                                  <th>Delete</th>
                                  <?php endif; ?>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                      <td hidden></td>
                                      <td>
                                        <img src="<?php echo e(url("storage/images_name/" . $image->image_name)); ?>" alt="" class="img-responsive" style="width: 75px;">
                                      </td>
                                      <td><?php echo e($image->type->name); ?></td>
                                      <td><?php echo e($image->image_text); ?></td>
                                      <td><?php echo e($image->active); ?></td>
                                      <td> <a href="<?php echo e(url("images/$image->id_image/edit")); ?>">Edit</a> </td>

                                      <?php if(Auth::check() && Auth::user()->role == "admin"): ?>
                                      <td>
                                          <form action="<?php echo e(url("images/$image->id")); ?>" method="POST">
                                              <?php echo e(csrf_field()); ?>

                                              <?php echo e(method_field('DELETE')); ?>

                                              <input type="submit" value="DELETE" class="btn btn-danger">
                                          </form>
                                      </td>
                                      <?php endif; ?>
                                  </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>