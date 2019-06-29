
<div class="container">

    <section class="my-3 my-sm-5 py-3 my-sm-5 text-center">
        <figure class="mb-5">
        <?php if( $services_image ): ?>
            <?php echo wp_get_attachment_image( $services_image, 'full', '', ['class' => 'rounded-lg shadow w-100 h-auto'] ); ?>

        <?php endif; ?>
        </figure>
        <?php if( $services_header ): ?>
        <h2 class=""><?php echo e($services_header); ?></h2>
        <?php endif; ?>
        <?php if( $services_intro ): ?>
        <p class="mx-5 px-5"><?php echo e($services_intro); ?></p>
        <?php endif; ?>
    </section>


    <?php if( $services ): ?>
    <?php $counter = 1; ?>

    <?php while( have_rows('services') ): ?> <?php the_row(); ?>
        <div id="<?php echo e(get_sub_field('anchor')); ?>" class="pt-1 pb-3 mb-5 row d-flex flex-column-reverse flex-sm-row _align-items-center">

            <div class="mr-auto col-sm-5">
                <?php if( $_image = get_sub_field('image') ): ?>
                    <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'rounded-lg shadow w-100 h-auto'] ); ?>

                <?php endif; ?>
            </div>
            <div class="ml-auto col-sm-7">
                <h2 class="text-left"><?php echo e(get_sub_field('title')); ?></h2>
                <p><?php echo e(get_sub_field('text')); ?></p>
            </div>

            <?php $counter++; ?>
        </div>
    <?php endwhile; ?>

    <?php else: ?>
        // no rows found
    <?php endif; ?>

</div>
