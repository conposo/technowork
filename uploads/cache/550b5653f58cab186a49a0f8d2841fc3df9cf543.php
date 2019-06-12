
<?php if( in_array(get_the_ID(), get_field('hero_pages', 'option')) ): ?>
<div>
  <figure>
    <?php if( $hero_image = get_field('hero_image', 'option') ): ?>
      <?php echo wp_get_attachment_image( $hero_image, 'full', '', ['class' => 'w-50 h-auto'] ); ?>

    <?php endif; ?>
  </figure>
  <?php echo get_field('hero_heading', 'option'); ?>

</div>
<?php endif; ?>
