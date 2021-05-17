<?php $__env->startSection('content'); ?>

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Categories</strong>
                            <a href="<?php echo e(url('category/create')); ?>" style="float: right;">
                                + Add Category
                            </a>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <!-- <th>Image</th> -->
                                  <th>Name</th>
                                  <th>Short Name</th>
                                  <th>Details</th>
                                  <th>View</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td><?php echo e($category->cat_name); ?></td>
                                          <td><?php echo e($category->short_name); ?></td>
                                          <td><?php echo e(substr($category->details,0,30)); ?></td>
                                          <td><a href="<?php echo e(url("category/$category->id_category")); ?>">View</a> </td>
                                          <td>
                                              <form action="<?php echo e(url("category/$category->id_category")); ?>" method="POST">
                                                  <?php echo e(method_field("DELETE")); ?>

                                                  <?php echo e(csrf_field()); ?>

                                                  <input type="submit" value="DELETE" class="btn btn-danger">
                                              </form>
                                          </td>
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