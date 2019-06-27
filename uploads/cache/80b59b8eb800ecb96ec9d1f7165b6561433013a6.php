
<div class="container">

    <section class="my-5 text-center">
        <h2 class=""><?php echo e($services_header); ?></h2>
        <figure>
        <?php if( $services_image ): ?>
            <?php echo wp_get_attachment_image( $services_image, 'full', '', ['class' => 'border p-1 shadow w-100 h-auto'] ); ?>

        <?php endif; ?>
        </figure>
        <p class="mx-5 px-5"><?php echo e($services_intro); ?></p>
    </section>


    <?php if( $services ): ?>
    <?php $counter = 1; ?>

    <?php while( have_rows('services') ): ?> <?php the_row(); ?>
        <div id="<?php echo e(get_sub_field('anchor')); ?>" class="pt-1 pb-3 mb-5 row d-flex align-items-center">

            <div class="ml-auto col-4">
                <h2><?php echo e(get_sub_field('title')); ?></h2>
                <p><?php echo e(get_sub_field('text')); ?></p>
            </div>
            <div class="mr-auto col-4">
                <?php if( $_image = get_sub_field('image') ): ?>
                    <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'border p-1 shadow w-100 h-auto'] ); ?>

                <?php endif; ?>
            </div>

            <?php $counter++; ?>
        </div>
    <?php endwhile; ?>

    <?php else: ?>
        // no rows found
    <?php endif; ?>

</div>
