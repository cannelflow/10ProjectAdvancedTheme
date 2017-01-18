<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!--<meta name="author" content="">-->
    <!--<link rel="icon" href="../../favicon.ico">-->
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head() ; ?>
</head>

<body class="<?php body_class() ; ?>">

<header class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="blog-header">
          <h1 class="blog-heading">
            <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a>
            <small><?php bloginfo('description') ; ?></small>
          </h1>
          
        </div> <!-- blog-header -->
      </div> <!-- col-sm-8 -->
      <div class="col-sm-4">
        <div class="form">
          <form method="get" action="<?php esc_url(home_url('/')); ?>">
					<input type="text" name="s" placeholder="Search...">
				</form>
        </div>
      </div> <!-- col-sm-4 -->
    </div> <!-- row -->
  </div> <!-- container -->
</header> <!-- header -->

<nav class="navbar navbar-inverse navbar-custome">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button> <!-- navbar-header -->
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php 
                   $defaults = array(
                          'container'      => 'ul',
                          'theme_location' => 'primary',
                          'menu_class'     => 'nav navbar-nav',
                       );
                    wp_nav_menu($defaults);   
      ?>
    </div> <!-- navbar-collapse -->
  </div> <!-- container-fluid -->
</nav> <!-- nav -->