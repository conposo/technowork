<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>

  <div class="mb-5 row">
    
    <div class="col-4">
      <h5 class="card-title"><?php echo e($title_phone); ?></h5>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h3><?php echo e($contact_person); ?></h3>
          <p class="card-text">
            <a href="<?php echo e($gps_coords->gps_coords_cta); ?>"><?php echo e($phone); ?></a>
          </p>
        </div>
      </div>
      <p><?php echo e($description_phone); ?></p>
    </div>

    <div class="col-4">
      <h5 class="card-title"><?php echo e($title_email); ?></h5>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">
            <a href="<?php echo e($gps_coords->gps_coords_cta); ?>"><?php echo e($email); ?></a>
          </p>
        </div>
      </div>
      <p><?php echo e($description_email); ?></p>
    </div>
    
    <div class="col-4">
      <h5 class="card-title"><?php echo e($title_place); ?></h5>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">
            <?php echo e($label_address); ?>

          </p>
          <?php $gps_coords = $gps_coords; ?>
          <?php if( $gps_coords ): ?>
            <div>
              <h3><?php echo e($gps_coords->label_gps_coords); ?></h3>
              <span class="d-block"><?php echo e($gps_coords->gps_coords_long); ?>, <?php echo e($gps_coords->gps_coords_lat); ?></span>
              <a href="<?php echo e($gps_coords->gps_coords_cta); ?>">виж в Google Maps ></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <p><?php echo e($description_place); ?></p>
    </div>
    
  </div>

  
  <div>
  <?php echo e($text_see_more); ?>

  <a href="<?php echo e($cta_see_more->url); ?>" <?php echo e($cta_see_more->target); ?>><?php echo e($cta_see_more->title); ?></a>
  <?php
    // dd();
  ?>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>