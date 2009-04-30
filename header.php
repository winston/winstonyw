<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
  <title><?php wp_title('::',true,'right'); ?><?php bloginfo('name'); ?></title>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description"  content="" />
  <meta name="keywords"     content="" />
  <meta name="author"       content="" />
  <link rel="shortcut icon" href="" type="image/x-icon" />
  <link rel="icon"          href="" type="image/x-icon" />
  <link rel="stylesheet"    href="<?php bloginfo('template_directory'); ?>/style.css"   type="text/css" media="screen" />
  <link rel="alternate"     href="" type="application/rss+xml" title="<?php bloginfo('name'); ?> - FeedBurner RSS Feed"/>
  <link rel="alternate"     href="<?php bloginfo('rss2_url'); ?>"        type="application/rss+xml" title="<?php bloginfo('name'); ?> - RSS"/>
  <link rel="pingback"      href="<?php bloginfo('pingback_url'); ?>" />
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/application.js"></script>
  <script type="text/javascript">var disqus_iframe_css = "<?php bloginfo('template_directory'); ?>/css/style.css";</script>
  <?php wp_head(); ?>
</head>

<body>
<div id="main_container">
  <div id="main_content">
    <div id="header">
      <div id="logo"><h1><a title="Home" class="no_style" href="/">Winston<span class="curly">{</span>yw<span class="curly">}</span></a></h1></div>
    </div>
    <div id="navigation">
      <ul>
        <li><a title="Home" href="/">HOME</a></li>
        <!-- Exclude Page ID 210: Google Custom Search Page: google_search.php -->
        <!-- <?php wp_list_pages('exclude=210&title_li='); ?> -->
      </ul>
    </div>