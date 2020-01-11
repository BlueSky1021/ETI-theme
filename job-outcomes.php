<?php 
/*
Template name: Job outcomes
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/job-outcomes-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">learning Outcomes</h1>
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
        <section id="scrolltodiv" class="page-content-section text-justify" style="padding: 0 0 60px;">
          <div class="page-content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

              <?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>

          </div>
        </section>
        <!-- End Page Content Section -->
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>