<?php 
/*
Template name: Payment Form
*/
 ?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
<style>
  .enrolment-link,
  .enrolment-link:hover{background: #024B67; color: #FFFFFF; padding: 10px 5px;} 
  #menu-main-menu{margin: 20px 0 !important;}
  .verify-btn{padding: 8.7px 12px; background-color: #024B67; color: #FFFFFF;}
  .verify-btn:hover{background-color: #024B67; color: #FFFFFF;}
  #fbmsg .fbmsg-badge {z-index: 999 !important;}
  .ajs-button.ajs-cancel{display: none;}
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
                      <div class="col-md-8 ">
                        
                       <form id="payment_form" class="form-enrolment" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST">

                          <div>

                            <div style="background: #024B67; padding: 30px 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1">Billing Details</h2>
                            </div>
                            <div style="border-color: #E8E8E8; border-width: 0 2px 2px 2px; border-style: solid; padding: 30px 25px;">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="stud_loc" class="form-label">Study Type:</label>
                                    <select name="loc" id="stud_loc" class="form-control">
                                      <option value="">Please Select Study Type</option>
                                      <option value="local">Domestic</option>
                                      <option value="int">International</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="stud_id" class="form-label">Student ID*:
                                      <a class="text-primary"
                                      data-toggle="popover"
                                      data-trigger="hover"
                                      data-placement="top"
                                      data-html="true"
                                      data-content='<p class="px-12-font">Dont know or you forgot your Student ID? Please contact our Admission officer at these numbers. </p><p class="px-12-font no-margin"><b>VIC:</b> 03 9088 0255</p><p class="px-12-font no-margin"><b>QLD:</b> 07 3154 2859</p>'>  <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                    </label>
                                     <div class="input-group">
                                        <input type="text" class="form-control" id="stud_id" name="student_id" placeholder="">
                                        <span class="input-group-btn">
                                          <button class="btn btn-default verify-btn" type="button">Verify</button>
                                        </span>
                                      </div><!-- /input-group -->
                                  </div>
                                </div>
                                <div class="col-lg-3">
                                  <div class="form-group">
                                    <label for="firstname" class="form-label">First Name*:</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                    <input type="hidden" name="action" value="payment_form">
                                  </div>
                                </div>
                                <div class="col-lg-3">
                                  <div class="form-group">
                                    <label for="lastname" class="form-label">Last Name*:</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                  </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="country" class="form-label">Country*:</label>
                                    <?php 
                                     $results = $wpdb->get_results("SELECT * FROM tbl_country_identifier ORDER BY full_name ASC");
                                    ?>
                                    <select name="country" id="country" class="form-control">
                                        <option></option>
                                      <?php foreach ($results as $key => $country): ?>
                                        <option value="<?php echo $country->id ?>"><?php echo  $country->full_name ?> </option>
                                      <?php endforeach ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <?php 
                                     $results = $wpdb->get_results("SELECT * FROM tbl_suburbs ORDER BY suburban ASC");
                                    ?>

                                    <label for="city" class="form-label">City*:</label>
                                    <input type="text" class="form-control" id="city" name="city">
                                    <!-- <select name="city" id="city" class="form-control">
                                      <?php foreach ($results as $key => $city): ?>
                                        <option value="<?php echo $city->id ?>"><?php echo  $city->suburban ?> </option>
                                      <?php endforeach ?>
                                    </select> -->
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <?php 
                                     $results = $wpdb->get_results("SELECT * FROM tbl_state_identifier ORDER BY state_name ASC");
                                    ?>
                                    <label for="state" class="form-label">State*:</label>
                                    <input type="text" class="form-control" id="state" name="state">

                                    <!-- <select name="state" id="state" class="form-control">
                                      <?php foreach ($results as $key => $state): ?>
                                        <option value="<?php echo $state->id ?>"><?php echo  $state->state_name ?> </option>
                                      <?php endforeach ?>
                                    </select> -->
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="zip" class="form-label">Post Code*:</label>
                                    <input type="text" name="zip" class="form-control" id="zip">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="email" class="form-label">E-Mail*:</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="phone" class="form-label">Telephone*:</label>
                                    <input type="text" name="phone" class="form-control" id="phone">
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label for="address" class="form-label">Address*:</label>
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      <div class="col-md-4 ">

                          <div>
                            <div class="text-justify bg-info" style="border: 2px solid #E8E8E8; padding: 25px; margin-bottom: 10px;">
                              <h2 class="px-14-font no-margin display-inlineblock"><b>Amount to Pay</b></h2>
                              <!-- <span class="proximanova-bold px-20-font pull-right">$ 12,996.00</span> -->
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon white-bg-color" id="basic-addon"><b>AUD</b></span>
                                  <input type="number" name="amount" class="form-control text-right" aria-describedby="basic-addon">
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              <!-- <hr style="border-top: 2px solid #cacaca;"> -->
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/payments/payment-method-icons.png" alt="" class="img-responsive"> -->
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label for="card-number" class="form-label">Card Number:</label>
                                            <input type="number" name="card_num" class="form-control" placeholder="" aria-describedby="basic-addon" id="card-number">
                                            <!-- <div class="input-group">
                                              <span class="input-group-addon white-bg-color" id="basic-addon" style="border: 2px solid #E8E8E8; padding: 2px 10px !important;"><img src="<?php bloginfo('template_directory'); ?>/assets/images/payments/visa-icon.png" alt="" style="width: 50px;"></span>
                                            </div> -->
                                          </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                          <label for="expiry-date" class="form-label">Expiry Date:</label>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="card_expiry_month" class="form-label proximanova-semibold">Month:</label>
                                            <select name="card_expiry_month" id="card_expiry_month" class="form-control">
                                              <option value="01">01</option>
                                              <option value="02">02</option>
                                              <option value="03">03</option>
                                              <option value="04">04</option>
                                              <option value="05">05</option>
                                              <option value="06">06</option>
                                              <option value="07">07</option>
                                              <option value="08">08</option>
                                              <option value="09">09</option>
                                              <option value="10">10</option>
                                              <option value="11">11</option>
                                              <option value="12">12</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="card_expiry_year" class="form-label proximanova-semibold">Year:</label>
                                            <input type="number" name="card_expiry_year" class="form-control" id="expiry-date" placeholder="YYYY" maxlength="4"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                          </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label for="secure-code" class="form-label">Secure Code (CVV): 
                                              <a class="text-primary" 
                                              data-toggle="popover"
                                              data-trigger="hover"
                                              data-placement="top"
                                              data-html="true"
                                              data-content='<p class="px-12-font no-margin"><span class="proximanova-bold">The CVV Number ("Card Verification Value")</span> on your credit card or debit card is a 3 digit number on VISA®, MasterCard® and Discover® branded credit and debit cards.</p> <img src="<?php bloginfo('template_directory'); ?>/assets/images/payments/cvvcode.png" alt="" class="img-responsive">'>  <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                            </label>

                                            <input type="number" name="sec_code" class="form-control" id="secure-code" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                          </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label for="name-card" class="form-label">Name on Card:</label>
                                            <input type="text" name="name_card" class="form-control" id="name-card">
                                          </div>
                                        </div>
                                        <div class="clearfix"></div>
                                      </div>
                            </div>
                            <!-- <a href="#" class="dark-blue-font-color"><i class="fa fa-caret-left" aria-hidden="true"></i>&nbsp; Edit Billing Details</a> -->
                            <input  id="payment_submit" type="submit" value="Pay Now" disabled="disabled" class="btn btn-success btn-lg display-block width-100-percent" style="margin-top: 20px;">
                            <!-- <button class="btn btn-success btn-lg display-block width-100-percent" style="margin-top: 20px;"><i class="fa fa-lock" aria-hidden="true"></i> Submit Payment</button> -->
                          </div>

                      </div>
                                   
                      <div class="clearfix"></div>
                       </form>
                    </div>
                  </div>
                </div>
            </div>
            <div class="hidden">
            <!-- <div class=""> -->
              <form id="student_id_verify" class="form-enrolment" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST">
                <input type="text" id="verify_id" name="student_id">
                <input type="text" id="student_loc" name="student_loc">
                <input type="text" name="action" value="student_id_verify">
              </form>
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

<!-- ALERTIFY PAYMENT SUCCESS -->
<div style="display:none;">
<div class="payment-success-modal" class="">
  <center>
    <p style="font-size: 100px;color: #5cb85c;line-height: 100%;"><i class="fa fa-check-circle"></i></p>
    <p><span style="font-size: 34px;" class="payment_amount"></span><br> <span style="font-size: 24px;">Your Payment is complete.</span></p>
    <div class="clearfix" style="height: 30px;"></div>
    <p style="color: #024B67;">Verification Code: <br> <span class="trxn_code"> </span></p>
  </center>
  <div style="position: absolute;bottom: 0;">
      <p style="font-size: 12px">
        <i>
          <span><b>Note:</b> Transaction copy has been sent in your email. </span>
          <br>
          <span style="margin-left: 32px;">Please check your Inbox</span>
        </i>
      </p>
  </div>
  <div class="clearfix"></div>
</div>
</div>
<div style="display:none;">
<div class="validation-student-modal" class="">
  <center>
    <p class="validation_result_sign" style="font-size: 100px;line-height: 100%;"></p>
    <p><span style="font-size: 24px;" class="verification_result"></span></p>
  </center>
  <div class="clearfix"></div>
</div>
</div>
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.1/alertify.min.js"></script>

<script>
$(function () {
  $('[data-toggle="popover"]').popover();
})
</script>

<script type="text/javascript">
    // var alertLink = document.getElementById('payment_submit');
        
        // console.log(content);
        // $(alertLink).on('click', function () {
        
        //   // alertify.alert(content[0]).set('frameless', true); 
        // });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    // payment_form
    var content = document.querySelectorAll('.payment-success-modal');
    var content1 = document.querySelectorAll('.validation-student-modal');
    $('#stud_id').on('change', function(e){
      console.log($(this).val());
      $('#verify_id').val($(this).val());
    })

    $('#stud_loc').on('change', function(){
      // console.log($(this).find(':selected').val());
      $('#student_loc').val($(this).find(':selected').val())
    });


    $('.verify-btn').on('click', function(e){
      e.preventDefault();
      var noti = alertify.notify('Please wait...','success');
      var ajax_form_data = $('#student_id_verify').serialize();

      $.ajax({
          url:   '/wp-admin/admin-ajax.php',
          type: 'post',
          dataType: "JSON",
          data:  ajax_form_data
      })
      .done( function( response ) {
        if( response.status == 'error' ){
          noti.dismiss();

          // alertify.alert('Error','Student ID is invalid. Please contact our Admission team.');
          $('.verification_result').html('Student ID is invalid. Please contact our Admission team.');
          $('.validation_result_sign').html('<i style="color: #ff0000;" class="fa fa-times-circle"></i>');
          alertify.alert(content1[0]).set('frameless', false).setHeader('ETI - Student Verification Result'); 
          $('input[name=firstname]').val('');
          $('input[name=lastname]').val('');
          $('input[name=city]').val('');
          $('input[name=state]').val('');
          $('input[name=email]').val('');
          $('input[name=phone]').val('');
          $('#payment_submit').attr('disabled','disabled');
          // document.getElementById("payment_submit").attr("disabled");
        }else if( response.status == 'success' ){
          $('span.label-danger').remove();
          noti.dismiss();
          console.log(response.data);
          // alertify.alert('Success','Your Student ID information is valid!');
            $('input[name=firstname]').val(response.data[0].firstname);
            $('input[name=lastname]').val(response.data[0].lastname);
          if(response.data[0].int_status == null){
            
            $('input[name=city]').val(response.data[0].city);
            $('input[name=state]').val(response.data[0].state_name);
            $('input[name=email]').val(response.data[0].email_personal);
            $('input[name=phone]').val(response.data[0].mobile_number);
            if(response.data[0].postal_dlvr_box == null){
              if($('#student_loc').val() == 'int'){
                $('textarea[name=address]').val(response.data[0].current_address);
              }else{
              $('textarea[name=address]').val(`${response.data[0].bldg_property_name} ${response.data[0].flat_unit} ${response.data[0].street_num} ${response.data[0].street_name} ${response.data[0].state_name}`)
              }
            }else{
              $('textarea[name=address]').val(response.data[0].postal_dlvr_box);
            }
          }else{
            $('input[name=city]').val(response.data[0].int_city);
            $('select[name=country]').val(response.data[0].int_country);
            $('input[name=state]').val(response.data[0].state_province);
            $('input[name=email]').val(response.data[0].int_email_personal);
            $('input[name=phone]').val(response.data[0].telephone);
              $('textarea[name=address]').val(response.data[0].current_address);
          }
          
          $('.verification_result').html('Your Student ID information is valid!');
          $('.validation_result_sign').html('<i style="color: #5cb85c;" class="fa fa-check-circle"></i>');
          alertify.alert(content1[0]).set('frameless', false).setHeader('ETI - Student Verification Result'); 
          document.getElementById("payment_submit").removeAttribute("disabled");
          // $('#payment_submit').removeAttribute('disabled');
          // console.log(response);
        }else{
          noti.dismiss();
          alertify.alert('Error','Something went wrong. Please try again.');
          consoel.log(response);
        }
      })
      .fail( function() {
        alert('Something went wrong please try again');
      });
    });

    $('#payment_form').submit(function(e){
      e.preventDefault();
      var noti = alertify.notify('Processing your payment...','success');
      var ajax_form_data = $('#payment_form').serialize();

      $.ajax({
          url:   '/wp-admin/admin-ajax.php',
          type: 'post',
          dataType: "JSON",
          data:  ajax_form_data
      })
      .done( function( response ) {
        if( response.status == 'error' ){
          noti.dismiss();
          console.log(response.errors);
          $('span.label-danger').remove();  
          $.each(response.errors, function(key, value){
            if(value[0] != undefined){
              if(key == 'address'){
              $(`textarea[name=${key}]`).before(`<span class="label label-danger">${value[0]}</span>`)
              }
              if(key == 'country'){
              $(`select[name=${key}]`).before(`<span class="label label-danger">${value[0]}</span>`)
              }
              $(`input[name=${key}]`).before(`<span class="label label-danger">${value[0]}</span>`)
            }
          })
        }else if( response.status == 'success' ){
          $('span.label-danger').remove();
          noti.dismiss();
          // alertify.alert('Success','Your payment is completed.');
          $('.trxn_code').html(response.message);
          $('.payment_amount').html(response.amount);
          alertify.alert(content[0]).set('frameless', false).setHeader('ETI - PAYMENT'); 

          setTimeout(function(){ location.reload(); }, 5000);
          // document.getElementById("payment_submit").setAttribute('disabled');
          // console.log(response);
        }else{
          noti.dismiss();
          alertify.alert('Error', response.message);
          console.log(response);
        }
      })
      .fail( function() {
        alert('Something went wrong please try again');
      });
    });
  });
</script>