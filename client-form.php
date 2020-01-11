<?php 
/*
Template name: Client Form
*/
 ?>
<?php include(TEMPLATEPATH. '/includes/header.php'); ?>
<?php 
   	global $edb;
   	$country = $edb->get_results('SELECT * FROM avt_country_identifier ORDER BY full_name asc');
?>
 <!-- Bootstrap Datepicker CSS -->
 	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <style type="text/css">
    	form.form-template .form-control {height: 40px!important;}
    </style>
        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/all-contact-us-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Client Form</h1>
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
                     	<form class="form-template" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" id="client_form">
                     				<div class="col-md-12">
                                    	<h1 class="dark-green-font-color px-44-font proxima-bold no-margin" >Client Form</h1>
                                    </div>
                                   <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Student Provider ID:</label>
		                                           <input type="hidden" name="action" value="client_form">
		                                           <input type="text" name="student_provider" class="form-control" id="" value="">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Courtesy Title:</label>
		                                           <select name="title" class="form-control">
		                                           		<option value="Mr.">Mr</option>
		                                           		<option value="Ms.">Ms</option>
		                                           		<option value="Mrs.">Mrs</option>
		                                           </select>
		                                           <!-- <input type="text" name="title" class="form-control" id="" value="Mr"> -->
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Family Name:</label>
		                                           <input type="text" name="lname" class="form-control" id="" value="">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Given Names:</label>
		                                           <input type="text" name="fname" class="form-control" id="" value="">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for=""> Gender:</label>
		                                           <select name="gender" class="form-control">
		                                            <option></option>
		                                            <option value="Male">Male</option>
		                                            <option value="Female">Female</option>
		                                          </select>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
	                                       <div class="form-group">
	                                         <label for="">Date of Birth:</label>
	                                         <div class='input-group date' id='dob-date' >
	                                               <input type='text' name="dob" class="form-control"/>
	                                               <span class="input-group-addon">
	                                                   <i class="fa fa-calendar" aria-hidden="true"></i>
	                                               </span>
	                                           </div>
	                                        </div>
                                       </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Country Birth:</label>
		                                           <select name="country_birth" class="form-control">
														<?php 
															foreach ($country as $key => $value) {
																echo '<option value="'.$value->identifier.'">'.$value->full_name.'</option>';
															}
														?>
		                                           </select>
		                                           <!-- <input type="text" name="country_birth" class="form-control" id="" value=""> -->
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Nationality:</label>
		                                           <select name="nationality" id="nationality" class="form-control"></select>
		                                           <!-- <input type="text" class="form-control" id="" value=" "> -->
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Provider Arranged Overseas:</label>
		                                           <input name="provider_overseas" type="text" class="form-control" id="" value="">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">Student Health Cover (OSHC):</label>
		                                           <select name="health_cover" class="form-control">
			                                            <option></option>
			                                            <option value="0">No</option>
			                                            <option value="1">Yes</option>
		                                            </select>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">English Test Type:</label>
		                                           <select name="eng_test" class="form-control">
			                                            <option>International English Language Testing System (IELTS)</option>
			                                            <option>Others</option>
		                                            </select>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group">
		                                           <label for="">English Test Score:</label>
		                                           <input type="text" name="eng_score" class="form-control" id="" value="6.0">
		                                    </div>
		                                </div>
                                       <div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="" style="line-height: 1.5;">Comments:</label>
		                                    <textarea name="comment" id="" class="form-control" cols="30" rows="10" style="height: 130px!important;"></textarea>
		                                </div>
		                            </div>
		                             <div class="clearfix"></div>
                                    <div class="col-md-12">
                                      <button type="submit" class="btn submit-btn " name="submit" style="border-radius:5px;    padding: 10px 40px;">Submit</button>
                                      <div class="clearfix" style="height: 70px;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
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
	$(document).ready( function (){
		$.getJSON('https://gist.githubusercontent.com/tiveor/5444753e9919ffe74b41/raw/47e48c7575189ef7ee228e40153a1fa57b5864b1/nationalities.json', function( data ){

			for (var n of data ) {
				$('#nationality').append(`<option>${n}</option>`);
			}
		});

		$('#client_form').submit(function(event){
			event.preventDefault();
			var noti = alertify.notify('Please wait','success');
			var ajax_form_data = $('#client_form').serialize();

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
							$(`input[name=${key}]`).before(`<span class="label label-danger">${value[0]}</span>`)
						}
					})
				}else if( response.status == 'success' ){
					$('span.label-danger').remove();
					noti.dismiss();
					alertify.alert('Success','Your information is successfully added!');
					event.target.reset();
					// console.log(response);
				}else{
					noti.dismiss();
					alertify.alert('Error',`Something went wrong please try again`);
					consoel.log(response);
				}
			})
			.fail( function() {
				alert('Something went wrong please try again');
			})
		})

	})
	</script>