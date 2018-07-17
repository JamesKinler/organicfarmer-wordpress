<?php /* Template Name: Home Page*/ get_header();?>
<body>
  <div class="magazine_call-to-action text-center">
    <p>Click To Read The Current Issue
      <span>of Organic Farming</span>
      <a href="/magazine/">Click Here</a>
    </p>
  </div>
  <div class="about-organic_fruit">
    <div class="about-organic-info-container">
      <h1 class="about-organic_farmer">Welcome to the Organic Farmer website </h1>
      <p class="about-organic_paragraph">Looking for better ways to farm your commodity? Organic Farmer has timely articles to help you. Our goal is to provide you with must-read editorial each issue that will help you farm more effectively. Topics will include Farm Management best practices, Laws and Regulations, New Technologies and as well as other critical topics tailored to organic farming. Organic Farmer is powered by JCS Marketing, Home of West Coast Nut Magazine, Progressive Crop Consultant Magazine and 6 state-wide Live Events throughout California. Our publications have a reputation of being a highly regarded resource for Agriculture by farmers, crop consultants, researchers/ advisors and other allied professionals.  </p><a class="about-organic_btn" href="#">subscribe</a>
    </div>
  </div>
  <div class="what-organic-brings container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-12"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/organicfarmermagcover.png" alt="organic farmer magazine cover"/></div>
      <div class="col-lg-7 col-md-12">
        <h1>What Organic Farmer Brings To The Table</h1>
        <p>Fresh fruits and vegetables have been the top selling category of organically grown food since the organic food industry started retailing products over 3 decades ago, and they are still outselling other food categories, according to the Nutrition Business Journal. Produce accounted for 43 percent of U.S. organic food sales in 2012, followed by dairy (15 percent), packaged/prepared foods (11 percent), beverages (11 percent), bread/grains (9 percent), snack foods (5 percent), meat/fish/poultry (3 percent), and condiments (3 percent).</p>
        <p>Most organic sales (93 percent) take place through conventional and natural food supermarkets and chains, according to the Organic Trade Association (OTA). OTA estimates the remaining 7 percent of U.S. organic food sales occur through farmers' markets, foodservice, and marketing channels other than retail stores. One of the most striking differences between conventional and organic food marketing is the use of direct markets—Cornell University estimates that only about 1.6 percent of U.S. fresh produce sales are through direct sales. The number of farmers' markets in the United States has grown steadily from 1,755 markets in 1994, when USDA began to track them, to over 8,144 in 2013. Participating farmers are responding to heightened demand for locally grown organic product.</p>
        <p class="sources">Source and Info Credit USDA Economic Research Service www.ers.usda.gov</p>
        <a class="what-organic_advertise" href="/advertise/">Read More</a>
      </div>
    </div>
  </div>
  <div class="post">

    <div class="container">
      <h3 class="post_header">Latest News</h3>
      <p class="post_subheader">If you are interested in the latest articles in the industry, take a sneak peek at our blog. You have nothing to loose!</p>
      <div class="row">

        <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post_status' => 'publish',
          'order' => 'DESC',
          'orderby' => 'date',
        ];
        ?>
        <?php
        $post_query = new WP_Query($args);
        if($post_query->have_posts()) : while($post_query->have_posts()) : $post_query->the_post();
        ?>
        <div class="col-lg-4">
          <div class="card">
            <?php the_post_thumbnail('full', ['class' => 'card-img-top img-fluid']);?>
            <div class="card-body">
              <?php the_title('<h3 class="card-title">','</h3>')?>
              <?php echo '<p class="card-text">' . wp_trim_words(get_the_content(), 15, '...') . '</p>'; ?>
              <a class="post_read_more" href="<?php the_permalink();?>">Read More</a>
            </div>
          </div>
        </div>
        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <div class="text-center">
        <a href="#" class="post_view_all">View More News</a>
      </div>

    </div>
  </div>
  <div class="container tradeshows">
    <div class="row">
      <div class="col-lg-6 tradeshow-info-container">
        <h1>Trade Shows</h1>
        <p>From Northern California to Southern California and all throughout the year, these trade shows are a reliable resource to gain industry knowledge and build relationships. Not only do they provide education, but these trade shows offer an opportunity to connect with your desired audience and network to develop meaningful relationships that benefit your business.</p><a href="http://wcngg.com/events">Click To Register  </a>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tradeshowlogos.png" alt="all of our trade show logos. Mid Valley Nut Conference Logo, South Valley Nut Conference Logo, Walnut Trade Show Logo, Kern County Ag Day, North Valley Nut Conference, Central Valley Almond Day"/></div>
    </div>
  </div>
</body>
<?php get_footer(); ?>
