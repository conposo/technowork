<?php $__env->startSection('content'); ?>

  <div class="container">
  
    <?php while(have_posts()): ?> <?php the_post() ?>
      <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>

    <?php echo $__env->make('partials.component-clients-projects', ['post_type' => 'clients', 'post_term' => 'client_cat', 'shadow' => false], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>