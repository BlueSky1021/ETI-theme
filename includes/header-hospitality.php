 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php if( is_front_page() ) : ?><title><?php bloginfo('name'); ?> | <?php bloginfo('description');?></title><?php elseif( is_404() ) : ?><title>Page Not Found | <?php bloginfo('name'); ?></title><?php elseif( is_search() ) : ?><title><?php printf(__ ("Search results for '%s'", "theme"), attribute_escape(get_search_query())); ?> | <?php bloginfo('name'); ?></title><?php else : ?><title><?php echo wp_title(" | ", true, right);?> <?php bloginfo('name'); ?></title><?php endif; ?>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_option('of_custom_favicon') ?>"/>
    <link rel="icon" sizes="192x192" href="<?php echo get_option('of_custom_favicon') ?>">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/javascripts/view.js"></script>
    <style>
      .dropdown-toggle:after{font-family: 'FontAwesome'; content: "\f0d7"; margin-left: 5px;}
      .zsiq_floatmain.zsiq_theme8.siq_bR{display: block !important;}
    </style>
<!-- Arlan ETI zoho account -->
<!-- <script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"dbcd58051a7bd7c7351c315177522137e7d4abd76a3d9552913834592bbd2d44dd2d17059948953a524062b72dd862b8", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script> -->

<!-- Facebook Pixel Code --> 
<script> 
!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window,document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1556247507743881'); fbq('track', 'PageView'); 
</script> 
<noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=1556247507743881&ev=PageView &noscript=1"/> </noscript> 
<!-- End Facebook Pixel Code -->

  </head>
  <body <?php body_class(); ?>>
    <main id="main" class="main" role="main">
      <!-- HEADER -->
      <header id="header" class="header">

        <nav class="navbar navbar-default header-wrapper header-curve-style white-bg-color height-100-percent no-margin no-border">
          <div class="container header-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed transparent-bg-color" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://eti.edu.au/">
                <img alt="Brand" src="<?php bloginfo('template_directory'); ?>/assets/images/logos/ETI-coloredtext-logo.png" class="img-responsive">
              </a>
            </div>
            <!-- Collet the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <div class="row">
                <div class="col-lg-8 no-padding">
                  <div class="text-uppercase" style="margin-top: 10px;">
                    <div class="col-lg-12 no-padding">        

                      <?php wp_nav_menu( array( 'theme_location'  => 'hospitality-top-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'px-12-font proximanova-semibold nav navbar-nav navbar-right no-margin','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>   
                      <!-- <?php wp_nav_menu( array( 'theme_location'  => 'site-option-top-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'select-option-menu-list px-12-font proximanova-semibold white-font-color nav navbar-nav navbar-right no-margin international-domestic','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>  -->  
                    </div>
                    <div class="col-lg-12 no-padding">
                      <?php wp_nav_menu( array( 'theme_location'  => 'hospitality-main-menu','menu' => '','container' => 'ul','container_class' => '','container_id' => '','menu_class' => 'px-12-font proximanova-semibold nav navbar-nav navbar-right no-margin','menu_id' => '','echo' => true,'fallback_cb' => 'wp_page_menu','before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>','depth' => 0,'walker' => '') ); ?>   
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- END HEADER -->
      <!-- MAIN CONTENT -->
      <div id="main-content" class="main-content">