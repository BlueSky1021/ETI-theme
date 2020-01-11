<?php 
/*
Template name: Hospitality Option Page - Courses
*/
 ?>
<?php include('includes/header.php'); ?>
<style type="text/css">
	.darkblue-font-color{color: #024b67;}
	.our-course-section .course-list .list-item .item-title.darkblue-background {background: #024b67;border-radius: 5px;}
	.our-course-section .course-list .list-item .item-title.darkblue-background:before, .our-course-section .course-list .list-item .item-title.darkblue-background:after{display: none;}

	.our-course-section .course-list .list-item .item-explore-cta-btn.darkblue-background:hover {
    background: #024b67;
    color: #FFF;
}
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
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/hospitality-courses-banner.jpg'); background-position-y: 100%;">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">HOSPITALITY COURSES</h1>
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

          <section id="scrolltodiv" class="inner-page-content-wrapper our-courses-wrapper  our-course-section">
              <div>
                <div class="container">
                  <div class="row">
                    <div class="our-courses-content">
                      <div class="col-md-12">
                        <div class="page-subtitle">
                          <p class="px-24-font text-uppercase no-margin">KNOW MORE ABOUT OUR</p>
                          <h1 class="darkblue-font-color px-44-font proximanova-bold no-margin">Hospitality Courses</h1>
                        </div>
                      </div>  


                      <div class="course-list">

                        <?php $args_services=array('post_type'=>'courses','order'=>'ASC','posts_per_page' => -1);$services=new WP_Query($args_services);?>
                        <?php 
                          // The Loop
                          if ( $services->have_posts() ) {     
                            while ( $services->have_posts() ) {
                              $services->the_post(); ?>

                              <?php if( get_field('course_category') == 'hospitality' ): ?>

                            <div class="col-md-6">
                                    <div class="list-item box">
                                      <div class="item-img">
                                        <?php 
                                        if ( get_the_post_thumbnail($post_id) != '' ) {
                                           the_post_thumbnail();
                                           the_post_thumbnail('thumbnail', array('class' => "img-responsive width-100-percent"));
                                        } else {
                                         echo '<img src="';
                                         echo catch_that_image();
                                         echo '" alt=""  class="img-responsive width-100-percent"/>';
                                        }
                                        ?>
                                      </div>
                                      <div class="item-title center-block darkblue-background">
                                        <h3 class="proximanova-bold white-font-color px-18-font line-height-1 text-uppercase text-center no-margin center-position width-100-percent"><?php the_field('course_code'); ?> - <?php the_title(); ?></h3>
                                      </div>
                                      <div class="item-content position-relative">
                                         <p class="course-description px-12-font text-align-center-justify"><?php echo excerpt(60); ?></p>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="center-position width-100-percent">
                                            <a href="<?php the_permalink(); ?>" class="item-explore-cta-btn darkblue-background proximanova-semibold px-18-font center-block text-uppercase">More Details</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </div>

                            <?php endif; ?>

                        <?php }
                            } else { ?>
                            <h3 class="text-center text-uppercase">No course found</h3>
                        <?php } ?>
                        <?php wp_reset_postdata();?>

                        <div class="cleafix"></div>
                        </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
<?php include('includes/footer.php'); ?>

<script>

function maxLength(maxLen)
{
    return function truncateToNearestSpace(idx, text)
    {
        // this may chop in the middle of a word
        var truncated = text.substr(0, maxLen);

        if (/[^\s]$/.test(truncated))
            return truncated.replace(/\s[^\s]+$/, "");
        else
            return truncated.trim();
    }
}

var original = $(".course-description").text();

var result = original.substr(original.indexOf(" ") + 1);

// $('.item-content').append('<p class="trimmed-text px-12-font text-align-center-justify">'+ result +'</p>');



console.log(result);
</script>