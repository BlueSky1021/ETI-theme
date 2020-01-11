      </div>
      <!-- END MAIN CONTENT -->
      <!-- FOOTER -->
      <footer id="footer" class="footer secondary-bg-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="logo-widget center-block">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/ETI-whitetext-logo.png" alt="" class="img-responsive" style="width: 300px !important;">
              </div>
              <div class="social-media-widget">
                <ul class="list-inline px-24-font center-block">
                  <li><a href="<?php echo get_option('of_facebook_link') ?>" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('of_twitter_link') ?>" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('of_linkedin_link') ?>" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('of_google_plus_link') ?>" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo get_option('of_instagram_link') ?>" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="menu-widget">
                <?php wp_nav_menu( array( 'theme_location'  => 'footer-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'list-inline px-12-font center-block text-uppercase','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>   
              </div>
              <div class="copyright-widget">
                <ul class="list-inline px-12-font center-block text-uppercase">
                  <li><span>Elite Training Institute PTY. LTD.  © <?php echo date('Y'); ?></span></li>
                  <li><span>RTO code  40965</span></li>
                  <li><span>CRICOS No  03470A</span></li>
                  <li><span>ABN number: 42 163 187 862</span></li>
                  <!-- <li><a href="http://eti.edu.au/files/documents/Privacy%20policy%20and%20Procedure.pdf" target="_blank">Privacy Policy</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- END FOOTER -->
    </main>
    <a title="Back To Top" class="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	
	
	<div id="contactnotif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ContactUsNotification">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body text-center">
                <h3 style="font-weight: bold; padding: 1em;" id="ContactUsNotification"></h3>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Slider JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/javascripts/scripts.js"></script>
	
<div id="contactnotif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ContactUsNotification">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body text-center">
                <h3 style="font-weight: bold; padding: 1em;" id="ContactUsNotification" class="dark-green-font-color"></h3>
            </div>
        </div>
    </div>
</div>

	<script>
		jQuery(window).on('load', function(){
			if( jQuery("#contact_form").hasClass('sent')) {
					  jQuery('#contactnotif').css('display','block');
					  jQuery("#contactnotif").modal("show");
					  jQuery('#ContactUsNotification').html('Thanks for contacting us! <br> We\'ll be in touch soon! ');
			  }
			  if( jQuery("#newsletter_subscribe").hasClass('sent')) {
					  jQuery('#contactnotif').css('display','block');
					  jQuery("#contactnotif").modal("show");
					  jQuery('#ContactUsNotification').html('Thanks for subscribing to <br> Our NEWSLETTER!<br>');
			  }
			  if( jQuery("#course_form").hasClass('sent')) {
					  jQuery('#contactnotif').css('display','block');
					  jQuery("#contactnotif").modal("show");
					  jQuery('#ContactUsNotification').html('Thanks for signing up! <br> Our team will contact you as soon as possible.');
			  }
			  if( jQuery("#enrolform").hasClass('sent')) {
					  jQuery('#contactnotif').css('display','block');
					  jQuery("#contactnotif").modal("show");
					  jQuery('#ContactUsNotification').html('Your information has been sent! <br> We\'ll be in touch soon..');
			  }
		});
	</script>
    <?php wp_footer(); ?>
  </body>
</html>