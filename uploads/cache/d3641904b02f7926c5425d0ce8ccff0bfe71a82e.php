<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php body_class() ?>>

    <div class="loading">
      <span class="pulse">
        <img src="<?= App\asset_path('images/large_gears.gif'); ?>">
      </span>
    </div>

    <div class="bg-white w-100 position-fixed" style="top:0;bottom:0;z-index: -1;"></div>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrap position-relative <?php if(App\is_hero()): ?> container-fluid p-0 <?php endif; ?>" role="document">
      <div class="content">
        <main class="main">
          <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php if(App\display_sidebar()): ?>
          <aside class="sidebar">
            <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </aside>
        <?php endif; ?>
      </div>
    </div>
    <?php do_action('get_footer') ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php wp_footer() ?>

  </body>
</html>