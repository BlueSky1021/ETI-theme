<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<style>
  blockquote{font-size: 14px;}
</style>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color position-relative" style="background: <?php $image = get_field('page_image'); if( !empty($image) ): ?> url('<?php echo $image['url']; ?>')<?php endif; ?>; background-repeat: no-repeat;background-position: center center;background-size: cover;-o-background-size: cover;-ms-background-size: cover;-moz-background-size: cover;-webkit-background-size: cover;">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1"><?php the_title(); ?></h1>
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
          <section id="scrolltodiv" class="inner-page-content-wrapper fees-and-fundings-wrapper text-justify" style="padding: 40px 0;">
              <div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>