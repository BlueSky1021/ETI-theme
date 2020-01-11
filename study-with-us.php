<?php 
/*
Template name: Study with us
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style study-with-us-banner view vh100 primary-bg-color background-reset position-relative">
        	<ul class="incoming-students-slider list-unstyled height-100-percent">

                        <?php $args_services=array('post_type'=>'incoming_students','order'=>'ASC','posts_per_page' => -1);$services=new WP_Query($args_services);?>
                        <?php 
                          // The Loop
                          if ( $services->have_posts() ) {     
                            while ( $services->have_posts() ) {
                              $services->the_post(); ?>


			        		<li class="slider-item background-reset position-relative" style="background-image: url('<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><?php echo $image[0]; ?><?php endif; ?>');">
					          <div class="center-position-top-60 width-100-percent">
					            <div class="container">
					              <div class="row">
					                <div class="col-lg-10 grid-centered">
					                  <div class="banner-caption text-center white-font-color">
					                  	<div class="caption-title">
					                  		<h1 class="proximanova-bold px-26-font text-uppercase no-margin center-position width-100-percent line-height-1"><?php the_title(); ?></h1>
					                  	</div>
					                  	<div class="caption-content text-align-center-justify px-20-font white-font-color">
					                  		<?php the_content(); ?>
					                  	</div>
					                  <ul class="banner-cta-links white-font-color proximanova-semibold px-16-font text-uppercase list-inline center-block">
					                    <li><a href="http://eti.edu.au/enrol/#enrol" class="text-center" style="background: #006837; border: 2px solid #006837;">Enrol Now</a></li>
					                    <li><a href="<?php the_field('learn_more_link'); ?>" class="text-center" style="background: transparent; border: 2px solid #FFFFFF;">Learn More</a></li>
					                  </ul>
					                  </div>
					                </div>
					              </div>
					            </div>
					          </div>
			        		</li>

                        <?php }
                            } else { ?>
                            <li class="slider-item background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/study-with-us-banner.jpg');">
					          <div class="center-position-top-60 width-100-percent">
					            <div class="container">
					              <div class="row">
					                <div class="col-lg-12">
					                  <div class="banner-caption text-center white-font-color">
					                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Study With Us</h1>
					                  </div>
					                </div>
					              </div>
					            </div>
					          </div>
					         </li>
                        <?php } ?>
                        <?php wp_reset_postdata();?>
        </ul>
          <div class="banner-cta-goto">
            <a href="#scrolltodiv" class="smoothScroll white-font-color center-block line-height-1"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
          </div>
        </section>
        <!-- End Banner Section --> 
        <!-- Page Content Section -->
        <section id="scrolltodiv" class="page-content-section text-justify" style="padding: 60px 0;">
          <div class="page-content">
          	<?php the_content(); ?>
          </div>
        </section>
        <!-- End Page Content Section -->
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>