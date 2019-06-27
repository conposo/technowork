
<?php if( in_array(get_the_ID(), get_field('ctas_pages', 'option')) ): ?>

  <div class="mb-5 pt-5">

    <?php if( have_rows('section', 'option') ): ?>

      <?php $counter = 1; ?>

      <?php while( have_rows('section', 'option') ): ?> <?php the_row(); ?>

        <div class="row d-flex">
          <div class="col-6 <?php if($counter == 2): ?> ml-auto text-right <?php else: ?>  <?php endif; ?>">
            <h2 class="<?php if($counter == 2): ?> text-right <?php else: ?> text-left <?php endif; ?>"><?php echo e(get_sub_field('title')); ?></h2>
            <p>
              <?php echo e(get_sub_field('text')); ?>

              <?php if( $cta = get_sub_field('cta') ): ?>
              <br>
              <a class="mt-3 btn-deco btn-sm" href="<?php echo e($cta); ?>"><?php echo e(__('Виж повече', 'thnw')); ?></a>
              <?php endif; ?>
            </p>
          </div>
        </div>

        <?php $counter++; ?>

      <?php endwhile; ?>

    <?php else: ?>
      // no rows found
    <?php endif; ?>

  </div>

<?php endif; ?>
