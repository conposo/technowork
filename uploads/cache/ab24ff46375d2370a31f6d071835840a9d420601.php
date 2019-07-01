
<?php if( $section ): ?>
    <div class="equipment-margin"></div>
    <?php while( have_rows('section') ): ?> <?php the_row(); ?>
        <div class="bg-white my-4 my-lg-5 py-lg-5 d-flex flex-column align-items-center">

            <div class="mb-3 mb-sm-5 col text-center">
                <?php if(get_sub_field('title')): ?>
                    <h2 class="font-weight-normal"><?php echo e(get_sub_field('title')); ?></h2>
                <?php endif; ?>
                <?php if(get_sub_field('text')): ?>
                    <p><?php echo e(get_sub_field('text')); ?></p>
                <?php endif; ?>
                <?php if( $_image = get_sub_field('image') ): ?>
                    <div>
                        <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ); ?>

                    </div>
                <?php endif; ?>
            </div>

            <?php if( have_rows('machines') ): ?>

                <?php while( have_rows('machines') ): ?> <?php the_row(); ?>
                <div class="pt-3 mb-5 row d-flex _align-items-center">

                    <?php if( $_image = get_sub_field('image') ): ?>
                        <figure class="mb-3 m-xs-0 col-sm-5">
                            <?php echo wp_get_attachment_image( $_image, 'full', '', ['class' => 'service-image rounded-lg shadow w-100 h-auto'] ); ?>

                        </figure>
                    <?php endif; ?>
                    <div class="col-sm-7">
                        <?php if(get_sub_field('title')): ?>
                            <h3 class="text-left"><?php echo e(get_sub_field('title')); ?></h3>
                        <?php endif; ?>
                        <?php if(get_sub_field('text')): ?>
                            <p><?php echo e(get_sub_field('text')); ?></p>
                        <?php endif; ?>
                        <?php if( $cta = get_sub_field('cta') ): ?>
                            <a class="mt-3 selected btn btn-sm btn-deco" href="<?php echo e(get_field('page_projects', 'option')); ?><?php echo e($cta['url']); ?>" <?php echo e($cta['target']); ?>><?php echo e($cta['title']); ?></a>
                        <?php endif; ?>
                    </div>
                    
                </div>
                <?php endwhile; ?>

            <?php else: ?>
                <!-- no rows found -->
            <?php endif; ?>

        </div>
    <?php endwhile; ?>

<?php else: ?>
    <!-- no rows found -->
<?php endif; ?>