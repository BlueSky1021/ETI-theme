<?php 
/*
Template name: Request Certificate Page
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
<style>
    .input-placeholder{position:absolute; z-index: 99; font-weight: normal; top: 18px; padding: 0 20px; cursor: text;}
    .input-placeholder span{color: #c62828;}
    textarea{padding: 18px 20px !important;}
</style>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh70 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/contact-us-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Certificate Request Form</h1>
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
                    <div class="contactus-content">
                        <div class="col-md-12">
						
                          <form class="form-template contact-us-form-page" action="" method="POST">
                                    <h1 class="dark-green-font-color px-44-font proxima-bold no-margin" >Request for a Certificate</h1>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="input-group">
                                          <label for="name" class="input-placeholder">Name <span class="px-20-font vertical-align-middle">*</span></label>
                                          <input class="form-control px-16-font"  type="text" id="name"  name="" required/>
                                        </div>
                                      </div>
                                      <div class="col-md-6 ">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                          <label for="dob" class="input-placeholder">Date of Birth <span class="px-20-font vertical-align-middle">*</span></label>
                                          <input class="form-control px-16-font dob_datepicker"  type="text" id="dob" name="" required/>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="input-group">
                                          <label for="phone" class="input-placeholder">Phone Number <span class="px-20-font vertical-align-middle">*</span></label>
                                          <input class="form-control px-16-font"  type="text" id="phone" name="" required/>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="input-group">
                                          <label for="address" class="input-placeholder">Address <span class="px-20-font vertical-align-middle">*</span></label>
                                          <textarea name="" cols="30" rows="10" class="form-control" id="address"></textarea>
                                        </div>
                                      </div>
                                      <div class="col-md-6 ">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                          <label for="csd" class="input-placeholder">Course Start Date <span class="px-20-font vertical-align-middle">*</span></label>
                                          <input class="form-control px-16-font date_datepicker"  type="text" id="csd" name="" required/>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="input-group">
                                          <select name="" id="" class="form-control">
                                            <option value="">(CHC30113) Certificate III in Early Childhood Education and Care</option>
                                            <option value="">(CHC50113) Diploma of Early Childhood Education and Care</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="input-group">
                                          <label for="training_location" class="input-placeholder">Training Location <span class="px-20-font vertical-align-middle">*</span></label>
                                          <input class="form-control px-16-font"  type="text" id="training_location" name="" required/>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="input-group">
                                          <label for="trainer_name" class="input-placeholder">Trainer Name <span class="px-20-font vertical-align-middle">*</span></label>
                                          <input class="form-control px-16-font"  type="text" id="trainer_name" name="" required/>
                                        </div>
                                      </div>        
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 no-padding">
                                      <button type="submit" class="btn submit-btn pull-right" name="submit" style="border-radius:5px;    padding: 15px 40px;">Submit</button>
                                      <div class="clearfix" style="height: 70px;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                  </form>
                          
                        </div>
                      <div class="clearfix"></div>
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
<script>
$('.form-control')
.on( 'focus', function () { $(this).siblings('label').hide(); } )
.on( 'blur',  function () { if ( !$(this).val() ) $(this).siblings('label').show(); } );
</script>