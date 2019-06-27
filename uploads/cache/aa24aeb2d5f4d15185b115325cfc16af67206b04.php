<?php $__env->startSection('content'); ?>

  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="m-5 px-5"><?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
  <?php endwhile; ?>

  <div class="container">
    <?php echo $__env->make('partials.component-clients-projects', ['post_type' => 'projects', 'post_term' => 'project_cat'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>