<?php 
/*
Template name: Hospitality option page
*/
 ?>
<?php include('includes/header.php'); ?>
        <style>
         footer{display: none; }
         /*hospitality styles*/
         header{height: 100px !important;}
         header .navbar-brand img{ width: 260px !important;}
         #menu-main-menu,
         #menu-main-menu-1{margin: 27px 0 !important;}
        .navbar-brand{padding: 15px 5px !important;}
        .navbar-default .navbar-collapse .text-uppercase{margin: 0 !important;}
        .option-wrapper{background: rgba(255,255,255,1); margin-top: -20px; padding: 15px 15px;}
        .course-page-option li a{font-size: 14px; padding: 12px 5px;}
        footer{display: none; }
      /*Media Queries*/
      @media only screen and (max-width: 544px) {
        .course-page-option li a {font-size: 12px;padding: 5px;}
        .background-reset {background-position: 68%!important;}
      }
      @media only screen and (max-width: 991px) {
        .option-wrapper {background: rgba(255, 255, 255, 0.55);}
        .optionpage-banner-carousel .childcare-item{background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/QLD-VIC-INT-Childcare-responsive.jpg')!important;}
        .optionpage-banner-carousel .hospitality-item{background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/QLD-VIC-INT-Hospitality-responsive.jpg')!important; }
      }
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

/*childcare styles*/
  .darkblue-font-color{color: #024b67;}
  .our-course-section .course-list .list-item .item-title.darkblue-background {background: #024b67;border-radius: 5px;}
  .our-course-section .course-list .list-item .item-title.darkblue-background:before, .our-course-section .course-list .list-item .item-title.darkblue-background:after{display: none;}
  .our-course-section .course-list .list-item .item-explore-cta-btn.darkblue-background:hover {background: #024b67;color: #FFF;}
.our-course-section .course-list .list-item .item-explore-cta-btn.darkblue-background {
    background: #FFF;
    color: #024b67;
    padding: 10px 50px 7px;
    border-radius: 50px;
    box-shadow: 0 0 5px 0 rgba(0,0,0,.24);
    -o-box-shadow: 0 0 5px 0 rgba(0,0,0,.24);
    -ms-box-shadow: 0 0 5px 0 rgba(0,0,0,.24);
    -moz-box-shadow: 0 0 5px 0 rgba(0,0,0,.24);
    -webkit-box-shadow: 0 0 5px 0 rgba(0,0,0,.24);
}
        </style>
        <!-- Banner Section --> 
        <section class="optionpage-wrapper">
            <div class="optionpage-banner-carousel">
              <div class="item childcare-item banner-section view vh100 secondary-light-bg-color background-reset position-fixed width-100-percent overflow-y-auto" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/QLD-VIC-INT-Childcare.jpg'); ">
              <div class="center-position-top-60 width-100-percent">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-7">
                      <div>
                        <h1 class="proximanova-bold px-60-font white-font-color no-margin line-height-1 display-inlineblock" style="vertical-align: -webkit-baseline-middle; text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.35);">Childcare</h1>
                      </div>
                      <div class="option-wrapper" style="margin-top: 0;">
                        <h1 class="primary-font-color px-28-font text-uppercase text-center no-margin">Select Your Location</h1>
                        <div class="clearfix" style="height: 5px;"></div>
                        <?php wp_nav_menu( array( 'theme_location'  => 'site-option-page-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'course-page-option large-block-grid-3 medium-block-grid-2 small-block-grid-2 centered-last-row','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>
                        <div class="clearfix" style="height: 5px;"></div>
                        <ul class="certification-number list-inline center-block px-14-font primary-font-color" style="margin-bottom: 0;">
                          <li><span>RTO Provider No.  40965</span></li>
                          <li><span>CRICOS Code  03470A</span></li>
                          <li><span>Nationally Recognised Training</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
          </div>
        </div>
        </section>
  <!-- End Banner Section --> 
<?php include('includes/footer.php'); ?>
<!-- <script type="text/javascript">
  $(document).ready(function () {
  $('.optionpage-banner-carousel').slick({
    centerMode: false,
    adaptiveHeight: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    arrows:true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 4000,
  });
});
</script> --><?php 
/*
Template name: Hospitality Option Page
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
      @media only screen and (min-width: 992px) and (max-width: 1200px){}
      /*lg*/
      @media only screen and (min-width: 1201px) and (max-width: 1440px){
        header{height: 100px;}
      }
        </style>
        <!-- Banner Section --> 
        <section class="banner-section view vh100 secondary-light-bg-color background-reset position-fixed width-100-percent overflow-y-auto" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/QLD-VIC-INT-Childcare.jpg');">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div>
                    <h1 class="proximanova-bold px-60-font white-font-color no-margin line-height-1 display-inlineblock" style="vertical-align: -webkit-baseline-middle; text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.35);">Childcare</h1>
                  </div>
                  <div class="option-wrapper" style="margin-top: 0;">
                    <h1 class="primary-font-color px-28-font text-uppercase text-center no-margin">Select Your Location</h1>
                    <div class="clearfix" style="height: 5px;"></div>
                    <?php wp_nav_menu( array( 'theme_location'  => 'site-option-page-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'course-page-option large-block-grid-3 medium-block-grid-2 small-block-grid-1 centered-last-row','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>
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