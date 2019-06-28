<header class="border-0 <?php if( ! App\is_hero() ): ?> mb-5 <?php endif; ?> py-4 border-bottom banner">
  <div class="container d-flex _flex-column _flex-sm-row justify-content-between align-items-center">
    <a class="brand" href="<?php echo e(home_url('/')); ?>">
      <img src="<?= App\asset_path('images/TechnoworkLogoSolid.png'); ?>" alt="TechnoWork Official Logo">
    </a>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>

<div class="after-header-deco"></div>
