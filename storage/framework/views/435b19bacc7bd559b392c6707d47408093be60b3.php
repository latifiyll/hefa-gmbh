<?php $__env->startSection('content'); ?>

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Slider Images</strong>
                            <a href="<?php echo e(url('headerimages/create')); ?>" style="float: right;">
                                + Add Image
                            </a>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped ">
                              <thead>
                              <tr>
                                  <th>Head text</th>
                                  <th>Small text</th>
                                  <th>Slider Image</th>
                                  <th>Active</th>
                                  <th>Edit</th>
                                  <?php if(Auth::check() && Auth::user()->role == "admin"): ?>
                                  <th>Delete</th>
                                  <?php endif; ?>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $__currentLoopData = $headerImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $headimg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>

                                      <td><?php echo e($headimg->head_text); ?></td>
                                      <td><?php echo e($headimg->small_text); ?></td>
                                      <td>
                                        <img src="<?php echo e(url("storage/headerImages/" . $headimg->header_img)); ?>" alt="" class="img-responsive" style="width: 75px;">
                                      </td>
                                      <td><?php echo e($headimg->active); ?></td>
                                      <td>
                                          <a href="<?php echo e(url("headerimages/$headimg->id_slider/edit")); ?>">Edit</a>
                                      </td>
                                      <?php if(Auth::check() && Auth::user()->role == "admin"): ?>
                                      <td>
                                          <form action="<?php echo e(url("headerimages/$headimg->id_slider")); ?>" method="POST">
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