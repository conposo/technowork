
<?php if( $services ): ?>

    <?php $counter = 1; ?>

    <div id="services" class="mt-5">

        <div class="mb-5 text-center">
            <h2 class=""><?php echo e($services_title); ?></h2>
            <p><?php echo e($services_short_description); ?></p>
        </div>

        <div class="d-none row d-sm-flex align-items-center">
        <?php while( have_rows('services') ): ?> <?php the_row(); ?>
            <div class="col-4 text-center">
                <h3><?php echo get_sub_field('title'); ?></h3>
            </div>
        <?php endwhile; ?>
        </div>
    </div>

    <div class="mb-5 row d-flex">
    <?php while( have_rows('services') ): ?> <?php the_row(); ?>

        <div class="mb-5 col-12 col-sm-4 text-center">
            <?php if( $cta = get_sub_field('cta') ): ?>
            <a href="<?php echo e(get_field('page_services', 'option')); ?>/#<?php echo e($cta); ?>">
                <h3 class="d-sm-none"><?php echo get_sub_field('title'); ?></h3>
                <div class="mb-3 rounded rounded-lg shadow">
                    <?php if( $_image = get_sub_field('image') ): ?>
                        <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

                    <?php endif; ?>
                </div>
                <div class="position-relative">
                        <a class="btn-deco" href="<?php echo e(get_field('page_services', 'option')); ?>/#<?php echo e($cta); ?>"><?php echo e(__('Виж повече', 'thnw')); ?></a>
                </div>
            </a>
            <?php endif; ?>
        </div>

        <?php $counter++; ?>
    <?php endwhile; ?>
    </div>

<?php else: ?>
    <!-- no rows found -->
<?php endif; ?>
