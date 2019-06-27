
<div class="container">
  <?php if( $pages_footer_text = get_field('pages_footer_text') ): ?>
    <div class="mb-5"><?php echo $pages_footer_text; ?></div>
  <?php endif; ?>
  <?php echo $__env->make('partials.common-ctas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php if( is_front_page() ): ?>
  <?php echo $__env->make('partials.clients', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<footer class="pt-4 pb-1 _border-top content-info d-flex flex-column align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    <?php dynamic_sidebar('sidebar-footer') ?>
    <div class="__w-25">
      <span class="brand d-block">
        <img src="<?= App\asset_path('images/TechnoworkLogo.png'); ?>" alt="TechnoWork Official Logo">
      </span>
    </div>
    <nav class="nav-footer">
      <?php if(has_nav_menu('primary_footer')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_footer', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
    <div class="__w-25">
      <?php if(has_nav_menu('primary_footer_secondary')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_footer_secondary', 'menu_class' => 'nav d-flex justify-content-center d-flex justify-content-sm-end']); ?>

      <?php endif; ?>
    </div>
  </div>
  <div class="copy text-center">
    © <?php echo e(date('Y')); ?> Technowork All Rights Reserved
  </div>
</footer>
