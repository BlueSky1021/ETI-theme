<div class="comment-form-wrapper">

<!---------------------------------------------------------------------------------------------- Start --------------------------------------------------------------------------------------------------------------------------------->



	    	<!- Add Comment Body -->

		<?php /* The Comments Template — with, er, comments! */ ?>			
					<div id="comments">
		<?php /* Run some checks for bots and password protected posts */ ?>	
		<?php
			$req = get_option('require_name_email'); // Checks if fields are required.
			if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
				die ( 'Please do not load this page directly. Thanks!' );
			if ( ! empty($post->post_password) ) :
				if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
		?>
						<div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'eti-theme') ?></div>
					</div><!-- .comments -->
		<?php
				return;
			endif;
		endif;
		?>
		<?php /* Count the number of comments and trackbacks (or pings) */
		$ping_count = $comment_count = 0;
		foreach ( $comments as $comment )
			get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
		?>


	    	<div class="">
<!-- 	    		<div class="panel-heading wordpress-color border-radius-none white-color">
	    			<?php printf($comment_count > 0 ? __('<span>%d</span> Comments', 'eti-theme') : __('<span>No</span> Comment', 'eti-theme'), $comment_count) ?>
	    		</div> -->
	    		<div class="">
	    			<div class="">
	    				<!-- <div class="col-lg-1 no-padding"> -->
						<!-- <div class="author-avatar"> -->
							<!-- <?php commenter_avatar() ?> -->
	    						<!-- <img src="http://awfsfair.org/wp-content/uploads/2011/03/Headshot-Placeholder.png" class="img-responsive img-circle" alt="" > -->
	    					<!-- </div> -->
	    				<!-- </div> -->
	    				<div class="">
	    					<div class="add-comment-body">
							<?php /* If comments are open, build the respond form */ ?>
							<?php if ( 'open' == $post->comment_status ) : ?>
								<div id="respond">
						                                    <h1 class="dark-green-font-color px-20-font text-uppercase proximanova-bold no-margin" style="padding-left: 15px;"><?php comment_form_title( __('LEAVE A COMMENT', 'eti-theme'), __('<br>Post a Reply to %s', 'eti-theme') ); ?></h1>
						                                    <p style="padding-left: 15px;">Your email will not be published.</p>
								<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
									<div class="col-md-12">
										<p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'eti-theme'), get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>
									</div>
								<?php else : ?>
								<div class="formcontainer">	
									<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" class="form-template contact-us-form-page" method="POST">
										<?php if ( $user_ID ) : ?>
											<div class="col-md-12">
												<p id="login"><?php printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'eti-theme'),
													get_option('siteurl') . '/wp-admin/profile.php',
													wp_specialchars($user_identity, true),
													wp_logout_url(get_permalink()) ) ?>
												</p>
											</div>
										<?php else : ?>

									                                    <div class="col-md-6 ">
									                                      <div class="input-group">
									                                        <input class="form-control px-16-font" id="author" name="author"  type="text" placeholder="Name" value="<?php echo $comment_author ?>" required/>
									                                      </div>
									                                    </div>
									                                    <div class="col-md-6 ">
									                                      <div class="input-group">
									                                        <input class="form-control px-16-font" id="email" name="email"  type="text" placeholder="Email" value="<?php echo $comment_author_email ?>" required/>
									                                      </div>
									                                    </div>
									                                    <div class="clearfix"></div>
											<?php endif /* if ( $user_ID ) */ ?>
									                                    <div class="col-md-12 ">
									                                      <div class="input-group">
									                                        <textarea class="form-control px-16-font" id="comment" name="comment" cols="30" rows="10" placeholder="Message" name="c_name"></textarea>
									                                      </div>
									                                    </div>				
											<?php do_action('comment_form', $post->ID); ?>	

									                                    <div class="clearfix"></div>
									                                    <div class="col-md-12">
									                                      <button id="submit" name="submit" type="submit" class="btn submit-btn center-block" value="<?php _e('Post Comment', 'eti-theme') ?>">COMMENT</button><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
									                                    </div>
									                                    <div class="clearfix"></div>

												<?php comment_id_fields(); ?>  
												<?php /* Just … end everything. We're done here. Close it up. */ ?>  
									</form><!-- #commentform -->	
									<div class="clearfix" style="height: 50px;"></div>									
								</div><!-- .formcontainer -->
								<?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>
								</div><!-- #respond -->
								<?php endif /* if ( 'open' == $post->comment_status ) */ ?>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>

		<!-- Comment Content -->
		<div class="">
			<?php wp_list_comments('type=comment&callback=custom_comments'); ?>
		</div>

		<?php /* See IF there are comments and do the comments stuff! */ ?>						
		<?php if ( have_comments() ) : ?>
		<?php /* IF there are comments, show the comments */ ?>
		<?php if ( ! empty($comments_by_type['comment']) ) : ?>
		<!-- Post Comment Content -->

		<div id="comments-list" class="comments">
			<?php /* If there are enough comments, build the comment navigation  */ ?>					
			<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>
				<div id="comments-nav-above" class="comments-navigation">
					<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
				</div><!-- #comments-nav-above -->					
			<?php endif; ?>					
											
			<?php /* An ordered list of our custom comments callback, custom_comments(), in functions.php   */ ?>				
			<?php /* If there are enough comments, build the comment navigation */ ?>
			<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>					
				<div id="comments-nav-below" class="comments-navigation">
					<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
				 </div><!-- #comments-nav-below -->
			<?php endif; ?>									
		</div><!-- #comments-list .comments -->


<?php endif; /* if ( $comment_count ) */ ?>

<?php /* If there are trackbacks(pings), show the trackbacks  */ ?>
<?php if ( ! empty($comments_by_type['pings']) ) : ?>

<div id="trackbacks-list" class="comments">
	<h3><?php printf($ping_count > 1 ? __('<span>%d</span> Trackbacks', 'eti-theme') : __('<span>One</span> Trackback', 'eti-theme'), $ping_count) ?></h3>
		<?php /* An ordered list of our custom trackbacks callback, custom_pings(), in functions.php   */ ?>					
	<ol>
		<?php wp_list_comments('type=pings&callback=custom_pings'); ?>
	</ol>				
</div><!-- #trackbacks-list .comments -->			


<?php endif /* if ( $ping_count ) */ ?>
<?php endif /* if ( $comments ) */ ?>

</div><!-- #comments -->


<!---------------------------------------------------------------------------------------------- End --------------------------------------------------------------------------------------------------------------------------------->

</div>