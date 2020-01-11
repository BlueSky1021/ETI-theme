<?php 
/*
Template name:; Cash Payment Form
*/
 ?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

        <style>
          .validate-btn, .validate-btn:hover{background-color: #024B67; border: 1px solid #024B67; color: #FFFFFF; padding: 9px 12px;}
        </style>
        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/enrol-now-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Payment</h1>
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
                      <div class="col-md-12 ">
                        
                       <form id="payment_form" class="form-enrolment" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST">

                          <div>

                          <div style="background: #024B67; padding: 20px;">
                              <a href="https://eti.edu.au/finance/cash-payment/" class="btn btn-success display-inlineblock"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp; Back</a>
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1 display-inlineblock pull-right" style="line-height: 35px;">Cash Payment Form</h2>
                              <div class="clearfix"></div>
                          </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label for="student_id" class="form-label">Student ID:</label>
                                          <label for="" class="form-label" id="lblstudent"></label>
                                          <div class="input-group no-margin">
                                            <input type="text" class="form-control" id="student_id" name="student_id" value="151117-90">
                                            <span class="input-group-btn">
                                              <button class="validate-btn btn btn-default" type="button" id="btnvalidate" name="btnvalidate">Validate</button>
                                            </span>
                                          </div><!-- /input-group -->
                                          <!--<input type="hidden" name="action" value="payment_form">-->

                                          <input type="text" id="search_box"><br>
                                          <!-- search button -->
                                          <input type="button" id="search_button" value="Search">
                                          <!-- the div that will contain our search results -->
                                          <div id="search_results" style="padding:5px;"></div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label for="email" class="form-label">Email Address*:</label>
                                          <input type="text" class="form-control" id="email" name="email" value="test@test.com">
                                          <input type="hidden" name="action" value="payment_form">
                                      </div>
                                  </div>

                                  <div class="clearfix"></div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="firstname" class="form-label">First Name*:</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="JOHN">
                                    <input type="hidden" name="action" value="payment_form">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="lastname" class="form-label">Last Name*:</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="DEEP">
                                  </div>
                                </div>

                                  <div class="clearfix"></div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="zip" class="form-label">Amount*:</label>
                                    <input type="number" name="amount" class="form-control" id="amount" value="500">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="phone" class="form-label">Received by*:</label>
                                      <select class="form-control">
                                          <?php
                                                include_once "config.php";
                                                $path = $_SERVER['DOCUMENT_ROOT'];

                                                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

                                                if (mysqli_connect_errno()){
                                                    exit("Couldn't connect to the database: ".mysqli_connect_error());
                                                } else {
                                                    //echo 'Connected';
                                                    $sql = "SELECT * FROM vrx_users WHERE location = 'AU' AND is_active = 1";

                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        foreach ($result as $rs) {
                                                            echo '<option value=" ' . $rs['id'] . ' "> ' . $rs['username'] . ' </option>';
                                                        }
                                                    } else {
                                                        echo 'No results.';
                                                    }
                                                }
                                                    /*while ($row = $sql->fetch_assoc()) {
                                                        echo '<option value=" ' . $row['id'] . ' "> ' . $row['username'] . ' </option>';
                                                    }*/

                                          ?>
                                      </select>
                                    <!--<input type="text" name="phone" class="form-control" id="phone">-->
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="email" class="form-label">Note*:</label>
                                    <textarea type="" name="note" class="form-control" id="note">ok ok ok</textarea>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <button class="btn btn-lg display-block width-100-percent pull-right" style="margin-top: 20px;    background: #024B67;color: #fff;width: 200px;" id="btnsubmit" name="btnsubmit"> Submit Payment</button>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="clearfix"></div>
                       </form>
                    </div>
                  </div>
                </div>
            </div>
          </section>
        <!-- End Page Content Section -->
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
