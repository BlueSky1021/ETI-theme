<?php 
/*
Template name: Our story
*/
 ?>

<?php 

$classes = get_body_class();
if (in_array('page-childcare-our-story',$classes)) {
?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<?php } else { ?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<?php } ?>

<style>
  .page-hospitality-our-story .primary-font-color{color: #024b67 !important;}
</style>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/our-story-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Our Story</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-cta-goto">
            <a href="#scrolltodiv" class="smoothScroll white-font-color center-block line-height-1"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
          </div>
        </section>
        <!-- End Banner Section --> 
        <!-- Page Content Section -->
        <section id="scrolltodiv" class="page-content-section text-justify" style="padding-top: 60px;">
          <div class="page-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="">
                    <h2 class="primary-font-color proximanova-bold px-44-font">Elite Training Institute</h2>
                    <p class="secondary-font-color px-18-font line-height-2">Elite Training Institute Pty Ltd takes pride in providing high quality trainings and services it delivers. Elite Training Institute Pty Ltd works within the Standards for Registered Training Organisations 2015 which has brought about major changes in the vocational pathways to our clients.</p>
                    <p class="secondary-font-color px-18-font line-height-2">We are registered by the Australian Skills Quality Authority.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/others/our-story-page-img.jpg" alt="" class="img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Page Content Section -->


<?php 

$classes = get_body_class();
if (in_array('page-childcare-our-story',$classes)) {
?>

<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>

<?php } else { ?>

<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>

<?php } ?>

