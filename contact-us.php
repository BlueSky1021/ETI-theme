<?php
/*
Template name: Contact Us
*/
?>
<?php include(TEMPLATEPATH . '/includes/header.php'); ?>

<!-- Banner Section -->
<section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/all-contact-us-banner.jpg'); ">
  <div class="center-position-top-60 width-100-percent">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 grid-centered">
          <div class="banner-caption text-center white-font-color">
            <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Contact Us</h1>
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

          <?php
          $blog_id = get_current_blog_id();

          switch ($blog_id) {
            case 2:  //QLD 
              ?>
            <div class="col-md-6 ">
              <?php echo do_shortcode('[contact-form-7 id="112" title="Contact form QLD" html_class="form-template contact-us-form-page QLD" html_id="contact_form"]'); ?>
            </div>
            <div class="col-md-6 ">
              <div class="map-wrapper">
                <div id="VicgoogleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="Vic2googleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="QldgoogleMap" style="width:100%;height:150px;"></div>
              </div>
              <div class="clearfix" style="height: 30px;"></div>
              <ul class="list-block no-padding head-office">
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">HEAD OFFICE:</span>&nbsp;<span>20, Otter Street, Collingwood VIC 3066</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold "><span>69 Osborne Ave, Springvale VIC 3171</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">2/11 Cordelia Street, South Brisbane QLD 4101</span></p>
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">7 Clunies Ross Court Eight Mile Plains QLD 4113</span></p> -->
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">327 Bell Street, Pascoe Vale South VIC 3044</span></p> -->
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">VICTORIA:</span>&nbsp;<span>03 9088 0255</span></p>
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">QUEENSLAND:</span>&nbsp;<span>07 3154 2859</span></p>
                </li>
                <li>
                  <p class=" px-14-font no-margin"><b><i class="fa fa-globe " aria-hidden="true"></i></b> <span class="proxima-bold "> WEBSITE:</span>&nbsp;<span>http://www.eti.edu.au</span></p>
                </li>
                <!--<li>
                                                                            <p class=" px-14-font no-margin"><b><i class="fa fa-envelope " aria-hidden="true"></i></b> <span class="proxima-bold "> EMAIL:</span>&nbsp;<span><?php echo eae_encode_str('info@eti.edu.au'); ?></span></p>
                                                                          </li>-->
              </ul>
            </div>



            <?php
            break;

          case 3: //VIC
            ?>
            <div class="col-md-6 ">
              <?php echo do_shortcode('[contact-form-7 id="107" title="Contact form VIC" html_class="form-template contact-us-form-page VIC" html_id="contact_form"]'); ?>
            </div>
            <div class="col-md-6 ">
              <div class="map-wrapper">
                <div id="VicgoogleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="Vic2googleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="QldgoogleMap" style="width:100%;height:150px;"></div>
              </div>
              <div class="clearfix" style="height: 30px;"></div>
              <ul class="list-block no-padding head-office">
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">HEAD OFFICE:</span>&nbsp;<span>20, Otter Street, Collingwood VIC 3066</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold "><span>69 Osborne Ave, Springvale VIC 3171</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">2/11 Cordelia Street, South Brisbane QLD 4101</span></p>
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">7 Clunies Ross Court Eight Mile Plains QLD 4113</span></p> -->
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">327 Bell Street, Pascoe Vale South VIC 3044</span></p> -->
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">VICTORIA:</span>&nbsp;<span>03 9088 0255</span></p>
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">QUEENSLAND:</span>&nbsp;<span>07 3154 2859</span></p>
                </li>
                <li>
                  <p class=" px-14-font no-margin"><b><i class="fa fa-globe " aria-hidden="true"></i></b> <span class="proxima-bold "> WEBSITE:</span>&nbsp;<span>http://www.eti.edu.au</span></p>
                </li>
                <!--<li>
                                                                            <p class=" px-14-font no-margin"><b><i class="fa fa-envelope " aria-hidden="true"></i></b> <span class="proxima-bold "> EMAIL:</span>&nbsp;<span><?php echo eae_encode_str('info@eti.edu.au'); ?></span></p>
                                                                          </li>-->
              </ul>
            </div>



            <?php
            break;

          case 4: //INTL
            ?>
            <div class="col-md-6 ">
              <?php echo do_shortcode('[contact-form-7 id="107" title="Contact form INTL" html_class="form-template contact-us-form-page INTL" html_id="contact_form"]'); ?>
            </div>
            <div class="col-md-6 ">
              <div class="map-wrapper">
                <div id="VicgoogleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="Vic2googleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="Qld2googleMap" style="width:100%;height:150px;"></div>
              </div>
              <div class="clearfix" style="height: 30px;"></div>
              <ul class="list-block no-padding head-office">
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">HEAD OFFICE:</span>&nbsp;<span>20, Otter Street, Collingwood VIC 3066</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold "><span>69 Osborne Ave, Springvale VIC 3171</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">7 Clunies Ross Ct, Eight Mile Plains QLD 4113</span></p>
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">7 Clunies Ross Court Eight Mile Plains QLD 4113</span></p> -->
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">327 Bell Street, Pascoe Vale South VIC 3044</span></p> -->
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">VICTORIA:</span>&nbsp;<span>03 9088 0255</span></p>
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">QUEENSLAND:</span>&nbsp;<span>07 3154 2859</span></p>
                </li>
                <li>
                  <p class=" px-14-font no-margin"><b><i class="fa fa-globe " aria-hidden="true"></i></b> <span class="proxima-bold "> WEBSITE:</span>&nbsp;<span>http://www.eti.edu.au</span></p>
                </li>
                <!--<li>
                                                                          <p class=" px-14-font no-margin"><b><i class="fa fa-envelope " aria-hidden="true"></i></b> <span class="proxima-bold "> EMAIL:</span>&nbsp;<span><?php echo eae_encode_str('info@eti.edu.au'); ?></span></p>
                                                                        </li>-->
              </ul>
            </div>



            <?php
            break;

          default:
            ?>
            <div class="col-md-6 ">
              <?php echo do_shortcode('[contact-form-7 id="79" title="Contact Form" html_class="form-template contact-us-form-page DEFAULT" html_id="contact_form"]'); ?>
            </div>
            <div class="col-md-6 ">
              <div class="map-wrapper">
                <div id="VicgoogleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="Vic2googleMap" style="width:100%;height: 150px; margin-bottom: 15px;"></div>
                <div id="QldgoogleMap" style="width:100%;height:150px;"></div>
              </div>
              <div class="clearfix" style="height: 30px;"></div>
              <ul class="list-block no-padding head-office">
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">HEAD OFFICE:</span>&nbsp;<span>20, Otter Street, Collingwood VIC 3066</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold "><span>69 Osborne Ave, Springvale VIC 3171</span></p>
                  <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">2/11 Cordelia Street, South Brisbane QLD 4101</span></p>
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">7 Clunies Ross Court Eight Mile Plains QLD 4113</span></p> -->
                  <!-- <p class="px-14-font no-margin"><b><i class="fa fa-map-marker " aria-hidden="true"></i></b> <span class="proxima-bold ">327 Bell Street, Pascoe Vale South VIC 3044</span></p> -->
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">VICTORIA:</span>&nbsp;<span>03 9088 0255</span></p>
                </li>
                <li>
                  <p class="px-14-font no-margin"><b><i class="fa fa-phone " aria-hidden="true"></i></b> <span class="proxima-bold ">QUEENSLAND:</span>&nbsp;<span>07 3154 2859</span></p>
                </li>
                <li>
                  <p class=" px-14-font no-margin"><b><i class="fa fa-globe " aria-hidden="true"></i></b> <span class="proxima-bold "> WEBSITE:</span>&nbsp;<span>http://www.eti.edu.au</span></p>
                </li>
                <!--<li>
                                                                        <p class=" px-14-font no-margin"><b><i class="fa fa-envelope " aria-hidden="true"></i></b> <span class="proxima-bold "> EMAIL:</span>&nbsp;<span><?php echo eae_encode_str('info@eti.edu.au'); ?></span></p>
                                                                      </li>-->
              </ul>
            </div>



          <?php
        }
        ?>

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


<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO5-gl6ObeLD6aUjE7qtlWFl4i5xAhc7k"></script>


<!-- 2/11 Cordelia Street, South Brisbane QLD 4101 -->
<script>
  function initialize() {
    var position = new google.maps.LatLng(-27.4795569, 153.0182832);
    var mapProp = {
      center: position,
      zoom: 15,
      disableDefaultUI: false, //set to true to disable all map controls,
      scrollwheel: false, //set to true to enable mouse scrolling while inside the map area
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    var map = new google.maps.Map(document.getElementById("QldgoogleMap"), mapProp);
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      title: "Elite Institute of Australia"
    })
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- 2/11 Cordelia Street, South Brisbane QLD 4101 -->
<script>
  function initialize() {
    var position = new google.maps.LatLng(-27.5774232, 153.0957452);
    var mapProp = {
      center: position,
      zoom: 15,
      disableDefaultUI: false, //set to true to disable all map controls,
      scrollwheel: false, //set to true to enable mouse scrolling while inside the map area
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    var map = new google.maps.Map(document.getElementById("Qld2googleMap"), mapProp);
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      title: "Elite Institute of Australia"
    })
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- 20, Otter Street, Collingwood VIC 3066 -->
<script>
  function initialize() {
    var position = new google.maps.LatLng(-37.8004595, 144.9855661);
    var mapProp = {
      center: position,
      zoom: 15,
      disableDefaultUI: false, //set to true to disable all map controls,
      scrollwheel: false, //set to true to enable mouse scrolling while inside the map area
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    var map = new google.maps.Map(document.getElementById("VicgoogleMap"), mapProp);
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      title: "Elite Institute of Australia"
    })
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- 69 Osborne Ave, Springvale VIC 3171 -->
<script>
  function initialize() {
    var position = new google.maps.LatLng(-37.9458661, 145.1396021);
    var mapProp = {
      center: position,
      zoom: 15,
      disableDefaultUI: false, //set to true to disable all map controls,
      scrollwheel: false, //set to true to enable mouse scrolling while inside the map area
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    var map = new google.maps.Map(document.getElementById("Vic2googleMap"), mapProp);
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      title: "Elite Institute of Australia"
    })
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>