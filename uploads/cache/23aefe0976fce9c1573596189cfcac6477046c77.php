
<?php if( in_array(get_the_ID(), get_field('ctas_pages', 'option')) ): ?>
  <div>
    <?php if( have_rows('section', 'option') ): ?>
      <?php $counter = 1; ?>

      <div class="border pt-3 mb-5 row d-flex align-items-center">
        <?php while( have_rows('section', 'option') ): ?> <?php the_row(); ?>

          <div class="col-6">
            <h2><?php echo e(get_sub_field('title')); ?></h2>
            <p>
              <?php echo e(get_sub_field('text')); ?>

              <?php if( $cta = get_sub_field('cta') ): ?>
              <a class="d-block" href="<?php echo e($cta); ?>"><?php echo e(__('See more', 'thnw')); ?></a>
              <?php endif; ?>
            </p>
          </div>

          <?php $counter++; ?>
        <?php endwhile; ?>
      </div>

    <?php else: ?>
      // no rows found
    <?php endif; ?>
  </div>
<?php endif; ?>
