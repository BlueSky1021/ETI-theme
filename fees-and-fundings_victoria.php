<?php 
/*
template name: Fees and Fundings Vic
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/fees-and-fundings-banner.jpg'); background-position-y: 100%;">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Course Fees</h1>
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


          <section id="scrolltodiv" class="inner-page-content-wrapper fees-and-fundings-wrapper text-justify" style="padding-bottom: 0;">
              <div>
                <div class="container">
                  <div class="row">
                    <div class="fees-and-fundings-content">
                      <div class="col-md-10 col-md-offset-1">
                        <div class="page-subtitle">
                          <p class="px-24-font ">We made it easier for you to grow and earn a better career with the range of course payment and funding options.</p>
                        </div>
                      </div>  
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 no-padding">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/backgrounds/fees-and-fundings-bg.jpg" class="width-100-percent">
                </div>
                <div class="col-md-6 ">
                    <div class="fees-and-funding-details">
                      <h1 class="proximanova-bold ">Flexi Payment</h1>
                      <p class="text-indent-50">      Talk to us we can arrange for your training schedule and your payment.</p>
                      <!-- <h1 class="proximanova-bold ">Government Funding</h1>
                      <p class="text-indent-50" >    It has been made accessible for every student to get the chance to be eligible in the government funded programs that will help you with your tuition cost. . Eligible student who have completed the qualification under the government subsidised program will no longer be eligible for another subsidised program</p> -->
                      <div class="clearfix" style="height: 50px;"></div>
                    </div>
                      
                </div>
                <div class="clearfix"></div>
                <div class="tab-content">
                  <div id="victoria" class="tab-pane fade in active">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h1 class="dark-green-font-color px-30-font text-uppercase proximanova-bold">Fees and Funding Victoria</h1>
                          <!-- <h2 class="px-20-font ">How much will I need to pay?</h2>
                          <p class="no-margin">Tuition fees vary and are based on different factors such as nominal study hours, qualification level and course type depending upon your eligibility result.</p>
                          <p class="no-margin">The government pays part of your training costs directly to Elite Training Institute.</p>
                          <p class="no-margin">You will pay the remaining training costs as a co-contribution fee to your registered training organisation.</p>
                          <br>
                          <p class="no-margin">The fee may be paid on your behalf by a third party such as your employer or your parents, but cannot be paid by Elite Training Institute.</p> -->

                          <h2 class="px-20-font ">Skills First program</h2>
                          <p>Upgrade your skills with the Victorian government subsidy program. The Victorian Training Guarantee makes vocational training more accessible to eligible students who do not hold a post-school qualification, or who want to gain a higher level qualification than they already hold.</p>
                          <br>
                          <p class="px-16-font">For fees please contact us at 0390880255  or email us to <a href="mailto:info@eti.edu.au" class="primary-font-color">info@eti.edu.au</a></p>

                        <!-- <div class="clearfix" style="height: 20px;"></div> -->

                          <div class="our-course-section no-padding">
                            <div class="container">
                              <div class="row">
                              <div class="course-list row" id="govt_funded">
                                  <div class="col-md-12">
                                    <h1 class="dark-green-font-color px-30-font text-uppercase proximanova-bold">Fees for CHILD CARE COURSES under skills first funding</h1>
                                  </div>

                                <?php $args_services=array('post_type'=>'courses','order'=>'ASC','posts_per_page' => -1);$services=new WP_Query($args_services);?>
                                <?php 
                                  // The Loop
                                  if ( $services->have_posts() ) {     
                                    while ( $services->have_posts() ) {
                                      $services->the_post(); ?>


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
                                              <div class="item-title center-block">
                                                <h3 class="proximanova-bold white-font-color px-18-font line-height-1 text-uppercase text-center no-margin center-position width-100-percent">(<?php the_field('course_code'); ?>) <?php the_title(); ?></h3>
                                              </div>
                                              <div class="item-content position-relative">


                                            <?php if( have_rows('course_fees') ): $i = 0; ?>
                                              <?php while( have_rows('course_fees') ): the_row(); $i++; 
                                                  // vars
                                                  $fee_title = get_sub_field('course_fees_title');
                                                  $fee_price = get_sub_field('course_fees_price');
                                                  $per_unit_title = get_sub_field('per_unit_fees_title');
                                                  $per_unit_price = get_sub_field('per_unit_fees_price');
                                              ?>

                                                <table width="100%">
                                                  <tbody>
                                                    <tr>
                                                      <td width="70%" class="text-align-center"><b><?php echo $fee_title; ?></b></td>
                                                      <td width="30%"><?php echo $fee_price; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-align-center"><i><?php echo $per_unit_title; ?></i> </td>
                                                      <td><?php echo $per_unit_price; ?></td>
                                                    </tr>
                                                  </tbody>
                                                </table>

                                                <?php endwhile; ?>
                                              <?php endif; ?>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-12">
                                                  <div class="center-position width-100-percent">
                                                    <a href="<?php the_permalink(); ?>" class="item-explore-cta-btn proximanova-semibold px-18-font center-block text-uppercase">More Details</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                    </div>

                                <?php }
                                    } else { ?>
                                    <h3 class="text-center text-uppercase">No course found</h3>
                                <?php } ?>
                                <?php wp_reset_postdata();?>
                                <div class="cleafix"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <ul class="download-section large-block-grid-2 medium-block-grid-2 small-block-grid-1 centered-last-row">
                            <!-- <li>
                              <a href="http://eti.edu.au/files/documents/vic/Skills%20First%20Statement%20of%20Fees.pdf" target="_blank" class="display-block"> 
                                <div class="text-center proximanova-bold">
                                  <h5 class="no-margin">
                                    <i class="fa fa-download" aria-hidden="true"></i>&nbsp;Download
                                  </h5>
                                  <span>Skills First Funding</span>
                                </div>
                              </a>
                            </li> -->
                            <li>
                              <a href="https://eti.edu.au/files/documents/vic/Statement%20of%20Fees.pdf" class="display-block"> 
                                <div class="text-center proximanova-bold">
                                  <h5 class="no-margin">
                                    <i class="fa fa-download" aria-hidden="true"></i>&nbsp;Download
                                  </h5>
                                  <span>Statement of Fees</span>
                                </div>
                              </a>
                            </li>
                          </ul>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="clearfix"></div>
          </section>
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>