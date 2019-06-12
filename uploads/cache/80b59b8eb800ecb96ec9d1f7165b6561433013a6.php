
<section>
    <h2 class="_position-absolute"><?php echo e($services_header); ?></h2>
    <figure>
    <?php if( $services_image ): ?>
        <?php echo wp_get_attachment_image( $services_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

    <?php endif; ?>
    </figure>
    <p><?php echo e($services_intro); ?></p>
</section>


<?php if( $services ): ?>
<?php $counter = 1; ?>

<?php while( have_rows('services') ): ?> <?php the_row(); ?>
    <div class="bg-info pt-1 pb-3 mb-5 row d-flex align-items-center">

    <div class="col">
        <h2><?php echo e(get_sub_field('title')); ?></h2>
        <p><?php echo e(get_sub_field('text')); ?></p>
        <div>
        <?php if( $_image = get_sub_field('image') ): ?>
            <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

        <?php endif; ?>
        </div>
    </div>

    <?php $counter++; ?>
    </div>
<?php endwhile; ?>

<?php else: ?>
    // no rows found
<?php endif; ?>
