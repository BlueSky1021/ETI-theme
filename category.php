<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/blog-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Category</h1>
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


          <section id="scrolltodiv" class="inner-page-content-wrapper  blog-page-wrapper">
              <div>
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 ">
                      <div class="blog-main-content">
                        <ul class="list-block no-padding">

                          <?php 
                          // the query to set the posts per page to 3
                          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                          $args = array('post_type' => 'blogs','order'=>'DESC', 'posts_per_page' => 5, 'paged' => $paged );
                          query_posts($args); ?>
                          <!-- the loop -->
                          <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                              <!-- rest of the loop -->

                            <li>
                              <div class="post-wrapper not-featured-blog">
                                <div class="fetured-image">
                                  <img src="<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><?php echo $image[0]; ?><?php endif; ?>" alt="" class="img-responsive center-block">
                                  <span class="featured-blog-text text-uppercase px-18-font white-font-color proximanova-bold">Featured Blog</span>
                                </div>
                                <div class="clearfix" style="height: 15px;"></div>
                                <div class="clearfix"></div>
                                <div class="col-md-4" >
                                <table class="px-12-font line-height-2 no-margin" width="100%">
                                  <tbody>
                                    <tr class="postedby">
                                      <td width="40%">Posted by: </td>
                                      <td width="60%" class="text-uppercase proximanova-semibold"><?php the_author(); ?></td>
                                    </tr>
                                    <tr class="categories">
                                      <td>Categories:</td>
                                      <td class="text-uppercase proximanova-semibold">
                                        <?php 
                                          $category = get_the_category();
                                          $firstCategory = $category[0]->cat_name;
                                          echo $firstCategory;
                                         ?>
                                      </td>
                                    </tr>
                                    <tr class="author">
                                      <td>Author:</td>
                                      <td class="text-uppercase proximanova-semibold"><?php the_field('author_name'); ?></td>
                                    </tr>
                                    <tr class="comment">
                                      <td>Comment:</td>
                                      <td class="text-uppercase  proximanova-semibold"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                                </div>
                                <div class="col-md-8" style="border-left: solid 2px #006837; ">
                                  <div class="blog-post-info">
                                    <h1 class="px-20-font dark-green-font-color" style="margin-top: 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <p class="px-20-font text-uppercase proximanova-semibold no-margin"><?php the_time('F d, Y'); ?></p>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="clearfix" style="height: 15px;"></div>
                                <div class="blog-post-info">
                                  <p><?php echo excerpt(100); ?></p>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </li>

                              <!-- the title, the content etc.. -->
                          <?php endwhile; ?>
                          <!-- pagination -->
                          <div class="px-20-font primary-font-color">
                            <span class="pull-left"><?php echo get_next_posts_link( '<i class="fa fa-chevron-left"></i>  Older Posts', $the_query->max_num_pages );  ?></span>
                            <span class="pull-right"><?php echo get_previous_posts_link( 'Newer Posts <i class="fa fa-chevron-right"></i>' ); ?></span>
                          </div>
                          
                          
                          <?php else : ?>
                          <!-- No posts found -->
                          <h3 class="px-30-font primary-font-color text-center">No Blogs Found</h3>
                          <?php endif; ?>

                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4 ">
                      <div class="blog-sidebar">
                          <div class="sign-up">
                                  <p class="px-24-font no-margin">Sign up </p>
                                  <h1 class="dark-green-font-color px-44-font text-uppercase proximanova-bold no-margin">NEWSLETTER</h1>
                                  <div class="clearfix" style="height: 30px;"></div>
									<?php
									switch( $blog_id ){
										case 2:  //QLD
												echo do_shortcode('[contact-form-7 id="114" title="Newsletter QLD" html_class="form-template contact-us-form-page" html_id="newsletter_subscribe"]');
										break;
										
										case 3: //VIC
												echo do_shortcode('[contact-form-7 id="109" title="Newsletter VIC" html_class="form-template contact-us-form-page" html_id="newsletter_subscribe"]'); 
										break;
										
										case 4: //INTL
											  echo do_shortcode('[contact-form-7 id="111" title="Newsletter INTL" html_class="form-template contact-us-form-page" html_id="newsletter_subscribe"]'); 
										break;
										
										default:
											 echo do_shortcode('[contact-form-7 id="86" title="Newsletter" html_class="form-template contact-us-form-page" html_id="newsletter_subscribe"]'); 
									}
									
									?>
<!--                                     <form class="form-template contact-us-form-page" action="" method="POST">
                                    <div class="col-md-12 no-padding">
                                      <div class="input-group">
                                        <input class="form-control px-16-font"  type="text" placeholder="Email" name="c_name" required/>
                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                      <button type="submit" class="btn submit-btn center-block proximanova-semibold" name="submit">SUBSCRIBE</button>
                                    </div>
                                    <div class="clearfix"></div>
                                  </form> -->
                          </div>

                            <h2 class="proximanova-bold px-30-font">Categories <span class="right-skew"></span></h2>
                            <!-- <ul class="list-block px-16-font">
                              <li><a href="">Student Stories <span class="margin-left-15">(13)</span></a></li>
                              <li><a href="">Careers <span class="margin-left-15">(25)</span></a></li>
                              <li><a href="">  Student Stories <span class="margin-left-15">(13)</span></a></li>
                              <li><a href="">  Careers <span class="margin-left-15">(25)</span></a></li>
                            </ul> -->
                              <ul class="list-block px-16-font">
                                <?php
                                $categories = get_categories('exclude=1&title_li=');
                                foreach ($categories as $cat) {
                                    $category_link = get_category_link($cat->cat_ID);
                                    echo "<li><a href=". esc_url( $category_link ) .">".$cat->cat_name." ".$cat->category_description."(".$cat->category_count.")</a></li>";
                                }
                                ?>
                              </ul>
                            <h2 class="proximanova-bold">Latest Post <span class="right-skew"></span></h2>
                            <ul class="list-block no-padding">


                        <?php $args_blogs=array('post_type'=>'blogs','order'=>'DESC','posts_per_page' => -1);$blogs=new WP_Query($args_blogs);?>
                        <?php 
                          // The Loop
                          if ( $blogs->have_posts() ) {     
                            while ( $blogs->have_posts() ) {
                              $blogs->the_post(); ?>


                              <li>
                                <div class="post-wrapper" style="">
                                  <div class="fetured-image">
                                    <img src="<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><?php echo $image[0]; ?><?php endif; ?>" alt="" class="img-responsive center-block">
                                  </div>
                                  <div class="blog-post-info">
                                    <h1 class="px-14-font proximanova-bold no-margin " style="margin-top: 0;"><?php the_title(); ?></h1>
                                    <p class="text-uppercase" style="color: #878686;margin: 5px 0;"><?php the_time('F d, Y'); ?> / <?php the_field('author_name'); ?></p>
                                    <p><?php echo excerpt(15); ?> <a href="<?php the_permalink(); ?>" class="dark-green-font-color">READ MORE</a></p>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </li>

                        <?php }
                            } else { ?>
                            <h3 class="text-center text-uppercase">No blog found</h3>
                        <?php } ?>
                        <?php wp_reset_postdata();?>
                            </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>

<!--         <section class="page-content-section" style="padding: 60px 0;">
          <div class="page-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="box">
                    <h2 class="primary-font-color proximanova-bold px-44-font">Elite Training Institute</h2>
                    <p class="secondary-font-color px-18-font line-height-2">Elite Training Institute Pty Ltd takes pride in providing high quality trainings and services it delivers. Elite Training Institute Pty Ltd works within the Standards for Registered Training Organisations 2015 which has brought about major changes in the vocational pathways to our clients.</p>
                    <p class="secondary-font-color px-18-font line-height-2">We are registered by the Australian Skills Quality Authority to deliver high demand qualifications or units of competence to students.</p>
                  </div>
                </div>
                <div class="cl-lg-6">
                  <div class="box">
                    <img src="assets/images/others/our-story-page-img.jpg" alt="" class="img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- End Page Content Section -->
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>