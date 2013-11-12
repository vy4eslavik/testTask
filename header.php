<?php
/**
 * User: vy4eslavik
 * Date: 10.11.13
 *
 * The Header theme.
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- disable iPhone inital scale -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <title>
        <?php
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
        ?>
    </title>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/media_queries.css" />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/jQuery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/index.js"></script>

</head>
<body <?php body_class(); ?>>
    <aside class="leftCol">

        <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php print get_header_image() ?>" alt="logo" /></a>

        <?php wp_nav_menu( array(
            'menu_class'=> 'leftCol_menu',
            'container' => 'nav',
            'depth'     => 1)
        ); ?>

        <footer class="leftCol-footer">
            <span class="pipeAfter"><a href="#">About</a></span>
            <a href="#">Contact</a>

            <div class="social">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="twitter"/></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="facebook"/></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.jpg" alt="youtube"/></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social.jpg" alt="social"/></a>
            </div>
        </footer>
    </aside>

    <section class="rightCol">

        <header class="generalHeader">
            <div class="spacer"></div>
            <span class="pipeAfter"><a href="#">Stay in touch</a></span>
            <span class="pipeAfter"><a href="#">Donate</a></span>

            <form method="get" name="searchform" id="searchform">
                <input type="text" name="s" id="s" class="searchInput" value="Search"/>
                <div onclick="document.forms['searchform'].submit();" class="searchIcon"></div>
            </form>
        </header>