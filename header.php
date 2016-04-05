<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
  <meta name="verify-v1" content="Fdi1eSX04B+ukk9RQz4XfaWBNE/OHec6UniTRR0dLHg=" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="<?php bloginfo(); ?>" />


  <title><?php wp_title(''); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/asu_template_lite_maroon.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/asu_print_lite.css" type="text/css" media="print" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />


  <!--[if lte IE 6]>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie-classic-maroon.css" type="text/css" media="screen" />
  <![endif]-->
  <!--[if IE 7]>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie-vista.css" type="text/css" media="screen" />
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie-print.css" type="text/css" media="print" />
  <![endif]-->


  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/thickbox.css" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


  <?php wp_head(); ?>

  <!--  Not found and causing errors --sjm 2012-05 -->
  <!--
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="http://template.asu.edu/asuthemes/2.0/javascript/menu.js"></script>
    <script type="text/javascript" src="http://template.asu.edu/asuthemes/2.0/javascript/external.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jq-easing.js"></script>
     -->

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jq-easing.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lavaLamp.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/slides.min.jquery.js"></script>

  <script type="text/javascript">
    //jQuery.noConflict();
    jQuery(function() { jQuery(".lavaLamp").lavaLamp({ fx: "backout", speed: 700}) });
  </script>

</head>
<body onload="">
  <!-- START SKIP LINKS FOR ACCESSIBILITY -->
    <ul class="skip">
      <li><a href="#asu_content">Skip to Content</a></li>
      <li><a href="#asu_nav">Skip to Menu</a></li>
    </ul>


  <!-- END SKIP LINKS -->
  <div id="asu_container">


    <!-- START GOLD HEADER -->
      <div id="asu_gold_hdr">
        <div id="header_inside">
            <!-- START ASU LOGO /asuthemes/2.0/includes/html/asu_logo_maroon.shtml -->

        <div id="asu_logo">
        <a href="/" title="NCE SMART Innovations"><img src="<?php bloginfo('template_url'); ?>/images/header_logo.jpg" alt="National Center of Excellence on SMART Innovations Logo" height="100" width="297" title="Arizona State University" /></a>
        </div>
      <!-- END ASU LOGO -->

      <!-- START UNIVERSAL NAV /asuthemes/2.0/includes/html/asu_universal_nav.shtml -->
      <ul id="asu_universal_nav">
        <li><a href="http://www.asu.edu/">ASU Home</a></li>
        <li><a href="http://www.asu.edu/index/">ASU A-Z Index</a></li>
        <li><a href="https://my.asu.edu/">My ASU</a></li>
        <li><a href="http://www.asu.edu/colleges/">Colleges &amp; Schools</a></li>
        <li><a href="http://www.asu.edu/directory/">Directory</a></li>
        <li class="no-border"><a href="http://www.asu.edu/map/">Map</a></li>
      </ul>
      <!-- END UNIVERSAL NAV -->

      <!-- START SIGNIN SEARCH MODULE /asuthemes/2.0/includes/html/asu_signin_search_open_div.shtml -->
      <div id="asu_login_search">
          <!-- START SEARCH MODULE /asuthemes/2.0/includes/html/asu_search_maroon.shtml -->
          <div id="asu_search_module">
              <!-- START GOOGLE SEARCH FORM -->
              <form action="https://search.asu.edu/search" method="get" name="gs">
                <label class="hidden" for="asu_search"><strong>Search</strong></label>
                <input type="text" name="q" size="32" value="Search" id="asu_search" class="asu_search_box" onfocus="if (this.defaultValue &amp;&amp; this.value == this.defaultValue) { this.value = ''; }" />
                <input type="image" name="op" src="<?php bloginfo('template_url'); ?>/images/asu_magglass_marnbg.jpg" value="Search" alt="Search" title="Search" class="asu_search_button" />
                <input name="sort" value="date:D:L:d1" type="hidden" />
                <input name="output" value="xml_no_dtd" type="hidden" />
                <input name="ie" value="UTF-8" type="hidden" />
                <input name="oe" value="UTF-8" type="hidden" />
                <input name="client" value="asu_frontend" type="hidden" />
                <input name="proxystylesheet" value="asu_frontend" type="hidden" />
              </form>
              <!-- END GOOGLE SEARCH FORM -->
          </div>
          <!-- END SEARCH MODULE -->

          <!-- CLEAR ALL FLOATS TO PROP OPEN THE HEADER -->
          <div class="clear">&nbsp;</div>

      </div>
      <!-- END SIGNIN SEARCH MODULE -->
    </div>
    </div>
    <div id="container">
      <div id="inside_container">
          <div id="header">

           <ul class="lavaLamp">
                    <li <?php if (is_home()) { echo "class=\"current_page_item\""; } ?>><a href="/">Home</a></li>
                    <li <?php if (is_category('news')) { echo "class=\"current_page_item\""; } ?>><a href="/category/news">News</a></li>
                      <?php wp_list_pages('depth=1&exclude=9,11,13&title_li='); ?>
                        <li <?php if (is_category()) { echo "class=\"current_page_item\""; } ?>><a href="/category/projects">Projects</a></li>

           </ul>
             <!--End nav_menu-->
          </div><!--End header-->
      <?php
        if(is_home()) {

        }
        else{ ?>
        <div id="page_title">
          <h1 class="page_title">
            <?php
              //This script displays the correct heading in the title bar

              //Check if page has a parent. If it does, display the parent
              if($post->post_parent) {
              $parent_title = get_the_title($post->post_parent) . " | " . get_the_title();
              echo $parent_title;
              }
              //If we are in a category of posts, display the cateogry title
              elseif(is_category()){
                single_cat_title();
              }
              //If we are on a single post, display the posts category
              elseif(is_single()){

                foreach((get_the_category()) as $category) {
                  echo $category->cat_name . ' ';
                }

              }
              else {
              the_title();
              }
            ?>
          </h1>
        </div>


        <?php
        /*
          Secondary Navigation
        */
        // First check if this is a page or a category
        if (is_page()) {
          if($post->post_parent) {
          $children = wp_list_pages("title_li=&child_of=" . $post->post_parent . "&echo=0"); }

          else {
          $children = wp_list_pages("title_li=&child_of=" . $post->ID . "&echo=0"); }

          if ($children) { ?>
          <ul class="secondary_nav">
            <?php echo $children; ?>
                  </ul>

          <?php
          }
        }
        // Check if this is a category
        if (is_category()){
          $this_category = get_category($cat);

          // If this is a parent category, list its children
          if (get_category_children($this_category->cat_ID) != "") {
            $catChildren = wp_list_categories("title_li=&child_of=" . $cat . "&echo=0");

          }

          // If this is a child of a parent, list the parent categories children
          else {
            $parent_category = get_category($this_category->category_parent);
            $catChildren = wp_list_categories("title_li=&child_of=" . $parent_category->cat_ID . "&echo=0");

          }

          // If a category parent does have children, display them.
          if ($catChildren) { ?>
            <ul class="secondary_nav"> <?php
              echo  $catChildren; ?>
            </ul>
        <?php
          }
        }

        ?>

        <?php
        }
        ?>
