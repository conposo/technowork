
<?php if( $services ): ?>
<?php $counter = 1; ?>

<div class="mb-5 row d-flex align-items-center">
<?php while( have_rows('services') ): ?> <?php the_row(); ?>

    <div class="col-4 px-5">
        <h2><?php echo e(get_sub_field('title')); ?></h2>
        <div>
        <?php if( $_image = get_sub_field('image') ): ?>
            <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

        <?php endif; ?>
        </div>
    </div>

    <?php $counter++; ?>
<?php endwhile; ?>
</div>

<?php else: ?>
    // no rows found
<?php endif; ?>
