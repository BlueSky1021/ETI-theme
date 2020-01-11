<?php 
/*
Template name: Certificate Application
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<style type="text/css">
	form.form-template .form-control {height: 40px!important;}
</style>
<!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('https://eti.edu.au/wp-content/themes/ETI%20theme/assets/images/banners/all-contact-us-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-60-font no-margin text-uppercase line-height-1">CERTIFICATE RELEASE APPLICATION</h1>
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
        <section id="scrolltodiv" class="inner-page-content-wrapper">
              <div>
                <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                     	<div>
                     		<h1 class="primary-font-color line-height-1">Congratulations and thank you for choosing Elite Training Institute as your trusted training provider!</h1>
			                <p>To get your qualification certificate or your statement of attainment, please fill out the required information below.</p>
			                <p>We will be sending you your certificate or your statement of attainment through your given e-mail address. We post a hard copy only upon the student’s request.</p>
			                <p>Please Note: After training, Certificates or Statement of Attainments will be issued within fourteen (14) working or business days unless there are pending issues.</p>
			                <p>If you are unsure how to complete this form, please contact our student support team on VIC : (03) 9088 0287 or QLD : (07) 3180 2300.</p>
                     	</div>
                     	<br>
                     	<?php 
                     	global $edb;
                     	$courses = $edb->get_results('SELECT * FROM vrx_courses WHERE deleted_at IS NULL GROUP BY code');
                     	?>
                     	<div class="form-wrapper">
                     		<form id='cert_req' class="form-template" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                     			<div class="col-md-12">
                     				<h1 class="primary-font-color line-height-1">Apply for Certificate</h1>
                     			</div>
                     			 <div class="col-md-4">
		                              <div class="form-group">
		                                     <label for="">First Name:</label>
		                                     <input type="hidden" name="action" value="certificate_application">
		                                     <input type="text" name="firstname" class="form-control" id="" value="">
		                              </div>
		                          </div>
		                          <div class="col-md-4">
		                              <div class="form-group">
		                                     <label for="">Last Name:</label>
		                                     <input type="text" name="lastname" class="form-control" id="" value="">
		                              </div>
		                          </div>
		                          <div class="col-md-4">
		                              <div class="form-group">
		                                     <label for="">Middle Name:</label>
		                                     <input type="text" name="middlename" class="form-control" id="" value="">
		                              </div>
		                          </div>
		                          <div class="clearfix"></div>
		                          <div class="col-md-6">
		                          	<h1 class="primary-font-color line-height-1">Address</h1>
		                          	<div class="form-group">
		                                     <label for="">Postal Address:</label>
		                                     <input type="text" name="postaladdress" class="form-control" id="" value="">
		                              </div>
		                              <div class="form-group">
		                                     <label for="">Phone:</label>
		                                     <input type="text" name="phone" class="form-control" id="" value="">
		                              </div>
		                              <div class="form-group">
		                                     <label for="">Training Location:</label>
		                                     <select name="training-location" class="form-control">
		                                     		<option value=""></option>
		                                            <option value="VIC">Victoria</option>
		                                            <option value="QLD">Queensland</option>
		                                            <option value="INT">International</option>
		                                     </select>
		                              </div>
		                              <div class="form-group">
		                                     <label for="">Trainer:</label>
		                                     <input type="text" name="trainer" class="form-control" id="" value="">
		                              </div>
		                              <div class="form-group">
		                                     <label for="">USI Number:</label>
		                                     <input type="text" name="usi-number" class="form-control" id="" value="">
		                              </div>
		                          </div>
		                          <div class="col-md-6">
		                          	<h1 class="primary-font-color line-height-1">More Info</h1>
		                          	<div class="form-group">
		                                     <label for="">Email:</label>
		                                     <input type="text" name="email" class="form-control" id="" value="">
		                              </div>
		                              <div class="form-group">
		                                     <label for="">Mobile:</label>
		                                     <input type="text" name="mobile" class="form-control" id="" value="">
		                              </div>
		                              <div class="form-group">
		                                     <label for="">Select Course:</label>
		                                     <select name="select-course" class="form-control">
		                                     		<option value=""></option>
		                                            <?php 
		                                            	foreach ($courses as $key => $value) {
		                                            		echo '<option value="'.$value->code.'">'.$value->name.'</option>';
		                                            	}
		                                            ?>
		                                     </select>
		                              </div>
		                              <div class="form-group">
	                                         <label for="">Date of Birth:</label>
	                                         <div class='input-group date' id='dob-date' style="margin: 0;">
	                                               <input type='text' name="dob" class="form-control"/>
	                                               <span class="input-group-addon">
	                                                   <i class="fa fa-calendar" aria-hidden="true"></i>
	                                               </span>
	                                         </div>
	                                   </div>
		                              <div class="form-group">
		                                     <label for="">Captcha:</label>
		                                     <!-- <input type="text" name="mobile" class="form-control" id="" value=""> -->
		                                     <div class='input-group' id='' style="margin: 0;">
		                                     	<div class="g-recaptcha" data-sitekey="6LfLGnQUAAAAAFu5IHIrjK0eHOBrjE_SDN0PUbR4"></div>
	                                              <!--  <input type='text' class="form-control"/>
	                                               <span class="input-group-addon no-padding">
	                                                   <img src="https://eti.edu.au/wp-content/themes/ETI%20theme/assets/images/captcha/sample-captcha.JPG">
	                                               </span> -->
	                                         </div>
		                              </div>
		                          </div>
		                          <div class="col-md-12">
		                          	<!-- <input type="submit" name="submit" value="Submit"> -->
                                      <button type="submit" class="btn submit-btn " name="submit" style="border-radius:5px;    padding: 10px 40px;">Submit</button>
                                    </div>
                     		</form>

                     	</div>
                     </div>
                   </div>
                 </div>
              </div>
        </section>
<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>
<!-- Bootstrap Datepicker Plugin Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.1/alertify.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
	$(function () {
	      $('#dob-date').datetimepicker({
	            format: 'DD-MMMM-YYYY'
	        });
	   });

	$(document).ready(function(){
		$('#cert_req').submit(function(e){
			e.preventDefault();
			var noti = alertify.notify('Please wait','success');
			var ajax_form_data = $('#cert_req').serialize();

			$.ajax({
				url:   '/wp-admin/admin-ajax.php',
				type: 'post',
				dataType: "JSON",
				data:  ajax_form_data
			})
			.done( function( response ) {
				if( response.status == 'error' ){
					noti.dismiss();
					$('span.label-danger').remove();	
					$.each(response.errors, function(key, value){
						if(value[0] != undefined){
							if(key == 'training-location'){
								$(`[name=${key}]`).before(`<span class="label label-danger">${value[0]}</span>`)
							}
							$(`input[name=${key}]`).before(`<span class="label label-danger">${value[0]}</span>`)
						}
					})
				}else if( response.status == 'success' ){
					$('span.label-danger').remove();
					noti.dismiss();
					alertify.alert('Success','Your information is successfully added!');
					e.target.reset();
					// console.log(response);
				}else{
					noti.dismiss();
					alertify.alert('Error',`${response.message}`);
					consoel.log(response);
				}
			})
			.fail( function() {
				alert('Something went wrong please try again');
			})
		})
	})
</script>