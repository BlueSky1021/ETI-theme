<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<div class="clearfix" style="height: 200px;"></div>


    <?php 
      $query = new WP_Query_Multisite( array( 'post_type' => 'post' ) );

      while( $query->have_posts() ) : $query->the_post();
          echo $blog_id . get_the_title() . "<br>";
      endwhile;

      wp_reset_postdata();
    ?>

<div class="clearfix" style="height: 100px;"></div>

<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>