<?php
/*
Template name: Student Forms and Policy
*/
?>

<?php

$classes = get_body_class();
if (in_array('page-childcare-compliances', $classes)) {
  ?>
  <?php include(TEMPLATEPATH . '/includes/header.php'); ?>

<?php } else { ?>

  <?php include(TEMPLATEPATH . '/includes/header.php'); ?>

<?php } ?>

<style>
  .page-hospitality-compliances .student-policy-form-tabs .nav-tabs li a {
    background: rgba(6, 119, 162, 1);
  }

  .page-hospitality-compliances .student-policy-form-tabs .nav-tabs li.active a {
    background: rgba(2, 75, 103, 1);
  }

  .page-hospitality-compliances .student-policy-form-tabs .nav-tabs li.active a:after {
    border-color: rgba(2, 75, 103, 1) transparent;
  }

  .page-hospitality-compliances .banner-section {
    background-image: url('http://eti.edu.au/intl/wp-content/uploads/sites/4/2018/02/hospitality-Student-Forms-and-Policy-banner.jpg') !important;
  }
</style>
<!-- Banner Section -->
<section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/student-forms-and-policies-banner.jpg'); ">
  <div class="center-position-top-60 width-100-percent">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 grid-centered">
          <div class="banner-caption text-center white-font-color">
            <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Students Forms and Policy</h1>
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


<section id="scrolltodiv" class="inner-page-content-wrapper contactus-wrapper">
  <div>
    <div class="container">
      <div class="row">
        <div>
          <div class="col-lg-12">
            <div class="student-policy-form-tabs">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs large-block-grid-2 medium-block-grid-2 small-block-grid-1" role="tablist">
                <li role="presentation" class="active">
                  <div class="position-relative height-100-percent">
                    <a href="#student_policies" aria-controls="student_policies" role="tab" data-toggle="tab" class="proximanova-bold">
                      <!-- <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/student-policies/student-policies-icon.png" alt="" class="img-responsive"> -->
                      <span>Student Policies</span>
                    </a>
                  </div>
                </li>
                <li role="presentation">
                  <div class="position-relative height-100-percent">
                    <a href="#student_related_forms" aria-controls="student_related_forms" role="tab" data-toggle="tab" class="proximanova-bold">
                      <!-- <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/student-policies/student-related-forms-icon.png" alt="" class="img-responsive"> -->
                      <span>Student Related Forms</span>
                    </a>
                  </div>
                </li>
                <!-- <li role="presentation">
                              <div class="position-relative height-100-percent">
                                <a href="#compliance_accreditation" aria-controls="compliance_accreditation" role="tab" data-toggle="tab" class="proximanova-bold">
                                  <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/student-policies/compliance-accreditation-icon.png" alt="" class="img-responsive">
                                  <span>Compliance and Accreditation</span>
                                </a>
                              </div>
                            </li> -->
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="student_policies">

                  <?php if (have_rows('student_policies')) : ?>
                    <table width="100%" class="text-center">
                      <?php while (have_rows('student_policies')) : the_row();

                        // vars
                        $title = get_sub_field('policy_title');
                        $content = get_sub_field('policy_content');
                        $condition = get_sub_field('policy_condition');
                        $url = get_sub_field('policy_url');
                        $file = get_sub_field('policy_file');

                        ?>

                        <tr>
                          <td width="70%" class="text-uppercase"><?php echo $title; ?></td>
                          <td width="30%">
                            <?php
                            if ($condition == "url") { ?>
                              <a href="<?php echo $url; ?>" class="primary-font-color text-uppercase text-decoration-underline" target="_blank">View</a>
                            <?php
                          } elseif ($condition == "file") { ?>
                              <a href="<?php echo $file['url']; ?>" class="primary-font-color text-uppercase text-decoration-underline" target="_blank">View</a>
                            <?php
                          } else { ?>
                              <?php echo $content; ?>
                            <?php
                          }
                          ?>
                          </td>
                        </tr>

                      <?php endwhile; ?>

                    </table>

                  <?php endif; ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="student_related_forms">
                  <?php if (have_rows('student_related_forms')) : ?>
                    <table width="100%" class="text-center">
                      <?php while (have_rows('student_related_forms')) : the_row();

                        // vars
                        $title = get_sub_field('srf_title');
                        $content = get_sub_field('srf_content');
                        $condition = get_sub_field('srf_condition');
                        $url = get_sub_field('srf_url');
                        $file = get_sub_field('srf_file');

                        ?>

                        <tr>
                          <td width="70%" class="text-uppercase"><?php echo $title; ?></td>
                          <td width="30%">
                            <?php
                            if ($condition == "url") { ?>
                              <a href="<?php echo $url; ?>" class="primary-font-color text-uppercase text-decoration-underline" target="_blank">View</a>
                            <?php
                          } elseif ($condition == "file") { ?>
                              <a href="<?php echo $file['url']; ?>" class="primary-font-color text-uppercase text-decoration-underline" target="_blank">View</a>
                            <?php
                          } else { ?>
                              <?php echo $content; ?>
                            <?php
                          }
                          ?>
                          </td>
                        </tr>

                      <?php endwhile; ?>

                    </table>

                  <?php endif; ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="compliance_accreditation">
                  <?php if (have_rows('compliance_accreditation')) : ?>
                    <table width="100%" class="text-center">
                      <?php while (have_rows('compliance_accreditation')) : the_row();

                        // vars
                        $title = get_sub_field('ca_title');
                        $content = get_sub_field('ca_content');
                        $condition = get_sub_field('ca_condition');
                        $url = get_sub_field('ca_url');
                        $file = get_sub_field('ca_file');
                        ?>

                        <tr>
                          <td width="30%" class="text-uppercase"><?php echo $title; ?></td>
                          <td width="70%">
                            <?php
                            if ($condition == "url") { ?>
                              <a href="<?php echo $url; ?>" class="primary-font-color text-uppercase text-decoration-underline" target="_blank">View</a>
                            <?php
                          } elseif ($condition == "file") { ?>
                              <a href="<?php echo $file['url']; ?>" class="primary-font-color text-uppercase text-decoration-underline" target="_blank">View</a>
                            <?php
                          } else { ?>
                              <?php echo $content; ?>
                            <?php
                          }
                          ?>
                          </td>
                        </tr>

                      <?php endwhile; ?>

                    </table>

                  <?php endif; ?>
                </div>
              </div>

            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

$classes = get_body_class();
if (in_array('page-childcare-compliances', $classes)) {
  ?>
  <?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

<?php } else { ?>

  <?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

<?php } ?>