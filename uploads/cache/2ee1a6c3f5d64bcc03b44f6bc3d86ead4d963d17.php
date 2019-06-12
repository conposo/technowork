
<?php echo e($intro); ?>


<?php if( have_rows('presentation') ): ?>
    <?php $counter = 1; ?>

  <?php while( have_rows('presentation') ): ?> <?php the_row(); ?>
    <div class="mb-5 row d-flex align-items-center <?php if($counter == 2): ?> flex-row-reverse <?php endif; ?>">

      <div class="col-6">
        <div>
          <?php if( $_image = get_sub_field('image') ): ?>
            <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

          <?php endif; ?>
        </div>
      </div>

      <div class="col-6 <?php if($counter == 2): ?> pl-5 <?php else: ?> pr-5 <?php endif; ?>">
        <div class="<?php if($counter == 2): ?> ml-5 text-right <?php else: ?> mr-5 <?php endif; ?>">
          <?php echo e(get_sub_field('text')); ?>

        </div>
      </div>

    </div>
    <?php $counter++; ?>
  <?php endwhile; ?>

<?php else: ?>
    // no rows found
<?php endif; ?>


<section class="row d-flex align-items-center">
  <div class="col-7 pl-5">
    <div class="pl-5">
      <h2><?php echo e($title); ?></h2>
      <p><?php echo e($text); ?></p>
    </div>
  </div>
  <div class="col-4 pr-5">
  <?php if( $image ): ?>
    <?php echo wp_get_attachment_image( $image, 'full', '', ['class' => 'd-block w-100 h-auto'] ); ?>

  <?php endif; ?>
  </div>
</section>