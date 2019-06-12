
<?php if( $section ): ?>
    <?php $counter = 1; ?>

    <?php while( have_rows('section') ): ?> <?php the_row(); ?>
        <div class="row d-flex align-items-center">

        <div class="col">
            <h2><?php echo e(get_sub_field('title')); ?></h2>
            <p><?php echo e(get_sub_field('text')); ?></p>
            <div>
            <?php if( $_image = get_sub_field('image') ): ?>
                <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

            <?php endif; ?>
            </div>
        </div>

        <?php if( have_rows('machines') ): ?>

            <?php while( have_rows('machines') ): ?> <?php the_row(); ?>
            <div class="border pt-3 mb-5 row d-flex align-items-center">

                <div class="col">
                <figure>
                    <?php if( $_image = get_sub_field('image') ): ?>
                    <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-25 h-auto'] ); ?>

                    <?php endif; ?>
                </figure>
                <h2><?php echo e(get_sub_field('title')); ?></h2>
                <p>
                    <?php echo e(get_sub_field('text')); ?>

                    <?php if( $cta = get_sub_field('cta') ): ?>
                    <a class="d-block" href="<?php echo e(get_site_url()); ?>/проекти/<?php echo e($cta['url']); ?>" <?php echo e($cta['target']); ?>><?php echo e($cta['title']); ?></a>
                    <?php endif; ?>
                </p>
                </div>

                <?php $counter++; ?>
            </div>
            <?php endwhile; ?>

        <?php else: ?>
            // no rows found
        <?php endif; ?>

        <?php $counter++; ?>
        </div>
    <?php endwhile; ?>

<?php else: ?>
    <!-- no rows found -->
<?php endif; ?>