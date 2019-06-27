
<?php if( $section ): ?>

    <?php while( have_rows('section') ): ?> <?php the_row(); ?>
        <div class="my-5 py-5 row d-flex align-items-center">

            <div class="mb-5 col text-center">
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
                <div class="border shadow pt-3 mb-5 row d-flex align-items-center">

                    <div class="col-7">
                        <h2><?php echo e(get_sub_field('title')); ?></h2>
                        <p>
                            <?php echo e(get_sub_field('text')); ?>

                            <?php if( $cta = get_sub_field('cta') ): ?>
                                <br>
                                <a class="mt-3 btn btn-sm btn-outline-info" href="<?php echo e(get_field('page_projects', 'option')); ?><?php echo e($cta['url']); ?>" <?php echo e($cta['target']); ?>><?php echo e($cta['title']); ?></a>
                            <?php endif; ?>
                        </p>
                    </div>
                    <figure class="col-5">
                        <?php if( $_image = get_sub_field('image') ): ?>
                        <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'border p-1 w-100 h-auto'] ); ?>

                        <?php endif; ?>
                    </figure>
                    
                </div>
                <?php endwhile; ?>

            <?php else: ?>
                // no rows found
            <?php endif; ?>

        </div>
    <?php endwhile; ?>

<?php else: ?>
    <!-- no rows found -->
<?php endif; ?>