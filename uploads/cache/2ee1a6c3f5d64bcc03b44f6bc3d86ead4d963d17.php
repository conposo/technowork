
<div class="pt-3 pt-lg-5 container">

  <?php if( have_rows('presentation') ): ?>
      <?php $counter = 1; ?>

    <?php while( have_rows('presentation') ): ?> <?php the_row(); ?>
      <div class="my-3 my-lg-5 py-3 py-lg-5 row d-flex _align-items-center <?php if($counter == 2): ?> flex-row-reverse <?php endif; ?>">

        <div class="col-lg-5 col-xl-4 mb-3 mb-sm-5 mb-lg-0">
          <div>
            <?php if( $_image = get_sub_field('image') ): ?>
              <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'shadow rounded-lg w-100 h-auto'] ); ?>

            <?php endif; ?>
          </div>
        </div>

        <div class="col-lg-7 <?php if($counter == 2): ?> mr-auto pr-sm-5 <?php else: ?> ml-auto <?php endif; ?>">
          <div class="<?php if($counter == 2): ?> <?php else: ?> mr-sm-5 <?php endif; ?>">
            <?php echo get_sub_field('text'); ?>

          </div>
        </div>

      </div>
      <?php $counter++; ?>
    <?php endwhile; ?>

  <?php else: ?>
      // no rows found
  <?php endif; ?>


  <section class="certificate my-5 py-5 row d-flex align-items-center">
    <div class="col-sm-7 _pl-5">
      <div class="<?php if(wp_is_mobile()): ?> text-center <?php else: ?> pr-5 <?php endif; ?>">
        <h2 class="<?php if(!wp_is_mobile()): ?> text-left <?php endif; ?>"><?php echo e($title); ?></h2>
        <p><?php echo e($text); ?></p>
      </div>
    </div>
    <div class="col-8 mx-auto col-sm-5 _pr-5">
    <?php if( $image ): ?>
      <?php echo wp_get_attachment_image( $image, 'full', '', ['class' => 'shadow w-100 h-auto'] ); ?>

    <?php endif; ?>
    </div>
  </section>

</div>
