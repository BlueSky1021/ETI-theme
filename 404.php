<?php 
/*
Template name: 404 Page
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
        <style>
          footer{display: none; }
        </style>
        <!-- Banner Section --> 
        <section class="banner-section view vh100 secondary-light-bg-color background-reset position-relative">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 grid-centered">
                  <div class="banner-caption text-center secondary-font-color">
                    <h2 class="proximanova-bold secondary-font-color px-24-font">Sorry, this page does not exist. </h2>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/404/404-img.png" alt="" class="img-responsive center-block">
                    <h2 class="proximanova-bold secondary-font-color px-24-font">We couldn’t find what you’re looking for. Go to our <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="primary-font-color" style="color:#006837 !important;">home page</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner Section --> 
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>