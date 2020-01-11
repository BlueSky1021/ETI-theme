<?php 
/*
Template name: Enrolment Form
*/
 ?>

<?php
$classes = get_body_class();
if (in_array('page-enrol',$classes)) {
?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<style>
  .enrolment-link,
  .enrolment-link:hover{background: #024B67; color: #FFFFFF; padding: 10px 5px;} 
  #menu-main-menu{margin: 20px 0 !important;}
</style>

<style>
  .page-hospitality-enrol .submit-btn,
  .page-hospitality-enrol .form-header,
  .page-hospitality-enrol .enrolment-link{background: #024b67 !important;}
</style>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/enrol-now-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Enrol</h1>
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
                    <div class="">
                        <div class="col-md-8 ">
            <?php echo do_shortcode('[contact-form-7 id="250" title="Enrol Form" html_id="enrolform" html_class="form-enrolment"]'); ?>
                       <?php /**  <form class="form-enrolment" action="" method="POST">

                          <div >
                            <div style="background: #006837; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Personal Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="firstname" class="form-label">First Name*:</label>
                                    <input type="text" class="form-control" id="firstname">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="surname" class="form-label">Surname*:</label>
                                    <input type="text" class="form-control" id="surname">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="dob" class="form-label">Date of Birth*:</label>
                                    <input type="text" class="form-control" id="dob">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="email" class="form-label">Email Address*:</label>
                                    <input type="text" class="form-control" id="email">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number*:</label>
                                    <input type="text" class="form-control" id="phone">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="mobile" class="form-label">Mobile Number:</label>
                                    <input type="text" class="form-control" id="mobile">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="company" class="form-label">Company / Organisation (optional):</label>
                                    <input type="text" class="form-control" id="company">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="usi" class="form-label">Unique Student Identification (USI)*:</label>
                                    <input type="text" class="form-control" id="usi">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                            <div class="clearfix" style="height: 50px;"></div>
                            <div style="background: #006837; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Address Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="postal_address" class="form-label">Postal Address*:</label>
                                    <input type="text" class="form-control" id="postal_address">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="address_line2" class="form-label">Address Line 2:</label>
                                    <input type="text" class="form-control" id="address_line2">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="state" class="form-label">State*:</label>
                                    <select name="" id="state" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="suburb" class="form-label">Suburb:</label>
                                    <select name="" id="suburb" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="postal_code" class="form-label">Postal Code*:</label>
                                    <input type="text" class="form-control" id="postal_code">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="clearfix" style="height: 50px;"></div>
                            <div style="background: #006837; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Course Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="course_name" class="form-label">Course Name*:</label>
                                    <select name="" id="course_name" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="course_location" class="form-label">Course Location*:</label>
                                    <select name="" id="course_location" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="comments" class="form-label">Comments (Optional):</label>
                                    <textarea name="" id="comments" cols="30" rows="10" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <div class="form-checkbox">
                                      <input type="checkbox" class="" id="form_agreement">
                                      <label for="form_agreement"></label>
                                    </div>
                                    <label for="" class="px-12-font" style="display: inline; margin-left:3px;">*By submitting your enrolment application you agree to comply with the terms and conditions outlined in our <a href="#" class="primary-font-color">Student Handbook</a></label> 
                                  </div>
                                </div>
                                <div class="col-lg-3 col-lg-offset-1">
                                  <div class="form-group">
                                    <button class="btn submit-btn display-block width-100-percent">Submit</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </form> **/ ?>
                          
                        </div>
                      <div class="col-md-4 ">

                          <div>
                            <div class="text-justify" style="border: 2px solid #E8E8E8; padding: 25px;">
                              <p class="line-height-2">From 1 January 2015 all students are to supply a Unique Student Identifier (USI) as part of their enrolment. We cannot issue a certificate unless we have a verified USI. If you have not yet registered for your USI please visit the Australian Government USI Registry www.usi.gov.au and sign up for your USI online, it only takes a couple of minutes.</p>
                            </div>
                            <div class="clearfix" style="height: 20px;"></div>
                            <div>
                              <a href="http://eti.edu.au/file/documents/qld/Domestic%20Enrolment%20Form%20(QLD).pdf" target="_blank"  class="enrolment-link text-center display-block proximanova-bold px-14-font" download>Download Queensland Enrolment Form Here &nbsp;<i class="fa fa-download"></i></a>
                              <br>
                              <a href="http://eti.edu.au/file/documents/vic/Domestic%20Enrolment%20Form%20(VIC).pdf" target="_blank"  class="enrolment-link text-center display-block proximanova-bold px-14-font" download>Download Victoria Enrolment Form Here &nbsp;<i class="fa fa-download"></i></a>
                              <br>
                              <a href="http://eti.edu.au/file/documents/intl/ETI%20International%20Enrolment%20Application%20Form.pdf" target="_blank"  class="enrolment-link text-center display-block proximanova-bold px-14-font" download>Download International Enrolment Form Here &nbsp;<i class="fa fa-download"></i></a>
                            </div>
                          </div>

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
$(document).ready(function(){
  
  function buildLin(first) {
    var firs = first.toString();
    document.location.hash = "#" + firs.replace(/ /g, "_");
    }
     buildLin('enrol');

    $('#states').change(function() {populateCar()});  
  $("#course_name").append('<option value="" disabled selected>Select Course..</option>');
  $("#course_location").append('<option value="" disabled selected>Select Course Location..</option>');
  
    var vic = [<?php echo do_shortcode('[suburb_vic]');?> 'n/a'];
    var qld = [<?php echo do_shortcode('[suburb_qld]');?> "n/a"];
    var intl = ['N/A'];
    var cars =  {'Victoria': vic, 'Queensland': qld, 'International': intl}
    var brands = ['Victoria','Queensland', 'International']
    populateBrand()
  
  
    function populateBrand() {
        $("#states").empty();
        $("#states").append('<option value="" disabled selected>Select State..</option>');
        $.each(brands, function(v) {
            $('#states')
                .append($("<option></option>")
                .attr("value", brands[v])
                .text(brands[v]));
        });
    
    
    }


    function populateCar(event) {
        states = $("#states option:selected" ).text();
        $("#suburb").empty();
        for (let [k, v] of Object.entries(cars)) {
            if(k==states) {
                for (suburb in cars[states]) {
                    var opt = document.createElement("option");
                     $('#suburb')
                         .append($("<option></option>")
                         .attr("value", cars[states][suburb])
                         .text(cars[states][suburb]));
                }
            };
        }
      if ( states === 'International') {
        document.getElementById("postal_code").value = "N/A";
      }
    }
 
    $("#suburb").change(function () {
      var str = this.value;
      document.getElementById("postal_code").value = str.substring(0, 4);
    });
 
});

$('#contactnotif').on('hidden.bs.modal', function () {
  window.location.href = 'http://eti.edu.au/enrol/';
})
</script>

<?php } else { ?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<style>
  .enrolment-link,
  .enrolment-link:hover{background: #006837; color: #FFFFFF; padding: 10px 5px;} 
  #menu-main-menu{margin: 20px 0 !important;}
</style>

<style>
  .page-hospitality-enrol .submit-btn,
  .page-hospitality-enrol .form-header,
  .page-hospitality-enrol .enrolment-link{background: #024b67 !important;}
</style>

        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/enrolment-form-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Enrol</h1>
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
                    <div class="">
                        <div class="col-md-8 ">
            <?php echo do_shortcode('[contact-form-7 id="446" title="Hospitality Enrol Form" html_id="enrolform" html_class="form-enrolment"]'); ?>
                       <?php /**  <form class="form-enrolment" action="" method="POST">

                          <div >
                            <div style="background: #006837; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Personal Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="firstname" class="form-label">First Name*:</label>
                                    <input type="text" class="form-control" id="firstname">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="surname" class="form-label">Surname*:</label>
                                    <input type="text" class="form-control" id="surname">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="dob" class="form-label">Date of Birth*:</label>
                                    <input type="text" class="form-control" id="dob">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="email" class="form-label">Email Address*:</label>
                                    <input type="text" class="form-control" id="email">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number*:</label>
                                    <input type="text" class="form-control" id="phone">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="mobile" class="form-label">Mobile Number:</label>
                                    <input type="text" class="form-control" id="mobile">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="company" class="form-label">Company / Organisation (optional):</label>
                                    <input type="text" class="form-control" id="company">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="usi" class="form-label">Unique Student Identification (USI)*:</label>
                                    <input type="text" class="form-control" id="usi">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                            <div class="clearfix" style="height: 50px;"></div>
                            <div style="background: #006837; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Address Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="postal_address" class="form-label">Postal Address*:</label>
                                    <input type="text" class="form-control" id="postal_address">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="address_line2" class="form-label">Address Line 2:</label>
                                    <input type="text" class="form-control" id="address_line2">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="state" class="form-label">State*:</label>
                                    <select name="" id="state" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="suburb" class="form-label">Suburb:</label>
                                    <select name="" id="suburb" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="postal_code" class="form-label">Postal Code*:</label>
                                    <input type="text" class="form-control" id="postal_code">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="clearfix" style="height: 50px;"></div>
                            <div style="background: #006837; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Course Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="course_name" class="form-label">Course Name*:</label>
                                    <select name="" id="course_name" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="course_location" class="form-label">Course Location*:</label>
                                    <select name="" id="course_location" class="form-control">
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                      <option value="">state</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="comments" class="form-label">Comments (Optional):</label>
                                    <textarea name="" id="comments" cols="30" rows="10" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <div class="form-checkbox">
                                      <input type="checkbox" class="" id="form_agreement">
                                      <label for="form_agreement"></label>
                                    </div>
                                    <label for="" class="px-12-font" style="display: inline; margin-left:3px;">*By submitting your enrolment application you agree to comply with the terms and conditions outlined in our <a href="#" class="primary-font-color">Student Handbook</a></label> 
                                  </div>
                                </div>
                                <div class="col-lg-3 col-lg-offset-1">
                                  <div class="form-group">
                                    <button class="btn submit-btn display-block width-100-percent">Submit</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </form> **/ ?>
                          
                        </div>
                      <div class="col-md-4 ">

                          <div>
                            <div class="text-justify" style="border: 2px solid #E8E8E8; padding: 25px;">
                              <p class="line-height-2">From 1 January 2015 all students are to supply a Unique Student Identifier (USI) as part of their enrolment. We cannot issue a certificate unless we have a verified USI. If you have not yet registered for your USI please visit the Australian Government USI Registry www.usi.gov.au and sign up for your USI online, it only takes a couple of minutes.</p>
                            </div>
                            <div class="clearfix" style="height: 20px;"></div>
                            <div>
                              <a href="http://eti.edu.au/files/documents/qld/Domestic%20Enrolment%20Form%20(QLD).pdf" target="_blank"  class="enrolment-link text-center display-block proximanova-bold px-14-font" download>Download Queensland Enrolment Form Here &nbsp;<i class="fa fa-download"></i></a>
                              <br>
                              <a href="http://eti.edu.au/files/documents/vic/Domestic%20Enrolment%20Form%20(VIC).pdf" target="_blank"  class="enrolment-link text-center display-block proximanova-bold px-14-font" download>Download Victoria Enrolment Form Here &nbsp;<i class="fa fa-download"></i></a>
                              <br>
                              <a href="http://eti.edu.au/files/documents/intl/ETI%20International%20Enrolment%20Application%20Form.pdf" target="_blank"  class="enrolment-link text-center display-block proximanova-bold px-14-font" download>Download International Enrolment Form Here &nbsp;<i class="fa fa-download"></i></a>
                            </div>
                          </div>

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

<?php include(TEMPLATEPATH. '/includes/footer-hospitality.php'); ?>

<script>
$(document).ready(function(){
  
  function buildLin(first) {
    var firs = first.toString();
    document.location.hash = "#" + firs.replace(/ /g, "_");
    }
     buildLin('enrol');

    $('#states').change(function() {populateCar()});  
  $("#course_name").append('<option value="" disabled selected>Select Course..</option>');
  $("#course_location").append('<option value="" disabled selected>Select Course Location..</option>');
  
    var vic = [<?php echo do_shortcode('[suburb_vic]');?> 'n/a'];
    var qld = [<?php echo do_shortcode('[suburb_qld]');?> "n/a"];
    var intl = ['N/A'];
    var cars =  {'Victoria': vic, 'Queensland': qld, 'International': intl}
    var brands = ['Victoria','Queensland', 'International']
    populateBrand()
  
  
    function populateBrand() {
        $("#states").empty();
        $("#states").append('<option value="" disabled selected>Select State..</option>');
        $.each(brands, function(v) {
            $('#states')
                .append($("<option></option>")
                .attr("value", brands[v])
                .text(brands[v]));
        });
    
    
    }


    function populateCar(event) {
        states = $("#states option:selected" ).text();
        $("#suburb").empty();
        for (let [k, v] of Object.entries(cars)) {
            if(k==states) {
                for (suburb in cars[states]) {
                    var opt = document.createElement("option");
                     $('#suburb')
                         .append($("<option></option>")
                         .attr("value", cars[states][suburb])
                         .text(cars[states][suburb]));
                }
            };
        }
      if ( states === 'International') {
        document.getElementById("postal_code").value = "N/A";
      }
    }
 
    $("#suburb").change(function () {
      var str = this.value;
      document.getElementById("postal_code").value = str.substring(0, 4);
    });
 
});

$('#contactnotif').on('hidden.bs.modal', function () {
  window.location.href = 'http://eti.edu.au/enrol/';
})
</script>

<?php } ?>