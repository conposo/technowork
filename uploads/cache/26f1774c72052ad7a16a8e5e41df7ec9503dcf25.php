
<div class="<?php echo e(App\is_hero()); ?>">
  <?php echo $__env->make('partials.common-ctas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<footer class="content-info">
  <div class="container d-flex justify-content-between">
    <?php dynamic_sidebar('sidebar-footer') ?>
    <div>
      <?php echo e(get_bloginfo('name', 'display')); ?> © <?php echo e(date('Y')); ?>

    </div>
    <nav class="nav-footer">
      <?php if(has_nav_menu('primary_footer')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_footer', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</footer>
