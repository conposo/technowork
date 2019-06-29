
<div class="position-relative hero slide">

  <figure class="mb-0">
    <?php if( $hero_image = get_field('hero_image', 'option') ): ?>
      <?php echo wp_get_attachment_image( $hero_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

    <?php endif; ?>
  </figure>

  <div class="pl-0 container">
    <h1>
      <?php echo get_field('hero_heading', 'option'); ?>

      <?php if( is_front_page() ): ?>
        <a href="<?php echo e(get_field('page_services', 'option')); ?>" class="btn-deco mt-5"><?php echo e(__('Виж повече', 'thnw')); ?></a>
      <?php endif; ?>
    </h1>
  </div>

  <?php if( is_front_page() ): ?>
    <a href="#services" class="scroll-down next-slide"><span class="bounce"></span></a>
  <?php endif; ?>

</div>
