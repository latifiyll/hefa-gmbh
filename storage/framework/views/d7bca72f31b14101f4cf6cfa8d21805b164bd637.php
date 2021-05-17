<?php $__env->startSection('content'); ?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Online Offers</strong>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>

                                  <th>Full Name</th>
                                  <th>Type</th>
                                  <th>Time</th>
                                  <th>View</th>
                                  <?php if(Auth::check() && Auth::user()->role == "admin"): ?>
                                  <th>Delete</th>
                                  <?php endif; ?>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $__currentLoopData = $onlineoffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $onoffers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>

                                      <td><?php echo e($onoffers->client_fullname); ?></td>
                                      <td><?php echo e($onoffers->type->type_name); ?></td>
                                      <td><?php echo e($onoffers->created_at->format('F d, Y | H:i')); ?></td>
                                      <td>
                                          <a href="<?php echo e(url("onlineoffers/$onoffers->id_offer")); ?>">View</a>
                                      </td>
                                      <?php if(Auth::check() && Auth::user()->role == "admin"): ?>
                                      <td>
                                          <form action="<?php echo e(url("onlineoffers/$onoffers->id")); ?>" method="POST">
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