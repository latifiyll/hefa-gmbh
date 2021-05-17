<?php $__env->startSection('content'); ?>


<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Types</strong>
                            <a href="<?php echo e(url('type/create')); ?>" style="float: right;">
                                + Add Type
                            </a>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered table-condensed">
                              <thead>
                              <tr>
                                  <!-- <th>Image</th> -->
                                  <th hidden>ID</th>
                                  <th>Name</th>
                                  <th>Category</th>
                                  <th>Image</th>
                                  <th>Type Text</th>
                                  <th>More Text</th>
                                  <th>Clicks</th>
                                  <th>Active</th>
                                  <th>View</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                        <td hidden></td>
                                          <td><?php echo e($type->type_name); ?></td>
                                          <td><?php echo e($type->id_category); ?></td>
                                          <td>
                                          <img src="<?php echo e(url("storage/images_name/".$type->image_name)); ?>" alt=""> </td>
                                          <td><?php echo e(substr($type->type_text,0,30)); ?></td>
                                          <td><?php echo e(substr($type->type_text2,0,30)); ?></td>
                                          <td><?php echo e($type->clicks); ?></td>
                                          <td><?php echo e($type->active); ?></td>
                                          <td> <a href="<?php echo e(url("type/$type->id_type")); ?>">View</a> </td>
                                          <td> <a href="<?php echo e(url("type/$type->id_type/edit")); ?>">Edit</a> </td>

                                          <td>
                                              <form action="<?php echo e(url("type/$type->id_type")); ?>" method="POST">
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