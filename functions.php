<?php

// Functions Code Start

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('widgets');
add_theme_support('editor-style');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

include('admin/admin-blog.php');
include('admin/admin-course.php');
include('admin/admin-incoming_students.php');



add_action('admin_head', 'custom_styles');

function custom_styles()
{ ?>
  <style>
    .is-not-super-admin #wp-admin-bar-my-sites {
      display: none;
    }
  </style>
<?php
}

function se_154951_add_admin_body_class($classes)
{

  if (is_user_logged_in() && !is_super_admin()) {
    return "$classes is-not-super-admin";
  }
  // Or:
  // return "$classes my_class_1 my_class_2 my_class_3";
}

add_action('pre_user_query', 'yoursite_pre_user_query');
function yoursite_pre_user_query($user_search)
{
  global $current_user;
  $username = $current_user->user_login;

  if (($username == 'adminetidev') || ($username == 'adminqld') || ($username == 'adminvic') || ($username == 'adminintl')) {
    global $wpdb;
    $user_search->query_where = str_replace(
      'WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'admin_eti'",
      $user_search->query_where
    );
  }
}

add_filter('admin_body_class', 'se_154951_add_admin_body_class');

add_filter('wp_nav_menu_objects', 'network_primary_nav', 100, 2);

function network_primary_nav($menu_items, $args)
{
  global $blog_id;
  $menu_name = 'primary';

  if (($blog_id > 1) && $menu_name == $args->theme_location) {
    // to parent blog
    switch_to_blog(1);

    $locations = get_nav_menu_locations();

    // get primary nav of parent blog
    if (isset($locations[$menu_name])) {
      $menu       = wp_get_nav_menu_object($locations[$menu_name]);
      $menu_items = wp_get_nav_menu_items($menu->term_id);
    }

    // to child blog
    restore_current_blog();
  }

  return $menu_items;
}

function add_slug_body_class($classes)
{
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_slug_body_class');

//add dynamic menu
add_action('init', 'register_my_menus');
function register_my_menus()
{
  register_nav_menus(
    array(
      'top-menu' => __('Top Menu'),
      'main-menu' => __('Main Menu'),
      'footer-menu' => __('Footer Menu'),
      'site-option-top-menu' => __('Site Option Top Menu'),
      'site-option-page-menu' => __('Site Option Page Menu'),
      'childcare-site-option-page-menu' => __('Childcare Site Option Page Menu'),
      'hospitality-site-option-page-menu' => __('Hospitality Site Option Page Menu'),
      'hospitality-main-menu' => __('Hospitality Main Menu'),
      'hospitality-top-menu' => __('Hospitality Top Menu'),
      'hospitality-footer-menu' => __('Hospitality Footer Menu'),
      'carpentry-site-option-page-menu' => __('Carpentry Site Option Page Menu'),
      'custom-main-menu' => __('Custom Main Menu'),
      'custom-top-menu' => __('Custom Top Menu')
    )
  );
}

function adjust_the_wp_menu()
{
  $page = remove_submenu_page('index.php', 'my-sites.php');
}
add_action('admin_menu', 'adjust_the_wp_menu', 999);

function submenu_class($menu)
{

  $menu = preg_replace('/ class="sub-menu"/', '/ class="sub-menu dropdown-menu" /', $menu);

  return $menu;
}

add_filter('wp_nav_menu', 'submenu_class');

// Custom Comment

// Produces an avatar image with the hCard-compliant photo class
function commenter_link()
{
  $commenter = get_comment_author_link();
  if (ereg('<a[^>]* class=[^>]+>', $commenter)) {
    $commenter = ereg_replace('(<a[^>]* class=[\'"]?)', '\\1url ', $commenter);
  } else {
    $commenter = ereg_replace('(<a )/', '\\1class="url "', $commenter);
  }
  $avatar_email = get_comment_author_email();
  // $avatar = str_replace( "class='avatar", "class='photo avatar img-responsive img-circle", get_avatar( $avatar_email, 80 ) );
  // echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end commenter_link

function commenter_avatar()
{
  $avatar = str_replace("class='avatar", "class='photo avatar img-responsive img-circle", get_avatar($avatar_email, 80));
  echo $avatar;
}


// Custom callback to list comments in the eti-theme style
function multicultural_custom_comments($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  $GLOBALS['comment_depth'] = $depth;
  ?>


  <div>
    <ul class="comments-list no-bullet" id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
      <li>
        <div class="position-relative">
          <div>
            <div class="comment-image-wrapper">
              <?php echo get_avatar($id_or_email, $size, $default, $alt, $args); ?>
            </div>
          </div>
          <div class="comment-content" style="margin-left: 100px;">
            <div class="multicultural-comments"><?php comment_text() ?></div>
            <ul class="comments-option inline-list oslo-grey-font-color px-8-font no-margin">
              <li style="margin: 0 5px !important;">
                <?php // echo the comment reply link
                  if ($args['type'] == 'all' || get_comment_type() == 'comment') :

                    $extraclass = 'comment-reply display-inline-block-important';
                    echo preg_replace(
                      '/comment-reply-link/',
                      'comment-reply-link ' . $extraclass,
                      get_comment_reply_link(array_merge($args, array(
                        'add_below' => $add_below,
                        'reply_text' => __('Reply', 'eti-theme'),
                        'login_text' => __('Log in to reply.', 'eti-theme'),
                        'depth' => $depth,
                        'max_depth' => $args['max_depth']
                      ))),
                      1
                    );
                  endif;
                  ?>

              </li>
              <!--                   <li style="margin: 0 5px !important;"><a href="#"><i class="fa fa-share"></i>&nbsp;Share</a></li> -->
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </li>
    </ul>
  </div>
<?php } // end custom_comments


// Custom callback to list comments in the eti-theme style
function custom_comments($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  $GLOBALS['comment_depth'] = $depth;
  ?>
  <div class="col-lg-12">
    <ul class="list-unstyled" id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
      <li style="margin-bottom: 20px;">
        <div class="col-lg-12 comment-content-wrapper" style="border-left: 2px solid #006837; padding: 5px 10px;">
          <span class="px-14-font comment-details"><a href="#" class="jelly-bean-font-color proximanova-Semibold text-uppercase"><?php comment_author(); ?></a>
            <span class="tapa-font-color ">
              <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
              <?php printf(
                  __('Posted %1$s <span class="meta-sep">|</span> <a href="%2$s" title="Permalink to this comment">Permalink</a>', 'eti-theme'),
                  get_comment_date(),
                  '#comment-' . get_comment_ID()
                );
                edit_comment_link(__('Edit', 'eti-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?>
            </span>
          </span>
          <div class="comment-content">
            <?php comment_text() ?>
            <?php // echo the comment reply link
              if ($args['type'] == 'all' || get_comment_type() == 'comment') :

                $extraclass = 'primary-font-color proximanova-semibold px-14-font right comment-reply-link';
                echo preg_replace(
                  '/comment-reply-link/',
                  'comment-reply-link ' . $extraclass,
                  get_comment_reply_link(array_merge($args, array(
                    'add_below' => $add_below,
                    'reply_text' => __('Reply', 'eti-theme'),
                    'login_text' => __('Log in to reply.', 'eti-theme'),
                    'depth' => $depth,
                    'max_depth' => $args['max_depth']
                  ))),
                  1
                );
              endif;
              ?>
          </div>
        </div>
        <div class="clearfix"></div>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
<?php } // end custom_comments


// Custom callback to list pings
function custom_pings($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  ?>
  <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
    <div class="comment-author"><?php printf(
                                    __('By %1$s on %2$s at %3$s', 'eti-theme'),
                                    get_comment_author_link(),
                                    get_comment_date(),
                                    get_comment_time()
                                  );
                                  edit_comment_link(__('Edit', 'eti-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?>
    </div>
    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'eti-theme') ?>
    <div class="comment-content">
      <?php comment_text() ?>
    </div>
  <?php } // end custom_pings

  // End Custom Comment

  add_action('pre_get_posts', 'wpse5477_pre_get_posts');
  function wpse5477_pre_get_posts($query)
  {
    if (!$query->is_main_query() || $query->is_admin())
      return false;

    if ($query->is_category()) {
      $query->set('post_type', 'blogs');
      $query->set('posts_per_page', 5);
    }
    return $query;
  }


  // Pagination
  add_action('pre_get_posts', function ($q) {
    if (!is_admin() && $q->is_main_query() && $q->is_post_type_archive('blogs')) {
      $q->set('posts_per_page', 2);
    }
  });
  function custom_pagination($numpages = '', $pagerange = '', $paged = '')
  {
    if (empty($pagerange)) {
      $pagerange = 2;
    }
    global $paged;
    if (empty($paged)) {
      $paged = 1;
    }
    if ($numpages == '') {
      global $wp_query;
      $numpages = $wp_query->max_num_pages;
      if (!$numpages) {
        $numpages = 1;
      }
    }
    $pagination_args = array(
      'base'            => get_pagenum_link(1) . '%_%',
      'format'          => 'page/%#%',
      'total'           => $numpages,
      'current'         => $paged,
      'show_all'        => False,
      'end_size'        => 1,
      'mid_size'        => $pagerange,
      'prev_next'       => True,
      'prev_text'       => __('<i class="fa fa-long-arrow-left"></i>'),
      'next_text'       => __('<i class="fa fa-long-arrow-right"></i>'),
      'type'            => 'plain',
      'add_args'        => false,
      'add_fragment'    => ''
    );
    $paginate_links = paginate_links($pagination_args);
    if ($paginate_links) {
      echo "<div class='blog-pagination'>";
      // echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
      echo "</div>";
    }
  }

  // End Pagination

  add_filter('template_include', 'theme_archives');
  function theme_archives($template)
  {
    if (is_post_type_archive('courses')) {
      if ($_template = locate_template('admin/templates/archives/archive-course.php')) {
        //Template found, - use that
        $template = $_template;
      }
    }
    if (is_post_type_archive('blogs')) {
      if ($_template = locate_template('admin/templates/archives/archive-blog.php')) {
        //Template found, - use that
        $template = $_template;
      }
    }
    return $template;
  }

  add_filter('template_include', 'theme_singles');
  function theme_singles($template)
  {
    if (is_singular('courses')) {
      if ($_template = locate_template('admin/templates/singles/single-course.php')) {
        //Template found, - use that
        $template = $_template;
      }
    }
    if (is_singular('blogs')) {
      if ($_template = locate_template('admin/templates/singles/single-blog.php')) {
        //Template found, - use that
        $template = $_template;
      }
    }
    return $template;
  }

  add_filter('template_include', 'theme_categories');
  function theme_categories($template)
  {
    if (is_category('blogs')) {
      if ($_template = locate_template('admin/templates/categories/category-blog.php')) {
        //Template found, - use that
        $template = $_template;
      }
    }
    if (is_category('newsletter')) {
      if ($_template = locate_template('admin/templates/categories/category-newsletter.php')) {
        //Template found, - use that
        $template = $_template;
      }
    }
    return $template;
  }

  add_action('admin_head-nav-menus.php', 'wpclean_add_metabox_menu_posttype_archive');

  function wpclean_add_metabox_menu_posttype_archive()
  {
    add_meta_box('wpclean-metabox-nav-menu-posttype', 'Archives', 'wpclean_metabox_menu_posttype_archive', 'nav-menus', 'side', 'default');
  }

  function wpclean_metabox_menu_posttype_archive()
  {
    $post_types = get_post_types(array('show_in_nav_menus' => true, 'has_archive' => true), 'object');

    if ($post_types) :
      $items = array();
      $loop_index = 999999;

      foreach ($post_types as $post_type) {
        $item = new stdClass();
        $loop_index++;
        $item->object_id = $loop_index;
        $item->db_id = 0;
        $item->object = 'post_type_' . $post_type->query_var;
        $item->menu_item_parent = 0;
        $item->type = 'custom';
        $item->title = $post_type->labels->name;
        $item->url = get_post_type_archive_link($post_type->query_var);
        $item->target = '';
        $item->attr_title = '';
        $item->classes = array();
        $item->xfn = '';
        $items[] = $item;
      }

      $walker = new Walker_Nav_Menu_Checklist(array());

      echo '<div id="posttype-archive" class="posttypediv">';
      echo '<div id="tabs-panel-posttype-archive" class="tabs-panel tabs-panel-active">';
      echo '<ul id="posttype-archive-checklist" class="categorychecklist form-no-clear">';
      echo walk_nav_menu_tree(array_map('wp_setup_nav_menu_item', $items), 0, (object) array('walker' => $walker));
      echo '</ul>';
      echo '</div>';
      echo '</div>';

      echo '<p class="button-controls">';
      echo '<span class="add-to-menu">';
      echo '<input type="submit"' . disabled(1, 0) . ' class="button-secondary submit-add-to-menu right" value="' . __('Add to Menu', 'andromedamedia') . '" name="add-posttype-archive-menu-item" id="submit-posttype-archive" />';
      echo '<span class="spinner"></span>';
      echo '</span>';
      echo '</p>';

    endif;
  }

  function catch_that_image()
  {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if (empty($first_img)) { }
    return $first_img;
  }

  function remove_first_image($content)
  {
    if (!is_page() && !is_feed() && !is_feed() && !is_home()) {
      $content = preg_replace("/<img[^>]+\>/i", "", $content, 1);
    }
    return $content;
  }
  add_filter('the_content', 'remove_first_image');

  function new_excerpt_more($more)
  {
    return '...';
  }

  add_filter('excerpt_more', 'new_excerpt_more');

  function excerpt($limit)
  {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
      array_pop($excerpt);
      $excerpt = implode(" ", $excerpt) . '...';
    } else {
      $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
  }

  function content($limit)
  {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content) >= $limit) {
      array_pop($content);
      $content = implode(" ", $content) . '...';
    } else {
      $content = implode(" ", $content);
    }
    $content = preg_replace('/[.+]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
  }


  class WP_Query_Multisite extends WP_Query
  {

    var $args;

    function __construct($args = array())
    {
      $this->args = $args;
      $this->parse_multisite_args();
      $this->add_filters();
      $this->query($args);
      $this->remove_filters();
    }

    function parse_multisite_args()
    {
      global $wpdb;

      $site_IDs = $wpdb->get_col("select blog_id from $wpdb->blogs");
      if (isset($this->args['sites']['sites__not_in']))
        foreach ($site_IDs as $key => $site_ID)
          if (in_array($site_ID, $this->args['sites']['sites__not_in'])) unset($site_IDs[$key]);

      if (isset($this->args['sites']['sites__in']))
        foreach ($site_IDs as $key => $site_ID)
          if (!in_array($site_ID, $this->args['sites']['sites__in']))
            unset($site_IDs[$key]);

      $site_IDs = array_values($site_IDs);
      $this->sites_to_query = $site_IDs;
    }
    function add_filters()
    {

      add_filter('posts_request', array(&$this, 'create_and_unionize_select_statements'));
      add_filter('posts_fields', array(&$this, 'add_site_ID_to_posts_fields'));
      add_action('the_post', array(&$this, 'switch_to_blog_while_in_loop'));
      add_action('loop_end', array(&$this, 'restore_current_blog_after_loop'));
    }
    function remove_filters()
    {
      remove_filter('posts_request', array(&$this, 'create_and_unionize_select_statements'));
      remove_filter('posts_fields', array(&$this, 'add_site_ID_to_posts_fields'));
    }
    function create_and_unionize_select_statements($sql)
    {
      global $wpdb;
      $root_site_db_prefix = $wpdb->prefix;

      $page = isset($this->args['paged']) ? $this->args['paged'] : 1;
      $posts_per_page = isset($this->args['posts_per_page']) ? $this->args['posts_per_page'] : 10;
      $s = (isset($this->args['s'])) ? $this->args['s'] : false;
      foreach ($this->sites_to_query as $key => $site_ID) :
        switch_to_blog($site_ID);
        $new_sql_select = str_replace($root_site_db_prefix, $wpdb->prefix, $sql);
        $new_sql_select = preg_replace("/ LIMIT ([0-9]+), " . $posts_per_page . "/", "", $new_sql_select);
        $new_sql_select = str_replace("SQL_CALC_FOUND_ROWS ", "", $new_sql_select);
        $new_sql_select = str_replace("# AS site_ID", "'$site_ID' AS site_ID", $new_sql_select);
        $new_sql_select = preg_replace('/ORDER BY ([A-Za-z0-9_.]+)/', "", $new_sql_select);
        $new_sql_select = str_replace(array("DESC", "ASC"), "", $new_sql_select);
        if ($s) {
          $new_sql_select = str_replace("LIKE '%{$s}%' , wp_posts.post_date", "", $new_sql_select); //main site id
          $new_sql_select = str_replace("LIKE '%{$s}%' , wp_{$site_ID}_posts.post_date", "", $new_sql_select);  // all other sites
        }

        $new_sql_selects[] = $new_sql_select;
        restore_current_blog();
      endforeach;
      if ($posts_per_page > 0) {
        $skip = ($page * $posts_per_page) - $posts_per_page;
        $limit = "LIMIT $skip, $posts_per_page";
      } else {
        $limit = '';
      }
      $orderby = "tables.post_date DESC";
      $new_sql = "SELECT SQL_CALC_FOUND_ROWS tables.* FROM ( " . implode(" UNION ", $new_sql_selects) . ") tables ORDER BY $orderby " . $limit;
      return $new_sql;
    }

    function add_site_ID_to_posts_fields($sql)
    {
      $sql_statements[] = $sql;
      $sql_statements[] = "# AS site_ID";
      return implode(', ', $sql_statements);
    }

    function switch_to_blog_while_in_loop($post)
    {
      global $blog_id;
      if ($post->site_ID && $blog_id != $post->site_ID)
        switch_to_blog($post->site_ID);
      else
        restore_current_blog();
    }
    function restore_current_blog_after_loop()
    {
      restore_current_blog();
    }
  }


  add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

  function my_wp_nav_menu_objects($items, $args)
  {

    // loop
    foreach ($items as &$item) {

      // vars
      $icon = get_field('icon', $item);
      $icon_pos = get_field('icon_position', $item);

      // append icon
      if ($icon) {
        if ($icon_pos == 'first') {

          $item->title = '<i class="fa fa-' . $icon . '"></i> ' . $item->title;
        }
      }
      // prepend icon
      if ($icon) {
        if ($icon_pos == 'last') {
          $item->title .= ' <i class="fa fa-' . $icon . '"></i>';
        }
      }
    }

    // return
    return $items;
  }

  if (function_exists('acf_add_options_page')) {


    acf_add_options_sub_page(array(
      'page_title'  => 'Theme Options',
      'menu_title'  => 'Theme Options',
      'parent_slug' => 'themes.php',
    ));
  }

  /*** ALONA widgets for diff blogs ***/

  function widgets_multisite()
  {
    global $blog_id;

    switch ($blog_id) {
      case 2:  //QLD
        register_sidebar(array(
          'name'          => __('Primary Sidebar2', 'ETI'),
          'id'            => 'sidebar-1',
          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
          'after_widget'  => '</aside>',
          'before_title'  => '<h1 class="widget-title">',
          'after_title'   => '</h1>',
        ));
        break;

      case 3: //VIC
        register_sidebar(array(
          'name'          => __('Primary Sidebar3', 'ETI'),
          'id'            => 'sidebar-1',
          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
          'after_widget'  => '</aside>',
          'before_title'  => '<h1 class="widget-title">',
          'after_title'   => '</h1>',
        ));
        break;

      case 4: //INTL
        register_sidebar(array(
          'name'          => __('Primary Sidebar4', 'ETI'),
          'id'            => 'sidebar-intl',
          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
          'after_widget'  => '</aside>',
          'before_title'  => '<h1 class="widget-title">',
          'after_title'   => '</h1>',
        ));
        break;

      default:
        register_sidebar(array(
          'name'          => __('Primary Sidebar1', 'ETI'),
          'id'            => 'sidebar-1',
          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
          'after_widget'  => '</aside>',
          'before_title'  => '<h1 class="widget-title">',
          'after_title'   => '</h1>',
        ));
    }
  }

  add_action('widgets_init', 'widgets_multisite');

  function send_via_smtp($phpmailer)
  {
    $phpmailer->isSMTP();
    $phpmailer->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    $phpmailer->SetFrom("info@eti.edu.au", "Info ETI");
    //$phpmailer->addAddress('it.alonab@gmail.com', 'Info ETI');
    //$phpmailer->addAddress('info@eti.edu.au', 'Info ETI');
    //$phpmailer->AddReplyTo("replyto@jsjplumbing.com.au", "Info JSJ");
    $phpmailer->Host = "sia.eayana.com";
    $phpmailer->SMTPAuth = true; // require smtp authentication?
    $phpmailer->SMTPSecure = "tls";
    //$phpmailer->Port = 587; // port depends on security and server setup
    $phpmailer->Username = "admin@eti.edu.au";
    $phpmailer->Password = "admin123!@#";
  }
  add_action("phpmailer_init", "send_via_smtp");


  // Add Shortcode For Dropdown Contact Form 7 Enrol Form
  function select_suburbvic()
  {

    extract(shortcode_atts(array("id" => ''), $atts));
    $value = "";
    global $table_prefix, $wpdb, $user_level;
    //$table_name = $table_prefix . "opportunities";
    $table_name = "tbl_postcodes";

    $finds = $wpdb->get_results("SELECT id, postcode, state, concat(postcode,' - ', suburb) AS post_suburb FROM {$table_name} WHERE state = 'VIC'", ARRAY_A);
    if (sizeof($finds)) {
      foreach ($finds as $find) {
        $value .= "'" . $find["post_suburb"] . "' , ";
      }
      return $value;
    }
  }
  add_shortcode('suburb_vic', 'select_suburbvic');

  function select_suburbqld()
  {

    extract(shortcode_atts(array("id" => ''), $atts));
    $value = "";
    global $table_prefix, $wpdb, $user_level;
    //$table_name = $table_prefix . "opportunities";
    $table_name = "tbl_postcodes";

    $finds = $wpdb->get_results("SELECT concat(postcode,' - ', suburb)  AS post_suburb FROM {$table_name} WHERE state = 'QLD'", ARRAY_A);
    if (sizeof($finds)) {
      foreach ($finds as $find) {
        $value .= '"' . $find["post_suburb"] . '", ';
      }
      return $value;
    }
  }
  add_shortcode('suburb_qld', 'select_suburbqld');



  /*===================================
=            declare wpdb            =
===================================*/


  /*=====  End of declare wpdb  ======*/


  /*====================================
=            payment form            =
====================================*/

  require __DIR__ . '/classes/vendor/autoload.php';
  // use App\Lib\Qbo\Qbo;
  use Omnipay\Omnipay as Omnipay;
  use Omnipay\Common\CreditCard;
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  function generate_trxn_no($length = 12)
  {
    $nps = "";
    for ($i = 0; $i < $length; $i++) {
      $nps .= chr((mt_rand(1, 36) <= 26) ? mt_rand(97, 122) : mt_rand(48, 57));
      $nps = strtoupper($nps);
    }
    return $nps;
  }


  add_action('wp_ajax_nopriv_payment_form', 'payment_form');


  function payment_form($phpmailer)
  {
    date_default_timezone_set('Australia/Brisbane');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // define( 'WP_MEMORY_LIMIT', '256M' );
    // define( 'WP_DEBUG', true);
    global $edb;
    // include('classes/app/lib/Qbo/Qbo.php');
    // include('classes/app/lib/Qbo/QboConnection.php');
    // include('classes/app/lib/Qbo/QboApi.php');
    include('classes/FormAuth.php');
    // $qboInstance = new Qbo();


    // echo '<pre>';
    // var_dump(__DIR__ .'/classes/vendor/autoload.php');

    // include('classes/vendor/omnipay/common/src/Omnipay.php');
    // include('classes/vendor/omnipay/common/src/Omnipay.php')

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    $validator = new FormAuth;
    $rules = [
      'required' => [
        ['student_id'],
        ['firstname'],
        ['lastname'],
        ['address'],
        ['country'],
        ['amount'],
        ['card_num'],
        ['name_card'],
        ['sec_code'],
      ],
      'numeric' => [
        ['amount']
      ],
      'email' => [
        ['email']
      ],
      'lengthMin' => [
        ['sec_code', 3]
      ],
      'lengthMax' => [
        ['sec_code', 3]
      ]
    ];
    $alias = [
      'country' => 'Country',
      'card_num' => 'Card Number',
      'name_card' => 'Name on Card',
      'sec_code' => 'Security Code',
    ];
    $v = $validator->check($_POST, $rules, $alias);
    if ($v !== true) {
      // var_dump($v);
      echo json_encode(['status' => 'error', 'errors' => $v]);
      wp_die();
    } else {

      $int = 0;
      $dom = 0;

      $dede = $edb->get_results('SELECT student_id, firstname, lastname, email as email_personal, address as current_address FROM vrx_offer_letters WHERE student_id ="' . $_POST['student_id'] . '"');
      $dede2 = $edb->get_results('SELECT student_id , firstname , lastname, 
                              vrx_contacts_info.email_personal AS local_email_personal , mobile_number , avt_state_identifier.state_name ,
                              vrx_international_details.id AS int_status,
                              avt_postcodes_geo.suburb AS local_city,
                              vrx_international_details.city AS int_city,
                              vrx_international_details.current_address,
                               ( SELECT avt_country_identifier.id FROM avt_country_identifier WHERE avt_country_identifier.full_name = vrx_international_details.country) AS int_country,
                              vrx_international_details.email_personal AS int_email_personal,
                              vrx_international_details.telephone,
                              vrx_international_details.state_province,
                              vrx_address.bldg_property_name,vrx_address.flat_unit, vrx_address.street_num, vrx_address.street_name ,vrx_address.postcode 
                              FROM vrx_student_info
                              LEFT JOIN  vrx_persons ON persons_id = vrx_persons.id
                              LEFT JOIN  vrx_party ON  vrx_party.id = vrx_persons.party_id
                              LEFT JOIN  vrx_international_details ON vrx_international_details.party_id = vrx_party.id
                              LEFT JOIN  vrx_contacts_info ON vrx_party.id = vrx_contacts_info.party_id
                              LEFT JOIN  vrx_address ON vrx_party.id = vrx_address.party_id
                              LEFT JOIN  avt_state_identifier  ON vrx_address.state_identifier = avt_state_identifier.id
                              LEFT JOIN   avt_postcodes_geo ON vrx_address.location_suburb_town = avt_postcodes_geo.id WHERE student_id ="' . $_POST['student_id'] . '"');

      if ($dede != null) {
        $int = 1;
      }

      if ($dede2 != null) {
        $dom = 1;
      }

      if ($int == 0 && $dom == 0) {
        echo json_encode(['status' => 'data', 'message' => 'INVALID STUDENT ID']);
        wp_die();
        exit();
      }

      if ($_POST['amount'] < 20) {
        echo json_encode(['status' => 'data', 'message' => 'INVALID AMOUNT']);
        wp_die();
        exit();
      }


      try {
        $edb->query('START TRANSACTION');
        $trxn_id = 'ETI-' . generate_trxn_no(12);
        date_default_timezone_set("Australia/Melbourne");

        // $edb->insert('vrx_online_payments',$data1);
        // if($edb->last_error == ''){
        // echo 'success';
        // try {

        /*$gateway = Omnipay::create('NABTransact_SecureXML');

            $gateway->setMerchantId('6WZ0010'); //XYZ0010
            $gateway->setTransactionPassword('abc123'); //abcd1234

            $gateway->setTestMode(true);

            $card = new CreditCard([
                'firstName'   => 'Zieuew',
                'lastName'    => 'Tilapia',
                'number'      => '4444333322221111',
                'expiryMonth' => '12',
                'expiryYear'  => date('Y'),
                'cvv'         => '123',
                'type'        => 'BRAND_MASTERCARD',
                'email'       => 'caloy@gmail.com',
                'billingCountry'       => 'PH',    
            ]);*/

        $gateway = Omnipay::create('NABTransact_SecureXML');
        $gateway->setMerchantId('6WZ0010');
        $gateway->setTransactionPassword('TIzp2KHe'); //abc123
        $card = new CreditCard([
          'firstName'   => $_POST['firstname'],
          'lastName'    => $_POST['lastname'],
          'number'      => $_POST['card_num'],
          'expiryMonth' => $_POST['card_expiry_month'],
          'expiryYear'  => $_POST['card_expiry_year'],
          'cvv'         => $_POST['sec_code'],
          'email'       => $_POST['email'],
          //'type'        => 'BRAND_VISA',
          //'billingCountry'       => 'PH',
        ]);
        $gateway->setTestMode(false);

        $response = $gateway->purchase([
          'amount'        => $_POST['amount'],
          'transactionId' => $trxn_id,
          'currency'      => 'AUD',
          'card'          => $card,
        ])->send();

        // $paymentResponse = [];
        if ($response->isSuccessful()) {

          $data1 = [
            'student_id' => $_POST['student_id'],
            'trxn_code' => $trxn_id,
            'trxn_type_id' => '0',
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'address' => $_POST['address'],
            'country_id' => $_POST['country'],
            'state' => $_POST['state'],
            'city' => $_POST['city'],
            'postcode' => $_POST['zip'],
            'email_ad' => $_POST['email'],
            'contact_no' => $_POST['phone'],
            'amount' => $_POST['amount'],
            'card_number' => $_POST['card_num'],
            'name_on_card' => $_POST['name_card'],
            'card_expiry_month' => $_POST['card_expiry_month'],
            'card_expiry_year' => $_POST['card_expiry_year'],
            'card_type' => 'VISA',
            'cvv' => $_POST['sec_code'],
            'currency' => 'AUD',
            'response' => $response->getCode(),
            'remarks' => $response->getMessage(),
            'user_id' => '0',
            'created_at' => date('Y-m-d H:i:s'),
          ];

          $edb->insert('vrx_online_payments', $data1);
          /*=================================
              =            QBO STORE            =
              =================================*/

          // if($response->getMessage() == 'Approved'){
          $edb->query('COMMIT');
          // $qboauth = $wpdb->get_results('SELECT value FROM vrx_settings WHERE id="42"');

          // $qboInstance->getServiceInstance()->updateOAuth2Token($qboauth[0]->value);


          /*=====  End of QBO STORE  ======*/



          // print_r($response->getMessage());

          $template = file_get_contents(__DIR__ . '/includes/index.html');
          $template = str_replace('%student%', $_POST['firstname'] . ' ' . $_POST['lastname'], $template);
          $template = str_replace('%address%', $_POST['address'], $template);
          $template = str_replace('%date%', date('d-m-Y'), $template);
          $template = str_replace('%datetime%', date('d-m-Y H:i:s'), $template);
          $template = str_replace('%trxn_code%', $trxn_id, $template);
          $template = str_replace('%amount%', $_POST['amount'], $template);
          $template = str_replace('%cred_num%', $_POST['card_num'], $template);
          $template = str_replace('%cardexp%', $_POST['card_expiry_month'] . '/' . substr($_POST['card_expiry_year'], -2), $template);
          //Server settings
          $mail->SMTPOptions = array(
            'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
            )
          );
          // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
          $mail->isSMTP();                                      // Set mailer to use SMTP
          // $mail->Host = 'server.pwd.ldd.mybluehost.me';  // Specify main and backup SMTP servers
          $mail->Host = 'mail.eti.edu.au';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'admission@eti.edu.au';                 // SMTP username
          $mail->Password = 'Admission123!@#*';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom('admission@eti.edu.au', 'Elite Training Institute');
          $mail->addAddress($_POST['email']);               // Name is optional
          $mail->addCC('cardpayments@eti.edu.au');
          $mail->addCC('jurica@eti.edu.au');
          $mail->addCC('carmela@eti.edu.au');
          //Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Elite Training Institute - Payment Receipt';
          $mail->Body    = $template;

          $mail->send();
          $mail->ClearAllRecipients();
          $template = file_get_contents(__DIR__ . '/includes/index_for_client.html');
          $template = str_replace('%student%', $_POST['firstname'] . ' ' . $_POST['lastname'], $template);
          $template = str_replace('%student_id%', $_POST['student_id'], $template);
          // $template = str_replace('%date%',date('d-m-Y'),$template);
          // $template = str_replace('%datetime%',date('d-m-Y H:i:s'),$template);
          $template = str_replace('%trxn_code%', $trxn_id, $template);
          $template = str_replace('%amount%', $_POST['amount'], $template);
          //Server settings
          $mail->SMTPOptions = array(
            'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
            )
          );
          // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
          $mail->isSMTP();                                      // Set mailer to use SMTP
          // $mail->Host = 'server.pwd.ldd.mybluehost.me';  // Specify main and backup SMTP servers
          $mail->Host = 'mail.eti.edu.au';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'admission@eti.edu.au';                 // SMTP username
          $mail->Password = 'Admission123!@#*';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom('admission@eti.edu.au', 'Elite Training Institute');
          $mail->addAddress('accounts@eti.edu.au');     // Add a recipient
          $mail->addAddress('dsaraswat@sherwood.edu.au');     // Add a recipient
          $mail->addBCC('raman@eti.edu.au');     // Add a recipient
          //Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Elite Training Institute - Payment Notifications';
          $mail->Body    = $template;

          $mail->send();
          echo json_encode(['status' => 'success', 'message' => $trxn_id]);
          exit();
          wp_die();
        } else {
          $data1 = [
            'student_id' => $_POST['student_id'],
            //'trxn_code'=>'ETI-'.str_pad($seq, 12, 0, STR_PAD_LEFT),
            'trxn_code' => $trxn_id,
            'trxn_type_id' => '0',
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'address' => $_POST['address'],
            'country_id' => $_POST['country'],
            'state' => $_POST['state'],
            'city' => $_POST['city'],
            'postcode' => $_POST['zip'],
            'email_ad' => $_POST['email'],
            'contact_no' => $_POST['phone'],
            'amount' => $_POST['amount'],
            'card_number' => $_POST['card_num'],
            'name_on_card' => $_POST['name_card'],
            'card_expiry_month' => $_POST['card_expiry_month'],
            'card_expiry_year' => $_POST['card_expiry_year'],
            'card_type' => 'VISA',
            'cvv' => $_POST['sec_code'],
            'currency' => 'AUD',
            'response' => $response->getCode(),
            'remarks' => $response->getMessage(),
            'user_id' => '0',
            'created_at' => date('Y-m-d H:i:s'),
          ];

          $edb->insert('vrx_online_payments', $data1);
          // $edb->query('ROLLBACK');
          $edb->query('COMMIT');
          echo json_encode(['status' => 'data', 'message' => $response->getMessage()]);
          wp_die();
        }
      } catch (\Throwable $th) {
        //throw $th;

        $data1 = [
          'student_id' => $_POST['student_id'],
          //'trxn_code'=>'ETI-'.str_pad($seq, 12, 0, STR_PAD_LEFT),
          'trxn_code' => $trxn_id,
          'trxn_type_id' => '0',
          'firstname' => $_POST['firstname'],
          'lastname' => $_POST['lastname'],
          'address' => $_POST['address'],
          'country_id' => $_POST['country'],
          'state' => $_POST['state'],
          'city' => $_POST['city'],
          'postcode' => $_POST['zip'],
          'email_ad' => $_POST['email'],
          'contact_no' => $_POST['phone'],
          'amount' => $_POST['amount'],
          'card_number' => $_POST['card_num'],
          'name_on_card' => $_POST['name_card'],
          'card_expiry_month' => $_POST['card_expiry_month'],
          'card_expiry_year' => $_POST['card_expiry_year'],
          'card_type' => 'VISA',
          'cvv' => $_POST['sec_code'],
          'currency' => 'AUD',
          'response' => '@@',
          'remarks' => $th->getMessage(),
          'user_id' => '0',
          'created_at' => date('Y-m-d H:i:s'),
        ];

        $edb->insert('vrx_online_payments', $data1);
        // $edb->query('ROLLBACK');
        $edb->query('COMMIT');
        echo json_encode(['status' => 'data', 'message' => $th->getMessage()]);
        wp_die();
        exit();
      }
    }
  }

  /*=====  End of payment form  ======*/



  /*======================================
=            verify student            =
======================================*/

  add_action('wp_ajax_nopriv_student_id_verify', 'student_id_verify');

  function student_id_verify()
  {
    // try {
    //    global $edb;
    //   //code...
    // } catch (\Throwable $th) {
    //   //throw $th;
    //   echo $th->getMessage();
    // }

    global $edb;
    $edb->show_errors();
    // echo $wpdb;

    if ($_POST['student_loc'] == 'int') {
      // $edb->get_results('SET SQL_BIG_SELECTS=1');
      $dede = $edb->get_results('SELECT student_id, firstname, lastname, email as email_personal, address as current_address FROM vrx_offer_letters WHERE student_id ="' . $_POST['student_id'] . '"');
      if ($dede != null) {
        echo json_encode(['status' => 'success', 'data' => $dede]);
        wp_die();
      } else {
        echo $edb->last_error;
        echo json_encode(['status' => $edb->print_error]);
        wp_die();
      }
    } else {
      // $edb->get_results('SET SQL_BIG_SELECTS=1');
      $dede = $edb->get_results('SELECT student_id , firstname , lastname, 
                              vrx_contacts_info.email_personal AS local_email_personal , mobile_number , avt_state_identifier.state_name ,
                              vrx_international_details.id AS int_status,
                              avt_postcodes_geo.suburb AS local_city,
                              vrx_international_details.city AS int_city,
                              vrx_international_details.current_address,
                               ( SELECT avt_country_identifier.id FROM avt_country_identifier WHERE avt_country_identifier.full_name = vrx_international_details.country) AS int_country,
                              vrx_international_details.email_personal AS int_email_personal,
                              vrx_international_details.telephone,
                              vrx_international_details.state_province,
                              vrx_address.bldg_property_name,vrx_address.flat_unit, vrx_address.street_num, vrx_address.street_name ,vrx_address.postcode 
                              FROM vrx_student_info
                              LEFT JOIN  vrx_persons ON persons_id = vrx_persons.id
                              LEFT JOIN  vrx_party ON  vrx_party.id = vrx_persons.party_id
                              LEFT JOIN  vrx_international_details ON vrx_international_details.party_id = vrx_party.id
                              LEFT JOIN  vrx_contacts_info ON vrx_party.id = vrx_contacts_info.party_id
                              LEFT JOIN  vrx_address ON vrx_party.id = vrx_address.party_id
                              LEFT JOIN  avt_state_identifier  ON vrx_address.state_identifier = avt_state_identifier.id
                              LEFT JOIN   avt_postcodes_geo ON vrx_address.location_suburb_town = avt_postcodes_geo.id WHERE student_id ="' . $_POST['student_id'] . '"');
      // $dede = $wpdb->get_results('SELECT * FROM vrx_student_info WHERE student_id ="'.$_POST['student_id'].'"');
      if ($dede != null) {
        echo json_encode(['status' => 'success', 'data' => $dede]);
        wp_die();
      } else {
        echo json_encode(['status' => 'error']);
        wp_die();
      }
    }
  }

  /*=====  End of verify student  ======*/

  /*===================================
=            Client Form            =
===================================*/


  add_action('wp_ajax_nopriv_client_form', 'client_form');

  function client_form()
  {
    global $edb;
    $edb->show_errors();
    include('classes/FormAuth.php');
    $validator = new FormAuth;
    $rules = [
      'required' => [
        ['fname'], ['lname'], ['dob']
      ],
      'numeric' => [
        ['eng_score'],
      ]
    ];
    $alias = [
      'fname' => 'Given name',
      'lname' => 'Family name',
      'dob' => 'Date of birth',
    ];
    $v = $validator->check($_POST, $rules, $alias);
    if ($v !== true) {
      echo json_encode(['status' => 'error', 'errors' => $v]);
      wp_die();
    } else {
      // $wpdb->show_errors();
      $edb->query('START TRANSACTION');
      $error = [];

      /*----------  Party Data  ----------*/
      $party = [
        'party_type_id' => 5,
        'name'       => $_POST['fname'] . ' ' . $_POST['lname'],
        'active'     => 1,
        'created_at' => date('Y-m-d'),
      ];
      $_party = $edb->insert('vrx_party', $party);
      $party_id = $edb->insert_id;
      if ($edb->last_error != '') {
        array_push($error, $edb->print_error);
      }
      /*----------  Person Data  ----------*/
      $person = [
        'party_id'        => $party_id,
        'person_type'     => 1,
        'prefix'          => $_POST['title'],
        'gender'          => $_POST['gender'],
        'firstname'       => $_POST['fname'],
        'lastname'        => $_POST['lname'],
        'date_of_birth'   => DateTime::createFromFormat('d-F-Y', $_POST['dob'])->format('Y-m-d'),
      ];
      $_person = $edb->insert('vrx_persons', $person);
      $person_id = $edb->insert_id;
      if ($edb->last_error != '') {
        array_push($error, $edb->last_error);
      }
      /*----------  Client Info  ----------*/
      $client = [
        'persons_id'          => $person_id,
        'student_provider_id' => $_POST['student_provider'],
        'country_birth'       => $_POST['country_birth'],
        'nationality'         => $_POST['nationality'],
        'provider_overseas'   => $_POST['provider_overseas'],
        'health_cover'        => $_POST['health_cover'],
        'eng_test'            => $_POST['eng_test'],
        'eng_score'            => $_POST['eng_score'],
        'comments'            => $_POST['comment'],
      ];
      $_client = $edb->insert('vrx_person_client_info', $client);
      if ($edb->last_error != '') {
        array_push($error, $edb->last_error);
      }
      /*----------  check if inserted  ----------*/
      if ($_party && $_person && $_client) {
        $edb->query('COMMIT');
        echo json_encode(['status' => 'success']);
        wp_die();
      } else {
        $edb->query('ROLLBACK');
        echo json_encode(['status' => 'data', 'message' => $error]);
        wp_die();
      }
    }
  }

  /*=====  End of Client Form  ======*/

  /*===============================================
=            Certificate Application            =
===============================================*/


  add_action('wp_ajax_nopriv_certificate_application', 'certificate_application');


  /*----------  Capcha  ----------*/
  function certificate_application()
  {
    include('classes/FormAuth.php');
    global $wpdb;
    $validator = new FormAuth;
    $rules = [
      'required' => [
        ['firstname'], ['lastname'], ['training-location'], ['trainer'], ['usi-number'], ['email'], ['mobile']
      ],
      'numeric' => [
        ['mobile'],
      ]
    ];
    $alias = [
      'firstname' => 'Fist name',
      'lastname' => 'Last name',
      'training-location' => 'Training location',
      'trainer' => 'Trainer',
      'usi-number' => 'USI number',
    ];
    $v = $validator->check($_POST, $rules, $alias);
    if ($v !== true) {
      echo json_encode(['status' => 'error', 'errors' => $v]);
      wp_die();
    } else {
      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $pkey = '6LfLGnQUAAAAAO8DP5WPUkPsb5G79skghm5uJpwG';

      $response = file_get_contents($url . "?secret=" . $pkey . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR']);
      $capcha =  json_decode($response, true);

      if ($capcha['success']) {
        $edb->show_errors();
        $error = [];
        /*----------  cert req data  ----------*/
        $cert_req = [
          'fname'       => $_POST['firstname'],
          'lname'       => $_POST['lastname'],
          'mname'       => $_POST['middlename'],
          'postal_addr' => $_POST['postaladdress'],
          'email'       => $_POST['email'],
          'phone'       => $_POST['phone'],
          'mobile'      => $_POST['mobile'],
          'train_loc'   => $_POST['training-location'],
          'course_code' => $_POST['select-course'],
          'trainer'     => $_POST['trainer'],
          'dob'         => DateTime::createFromFormat('d-F-Y', $_POST['dob'])->format('Y-m-d'),
          'usi_number'  => $_POST['usi-number'],
          'created_at'  => date('Y-m-d H:i:s'),
        ];
        $cert = $edb->insert('vrx_cert_requests', $cert_req);
        if ($cert) {
          echo json_encode(['status' => 'success', 'message' => 'Your certificate request is being processes']);
          wp_die();
        } else {
          echo json_encode(['status' => 'data', 'message' => $edb->last_error]);
          wp_die();
        }
      } else {
        echo json_encode(['status' => 'data', 'message' => 'Capcha Error']);
        wp_die();
      }
    }
  }

  /*=====  End of Certificate Application  ======*/


  ?>