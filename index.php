<?php
/*
Template name: Homepage 
*/
?>
<?php include(TEMPLATEPATH . '/includes/header.php'); ?>
<!-- Banner Section -->
<section class="banner-section banner-curve-style view vh100 primary-bg-color background-reset position-relative" style="background-image: url('<?php $image = get_field('homepage_banner', 'option'); if (!empty($image)) : ?><?php echo $image['url']; ?><?php endif; ?>');">
  <div class="center-position-top-60 width-100-percent">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-caption text-center white-font-color">
            <h1 class="px-40-font no-margin text-uppercase line-height-1">Add Value To</h1>
            <h2 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Your Career</h2>
          </div>
          <ul class="banner-cta-links white-font-color proximanova-semibold px-16-font text-uppercase list-inline center-block">
            <li><a href="<?php the_field('learn_more_link'); ?>" class="text-center" style="background: #024B67; border: 2px solid #024B67;">Learn More</a></li>
            <!--<li><a href="http://eti.edu.au/contact/" class="text-center" style="background: transparent; border: 2px solid #FFFFFF;">Contact Us</a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-cta-goto">
    <a href="#scrolltodiv" class="smoothScroll white-font-color center-block line-height-1"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
  </div>
</section>
<!-- End Banner Section -->
<!-- Our Course Section -->
<section id="scrolltodiv" class="our-course-section content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2 class="secondary-font-color px-24-font no-margin line-height-1">Know more About </h2>
          <h1 class="proximanova-bold primary-font-color px-44-font no-margin line-height-1">Our Courses</h1>
        </div>
        <div class="clearfix" style="height: 50px;"></div>
        <div>
          <ul class="course-list large-block-grid-2 medium-block-grid-2 small-block-grid-1">

            <?php $args_services = array('post_type' => 'courses', 'order' => 'ASC', 'posts_per_page' => -1);
            $services = new WP_Query($args_services); ?>
            <?php
            // The Loop
            if ($services->have_posts()) {
              while ($services->have_posts()) {
                $services->the_post(); ?>

                <?php if (get_field('course_category') == 'carpentry') : ?>

                  <li>
                    <div class="list-item box carpentry">
                      <div class="item-img">
                        <?php
                        if (get_the_post_thumbnail($post_id) != '') {
                          the_post_thumbnail();
                          the_post_thumbnail('thumbnail', array('class' => "img-responsive width-100-percent"));
                        } else {
                          echo '<img src="';
                          echo catch_that_image();
                          echo '" alt=""  class="img-responsive width-100-percent"/>';
                        }
                        ?>
                      </div>
                      <div class="item-title center-block">
                        <h3 class="proximanova-bold white-font-color px-18-font line-height-1 text-uppercase text-center no-margin center-position width-100-percent">(<?php the_field('course_code'); ?>) <?php the_title(); ?></h3>
                      </div>
                      <div class="item-content position-relative">
                        <p class="px-12-font text-align-center-justify"><?php echo excerpt(60); ?></p>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="center-position width-100-percent">
                            <a href="<?php the_permalink(); ?>" class="item-explore-cta-btn proximanova-semibold px-18-font center-block text-uppercase">More Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php endif; ?>


              <?php }
          } else { ?>
              <h3 class="text-center text-uppercase">No course found</h3>
            <?php } ?>
            <?php wp_reset_postdata(); ?>

            <?php $args_services = array('post_type' => 'courses', 'order' => 'ASC', 'posts_per_page' => -1);
            $services = new WP_Query($args_services); ?>
            <?php
            // The Loop
            if ($services->have_posts()) {
              while ($services->have_posts()) {
                $services->the_post(); ?>

                <?php if (get_field('course_category') == 'hospitality') : ?>

                  <li>
                    <div class="list-item box position-relative hospitality">
                      <div class="item-img">
                        <?php
                        if (get_the_post_thumbnail($post_id) != '') {
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
                        <h3 class="proximanova-bold white-font-color px-18-font line-height-1 text-uppercase text-center no-margin center-position width-100-percent">(<?php the_field('course_code'); ?>) <?php the_title(); ?></h3>
                      </div>
                      <div class="item-content position-relative">
                        <p class="px-12-font text-align-center-justify"><?php echo excerpt(60); ?></p>
                      </div>
                      <div class="row">
                        <div class="col-lg-12" style="position: absolute;width: 100%;left: 0;bottom: 0;">
                          <div class="center-position width-100-percent">
                            <a href="<?php the_permalink(); ?>" class="item-explore-cta-btn darkblue-background proximanova-semibold px-18-font center-block text-uppercase">More Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php endif; ?>

              <?php }
          } else { ?>
              <h3 class="text-center text-uppercase">No course found</h3>
            <?php } ?>
            <?php wp_reset_postdata(); ?>

            <?php $args_services = array('post_type' => 'courses', 'order' => 'ASC', 'posts_per_page' => -1);
            $services = new WP_Query($args_services); ?>
            <?php
            // The Loop
            if ($services->have_posts()) {
              while ($services->have_posts()) {
                $services->the_post(); ?>

                <?php if (get_field('course_category') == 'childcare') : ?>

                  <li>
                    <div class="list-item box childcare">
                      <div class="item-img">
                        <?php
                        if (get_the_post_thumbnail($post_id) != '') {
                          the_post_thumbnail();
                          the_post_thumbnail('thumbnail', array('class' => "img-responsive width-100-percent"));
                        } else {
                          echo '<img src="';
                          echo catch_that_image();
                          echo '" alt=""  class="img-responsive width-100-percent"/>';
                        }
                        ?>
                      </div>
                      <div class="item-title center-block">
                        <h3 class="proximanova-bold white-font-color px-18-font line-height-1 text-uppercase text-center no-margin center-position width-100-percent">(<?php the_field('course_code'); ?>) <?php the_title(); ?></h3>
                      </div>
                      <div class="item-content position-relative">
                        <p class="px-12-font text-align-center-justify"><?php echo excerpt(60); ?></p>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="center-position width-100-percent">
                            <a href="<?php the_permalink(); ?>" class="item-explore-cta-btn proximanova-semibold px-18-font center-block text-uppercase">More Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php endif; ?>

              <?php }
          } else { ?>
              <h3 class="text-center text-uppercase">No course found</h3>
            <?php } ?>
            <?php wp_reset_postdata(); ?>

            <?php $args_services = array('post_type' => 'courses', 'order' => 'ASC', 'posts_per_page' => -1);
            $services = new WP_Query($args_services); ?>
            <?php
            // The Loop
            if ($services->have_posts()) {
              while ($services->have_posts()) {
                $services->the_post(); ?>

                <?php if (get_field('course_category') == 'security') : ?>

                  <li>
                    <div class="list-item box security">
                      <div class="item-img">
                        <?php
                        if (get_the_post_thumbnail($post_id) != '') {
                          the_post_thumbnail();
                          the_post_thumbnail('thumbnail', array('class' => "img-responsive width-100-percent"));
                        } else {
                          echo '<img src="';
                          echo catch_that_image();
                          echo '" alt=""  class="img-responsive width-100-percent"/>';
                        }
                        ?>
                      </div>
                      <div class="item-title center-block">
                        <h3 class="proximanova-bold white-font-color px-18-font line-height-1 text-uppercase text-center no-margin center-position width-100-percent">(<?php the_field('course_code'); ?>) <?php the_title(); ?></h3>
                      </div>
                      <div class="item-content position-relative">
                        <p class="px-12-font text-align-center-justify"><?php echo excerpt(60); ?></p>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="center-position width-100-percent">
                            <a href="<?php the_permalink(); ?>" class="item-explore-cta-btn proximanova-semibold px-18-font center-block text-uppercase">More Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php endif; ?>

              <?php }
          } else { ?>
              <h3 class="text-center text-uppercase">No course found</h3>
            <?php } ?>
            <?php wp_reset_postdata(); ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Our Course Section -->
<!-- Student Story Section -->
<section class="student-story-section content-section secondary-light-bg-color">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2 class="secondary-font-color px-24-font no-margin line-height-1">Our Students</h2>
          <h1 class="proximanova-bold primary-font-color px-44-font no-margin line-height-1">Success Stories</h1>
        </div>
        <div class="clearfix" style="height: 20px;"></div>
        <div>
          <!-- <div class="col-lg-10 grid-centered">
                    <div class="student-story-carousel">
                      <div class="item">
                        <div class="student-avatar-img center-block">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/avatars/avatar-female.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="item">
                        <div class="student-avatar-img center-block">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/avatars/avatar-female.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="item">
                        <div class="student-avatar-img center-block">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/avatars/avatar-female.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="item">
                        <div class="student-avatar-img center-block">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/avatars/avatar-female.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="item">
                        <div class="student-avatar-img center-block">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/avatars/avatar-female.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="item">
                        <div class="student-avatar-img center-block">
                          <img src="<?php bloginfo('template_directory'); ?>/assets/images/avatars/avatar-female.jpg" alt="" class="img-responsive">
                        </div>
                      </div>
                    </div>
                    <div class="clearfix" style="height: 20px;"></div> -->
          <div class="col-lg-11 col-xs-12 grid-centered">
            <div class="student-story-content"">
                        <div class=" item">
              <div>
                <div class="item-content text-align-center-justify position-relative">
                  <p>I have gained a better understanding of how the childcare industry works. I have also gain the knowledge of caring for children with specific needs. This knowledge will guide me through commencing a family day care in the comfort of my own house. I am satisfied with the way the course is conducted, and the educator is very informative and helpful.</p>
                </div>
                <h3 class="primary-font-color px-18-font text-center no-margin">Hania Tag, Student</h3>
              </div>
            </div>
            <div class="item">
              <div>
                <div class="item-content text-align-center-justify position-relative">
                  <p>I am currently studying Diploma of Early Childhood Education and Care. The skills I am currently learning are how to implement hygienic skills around food, around children and around nappy changing also being cultured competent around children and families from different backgrounds. This course has changed me so much because it's made me more aware of how to deal and educate the younger generation and that their mental and physical development involves you and their family. This will help me apply for a job in the industry that most interest me and that Early Childhood Education and Care. I enjoy children and being around children and their families.</p>
                </div>
                <h3 class="primary-font-color px-18-font text-center no-margin">Noura Abou-Eid, Student</h3>
              </div>
            </div>
            <div class="item">
              <div>
                <div class="item-content text-align-center-justify position-relative">
                  <p>I Mavoi kavana started course of Diploma in April with Elite Training Institute has provided the form that need to be signed and our homework. It's been a challenged to manage my own family, Homework & Family Day Care but Elite Institute has supported me all the way and have encouraged & helped me a lot. Thank you to our teacher Fang for taking the time to help me & others in the class I am way grateful we have become a family and together we will pass this class.</p>
                </div>
                <h3 class="primary-font-color px-18-font text-center no-margin">Mavai kavana, Student</h3>
              </div>
            </div>
            <div class="item">
              <div>
                <div class="item-content text-align-center-justify position-relative">
                  <p>This course helps us with a lot of job opportunities regarding family day care, day care services, and schools, etc. Not only has that it educated us for our own self, about children, and the practices make us learn with experience. They provide the matter with theories, so we read and implement it in our study & care service.</p>
                </div>
                <h3 class="primary-font-color px-18-font text-center no-margin">Mauam Aftab Mansooe, Student</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
<!-- End Student Story Section -->
<!-- News and Blog Section -->
<!--         <section class="news-blog-section content-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-header text-center">
                  <h2 class="secondary-font-color px-24-font no-margin line-height-1">Some of Our Latest</h2>
                  <h1 class="proximanova-bold primary-font-color px-44-font no-margin line-height-1">Featured News & Blog</h1>
                </div>
                <div class="clearfix" style="height: 20px;"></div>
                <div>
                  <ul class="news-blog-list large-block-grid-3 medium-block-grid-1 small-block-grid-1">
                    <li class="item">
                      <div class="row display-table table-reset">
                        <div class="item-img item-grid">
                          <div class="box position-relative">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/news/news-blog-featured-img.jpg" alt="" class="img-responsive width-100-percent">
                          </div>
                        </div>
                        <div class="item-content-details item-grid">
                          <div class="box">
                            <div class="item-title">
                              <h3 class="title-name secondary-font-color proximanova-bold no-margin">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</h3>
                              <p class="title-details px-12-font">MAY 04, 2017  /  John Doe</p>
                            </div>
                            <div>
                              <div class="content-summary text-justify">
                                <p class="px-12-font">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                <a href="#" class="learn-more-cta-link proximanova-semibold text-uppercase line-height-1">Read More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="item">
                      <div class="row display-table table-reset">
                        <div class="item-img item-grid">
                          <div class="box position-relative">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/news/news-blog-featured-img2.jpg" alt="" class="img-responsive width-100-percent">
                          </div>
                        </div>
                        <div class="item-content-details item-grid">
                          <div class="box">
                            <div class="item-title">
                              <h3 class="title-name secondary-font-color proximanova-bold no-margin">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</h3>
                              <p class="title-details px-12-font">MAY 04, 2017  /  John Doe</p>
                            </div>
                            <div>
                              <div class="content-summary text-justify">
                                <p class="px-12-font">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                <a href="#" class="learn-more-cta-link proximanova-semibold text-uppercase line-height-1">Read More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </li>
                    <li class="item">
                      <div class="row display-table table-reset">
                        <div class="item-img item-grid">
                          <div class="box position-relative">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/news/news-blog-featured-img2.jpg" alt="" class="img-responsive width-100-percent">
                          </div>
                        </div>
                        <div class="item-content-details item-grid">
                          <div class="box">
                            <div class="item-title">
                              <h3 class="title-name secondary-font-color proximanova-bold no-margin">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</h3>
                              <p class="title-details px-12-font">MAY 04, 2017  /  John Doe</p>
                            </div>
                            <div class="content-summary text-justify">
                                <p class="px-12-font">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                              <a href="#" class="learn-more-cta-link proximanova-semibold text-uppercase line-height-1">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </li>
                    <li class="item">
                      <div class="row display-table table-reset">
                        <div class="item-img item-grid">
                          <div class="box position-relative">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/news/news-blog-featured-img2.jpg" alt="" class="img-responsive width-100-percent">
                          </div>
                        </div>
                        <div class="item-content-details item-grid">
                          <div class="box">
                            <div class="item-title">
                              <h3 class="title-name secondary-font-color proximanova-bold no-margin">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</h3>
                              <p class="title-details px-12-font">MAY 04, 2017  /  John Doe</p>
                            </div>
                            <div class="content-summary text-justify">
                                <p class="px-12-font">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                              <a href="#" class="learn-more-cta-link proximanova-semibold text-uppercase line-height-1">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section> -->
<!-- End News and Blog Section -->
<!-- Apply for a Course Section -->
<section class="apply-course-section theme-form-section content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-6 col-md-6  hidden-sm hidden-xs">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/others/contact-img.jpg" alt="" class="context-img img-responsive">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="section-header">
            <h2 class="secondary-font-color px-24-font no-margin line-height-1">Interested?</h2>
            <h1 class="proximanova-bold primary-font-color px-44-font no-margin line-height-1">Apply for a Course</h1>
          </div>
          <div class="clearfix" style="height: 10px;"></div>
          <div>
            <?php
            $blog_id = get_current_blog_id();

            switch ($blog_id) {
              case 2:  //QLD
                echo do_shortcode('[contact-form-7 id="113" title="Course Form QLD" html_id="course_form"]');
                break;

              case 3: //VIC
                echo do_shortcode('[contact-form-7 id="108" title="Course Form VIC" html_id="course_form"]');
                break;

              case 4: //INTL
                echo do_shortcode('[contact-form-7 id="108" title="Course Form INTL" html_id="course_form"]');
                break;
            }
            ?>

            <!-- <form action="">
                      <div class="form-group">
                        <input type="text" class="form-control form-input text-input" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-input text-input" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-input text-input" placeholder="Phone">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-input text-input" placeholder="Company (Optional)">
                      </div>
                      <div class="form-group">
                      <textarea name="" id="" class="form-control form-input no-resize" cols="30" rows="5" placeholder="Message"></textarea>
                      </div>
                      <div class="forn-group">
                        <button class="form-btn primary-bg-color white-font-color px-26-font proximanova-bold no-border">Send Message</button>
                      </div>
                    </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Apply for a Course Section -->
<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>