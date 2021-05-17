<?php $__env->startSection('content'); ?>

<div class="col-md-12">
  <div class="col-md-12"><?php echo $chart->html(); ?></div>

</div>

<div class="col-md-12">

  <div class="col-md-4"><?php echo $visitsDchart->html(); ?></div>
  <div class="col-md-4"><?php echo $visitsMchart->html(); ?></div>
  <div class="col-md-4"><?php echo $visitsYchart->html(); ?></div>
</div>





 <?php echo Charts::scripts(); ?>


 <?php echo $chart->script(); ?>


<?php echo $visitsDchart->script(); ?>

<?php echo $visitsMchart->script(); ?>

<?php echo $visitsYchart->script(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>