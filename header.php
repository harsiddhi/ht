<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php  wp_head();  ?>
    <link href="<?php echo get_template_directory_uri() ?>/assets/apt/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/apt/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/apt/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/apt/css/sprite.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/apt/css/apt.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/apt/css/apt-responcive.css" rel="stylesheet">

</head>
<body class="home" >


	<nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <a class="navbar-brand" href="/apt/inner.html">
            <span class="hidden-xs visible-home">
              <img class="logo-1 s-icon icon-apt-logo-white" src="<?php echo get_template_directory_uri() ?>/assets/apt/images/apt.gif" alt="Apt Webdesign">
              <img class="logo-2 s-icon icon-apt-icon-blue" src="<?php echo get_template_directory_uri() ?>/assets/apt/images/apt.gif" alt="">
            </span>
            <span class="visible-xs hidden-home">
              <img class="logo-1 s-icon icon-apt-logo-blue" src="<?php echo get_template_directory_uri() ?>/assets/apt/images/apt.gif" alt="Apt Webdesign">
              <img class="logo-2 s-icon icon-apt-icon-blue" src="<?php echo get_template_directory_uri() ?>/assets/apt/images/apt.gif" alt="">
            </span>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php wp_nav_menu( array(
    'theme_location' => 'top',
    'menu_id'        => 'top-menu',
    'menu_class'=> '[ul nav navbar-nav navbar-right]',
     // 'items_wrap'      => '<li></li>',
  ) ); ?>



        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

	<?php /*

	<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand" href="/apt/inner.html">
            <span class="hidden-xs visible-home">
              <img class="logo-1 s-icon icon-apt-logo-white" src="<?php bloginfo('template_directory');?>/assets/apt/images/apt.gif" alt="Apt Webdesign">
              <img class="logo-2 s-icon icon-apt-icon-blue" src="<?php bloginfo('template_directory');?>/assets/apt/images/apt.gif" alt="">
            </span>
                <span class="visible-xs hidden-home">
              <img class="logo-1 s-icon icon-apt-logo-blue" src="<?php bloginfo('template_directory');?>/assets/apt/images/apt.gif" alt="Apt Webdesign">
              <img class="logo-2 s-icon icon-apt-icon-blue" src="<?php bloginfo('template_directory');?>/assets/apt/images/apt.gif" alt="">
            </span>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">


				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
					'items_wrap' => '<li>%3$s</li>'


				) ); ?>

<?php */ ?>


<!--<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php /*_e( 'Skip to content', 'twentyseventeen' ); */?></a>

	<header id="masthead" class="site-header" role="banner">

<!--		--><?php /*//get_template_part( 'template-parts/header/header', 'image' ); */?>

		<?php /*if ( has_nav_menu( 'top' ) ) : */?>
<!--			<div class="navigation-top">
<!---->				<!--<div class="wrap">-->

                    <?php /*wp_nav_menu( array(
                        'theme_location' => 'top',
                        'menu_id'        => 'menu',
                    ) ); */?>
				<!--</div><!-- .wrap -->
			<!--</div>--><!-- .navigation-top -->
		<?php /*endif; */?>

<!--</header><!-- #masthead -->

	<?php
/*
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	/*if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;*/
	?>

	<!--<div class="site-content-contain">
		<div id="content" class="site-content">-->
