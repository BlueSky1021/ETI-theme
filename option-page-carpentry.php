<?php 
/*
Template name: Carpentry Option Page
*/
 ?>
<?php include('includes/header.php'); ?>
        <style>
        .navbar-brand{padding: 5px 15px;}
        .navbar-default .navbar-collapse .text-uppercase{margin: 0 !important;}
        .option-wrapper{background: rgba(255,255,255,1); margin-top: -20px; padding: 15px 15px;}
        .course-page-option li a{font-size: 14px; padding: 12px 5px;}
        footer{display: none; }
      /*Media Queries*/
      @media only screen and (max-width: 544px) {}
      /*xs*/
      @media only screen and (min-width: 545px) and (max-width: 768px){}
      /*sm*/
      @media only screen and (min-width: 769px) and (max-width: 922px){}
      @media only screen and (min-width: 923px) and (max-width: 1010px){}
      /*md*/
      @media only screen and (min-width: 923px) and (max-width: 1024px){}
      @media only screen and (min-width: 1024px) and (max-width: 1200px){} 
      @media only screen and (min-width: 923px) and (max-width: 1200px){}
      @media only screen and (min-width: 992px) and (max-width: 1200px){
        header{height: 100px;}
      }
      /*lg*/
      @media only screen and (min-width: 1201px) and (max-width: 1440px){
        header{height: 100px;}
      }
        </style>
        <!-- Banner Section --> 
        <section class="banner-section view vh100 secondary-light-bg-color background-reset position-fixed width-100-percent overflow-y-auto" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/QLD-VIC-INT-Hospitality.jpg'); background-position: center 100%;">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div>
                    <h1 class="proximanova-bold px-60-font white-font-color no-margin line-height-1 display-inlineblock" style="vertical-align: -webkit-baseline-middle; text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.35);">Carpentry</h1>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/wine-glass.png" alt="" class="img-responsive display-inlineblock" style="margin-left: 5px;">
                  </div>
                  <div class="option-wrapper">
                    <h1 class="primary-font-color px-28-font text-uppercase text-center no-margin">Select Your Location</h1>
                    <div class="clearfix" style="height: 5px;"></div>
                    <?php wp_nav_menu( array( 'theme_location'  => 'carpentry-site-option-page-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'course-page-option large-block-grid-3 medium-block-grid-2 small-block-grid-1 centered-last-row','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>
                    <div class="clearfix" style="height: 5px;"></div>
                    <ul class="certification-number list-inline center-block px-14-font primary-font-color" style="margin-bottom: 0;">
                      <li><span>RTO code  40965</span></li>
                      <li><span>CRICOS No  03470A</span></li>
                      <li><span>Nationally Recognised Training</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner Section --> 
<?php include('includes/footer.php'); ?>