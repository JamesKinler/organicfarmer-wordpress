<?php /* Template Name: Advertise Page*/ get_header('singlepage');?>
<body>
  <div class="advertising_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h1>Interested In Advertising?</h1>
          <p>USDA does not have official statistics on U.S. organic retail sales, but information is available from industry sources. U.S. sales of organic products were an estimated $28.4 billion in 2012—over 4 percent of total food sales—and will reach an estimated $35 billion in 2014, according to the Nutrition Business Journal.</p><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fruitsandvegetableschart.png" alt="U.S. organic food sales chart."/>
          <p>Numerous studies have been conducted on the buying habits and demographics of consumers of organic foods. Results have varied depending on the type of survey, sample size, and geographic coverage. However, a few general themes have emerged.</p>
          <p>Consumers prefer organically produced food because of their concerns regarding health, the environment, and animal welfare, and they show a willingness to pay the price premiums established in the marketplace.</p>
          <p>Organic products have shifted from being a lifestyle choice for a small share of consumers to being consumed at least occasionally by a majority of Americans. National surveys conducted by the Hartman Group and Food Marketing Institute during the early 2000s found that two-thirds of surveyed shoppers bought organically grown foods. </p>
          <p>Source and Info Credit USDA Economic Research Service www.ers.usda.gov</p>
          <!-- modal button-->
          <button class="modal-btn" type="button" data-toggle="modal" data-target="#exampleModal">Request A Media Kit</button>
          <!--modal-->
          <div class="modal fade" aria-hidden="true" id="exampleModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">Request A Media Kit</h1>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <?php echo do_shortcode('[gravityform id=2]');?>
                  <!-- <img class="img-fluid" src="img/background.jpg" alt=""/> -->
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/justsomefruit.png" alt="some peaches berries and nuts placed together"/>
        </div>
      </div>
    </div>
  </div>
</body>
<?php get_footer(); ?>
