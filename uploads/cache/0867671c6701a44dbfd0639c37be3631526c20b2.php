
<?php if( !is_front_page() ): ?>
  <div class="page-header">
    <h1><?php echo App::title(); ?></h1>
  </div>
<?php endif; ?>

<?php echo $__env->make('partials.common-hero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
