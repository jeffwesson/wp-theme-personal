<?php
/**
 * Theme Name: twbs-wp
 * Theme URI: http://jeffwesson.com
 * Author: Jeff Wesson
 * Author URI: http://jeffwesson.com/
 * Description: A simple blog theme utilizing Twitter Bootstrap 3.1.0.
 * Version: 1.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Tags: orange, white, blue, light, responsive, mobile-first
 * Text Domain: twbs-wp
 * This theme, like WordPress, is licensed under the GPL.
 * Use it to make something cool, have fun, and share what you've learned with others.
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name') ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <script src="js/modernizr.js"></script>
    <?php wp_enqueue_script("jquery") ?>
    <?php wp_head() ?>
</head>

<body>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.</p>
<![endif]-->


<div class="container">
    <header class="no-mobile">
        <hgroup class="row">
            <h1 class="col-sm-6 text-right"><?php bloginfo('name') ?></h1>

            <h2 class="col-sm-6 text-left"><?php bloginfo('description') ?></h2>
        </hgroup>
    </header>

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand<?php if ($_SERVER['REQUEST_URI'] == '/') echo ' current-menu-item'; ?> " href="/"><i class="fa fa-home"></i> &lt;frontend/&gt;</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <!-- WordPress menu (nav) -->
            <?php
            $defaults = array(
                'theme_location'  => 'header_nav',
                'menu'            => 'header_menu',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'nav navbar-nav',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );
            wp_nav_menu( $defaults ) ?>
            <ul class="visible-xs list-inline text-right">
                <li><a href="https://github.com/jeffwesson"><i class="fa fa-github-square fa-3x"></i></a></li>
                <li><a href="https://twitter.com/jeffwesson"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                <li><a href="https://plus.google.com/102430060937675758208"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
            </ul>
            <?php get_search_form() ?>
        </div>
        <!-- /.navbar-collapse -->
    </nav>