<?php /* Template Name: Magazine Page*/ get_header('singlepage');?>
<body>
  <div class="magazine-padding">
    <h2 class="organic-magazie-text text-center">The Latest Information In Organic Farming</h2>
    <div class="container">
      <div class="row">
      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-lg-3">

          <?php the_content();?>
        </div>
      <?php endwhile; else:?>
        <p>Sorry, no post matched your criteria.</p>
      <?php endif; ?>
      <div class="col-lg-8">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vegetablestacked.png" alt="" class="img-fluid">
      </div>
      </div>
    </div>
  </div>
</body>
<?php get_footer(); ?>
