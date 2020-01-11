<?php 
/*
Template name: About Australia
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color position-relative" style="background: <?php $image = get_field('page_image'); if( !empty($image) ): ?> url('<?php echo $image['url']; ?>')<?php endif; ?>; background-repeat: no-repeat;background-position: center center;background-size: cover;-o-background-size: cover;-ms-background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <!-- <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1"><?php the_title(); ?></h1> -->
                    <h1 class="proximanova-bold px-62-font no-margin line-height-1">Information for International Students about Education in Australia </h1>
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
          <section id="scrolltodiv" class="inner-page-content-wrapper our-courses-wrapper <?php the_field('course_category'); ?>">
              <div>
                <div class="container">
                  <div class="row">
                    <div class="our-courses-content">
                      <!-- <div class="col-lg-12">
                        <?php the_content(); ?>
                      </div> -->
                      <div class="clearfix"></div>
                      <div class="col-md-12">
                      <div class="clearfi"></div>
                      <div class="col-md-12">

                        <?php if( have_rows('course_information') ): $i = 0; ?>
                          <div class="panel-group accordion-wrapper text-justify" id="accordion" role="tablist" aria-multiselectable="true">
                          <?php while( have_rows('course_information') ): the_row(); $i++; 
                              // vars
                              $title = get_sub_field('course_information_title');
                              $content = get_sub_field('course_information_content');
                          ?>

                              <div class="panel panel-default set">
                                <div class="panel-heading no-padding" role="tab" id="heading<?php echo $i; ?>">
                                  <h4 class="panel-title">
                                    <a role="button" class="accordion-toggle primary-font-color proximanova-bold px-20-font no-margin line-height-1 display-block" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                      <?php echo $title; ?>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                  <div class="panel-body content">
                                    <?php echo $content; ?>
                                  </div>
                                </div>
                              </div>

                            <?php endwhile; ?>
                            </div>
                          <?php endif; ?>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
            </div>
          </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>