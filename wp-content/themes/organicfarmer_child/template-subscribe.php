<?php /* Template Name: Subscribe Page*/get_header('singlepage');?>

<div class="container subscribe">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <?php echo do_shortcode('[gravityform id=4]');?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
