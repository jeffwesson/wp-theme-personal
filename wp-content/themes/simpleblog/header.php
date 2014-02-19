<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]>
<html class=no-js>
<!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.</p>
<![endif]-->
<div class=container>
    <header class="visible-sm visible-md visible-lg">
        <hgroup class=row>
            <h1 class="col-sm-6 text-right">jeffwesson.com</h1>

            <h2 class="col-sm-6 text-left">Developing the Web</h2>
        </hgroup>
    </header>
    <nav class="navbar navbar-default" role=navigation>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=navbar-header>
            <button type=button class=navbar-toggle data-toggle=collapse data-target=#navbar-collapse>
                <span class=sr-only>Toggle navigation</span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
                <span class=icon-bar></span>
            </button>
            <a class="navbar-brand active" href="/"><i class="fa fa-home"></i> &lt;frontend/&gt;</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id=navbar-collapse>
            <div class="nav navbar-nav">
                <?php wp_nav_menu(array('Main Menu' => 'main_menu')); ?>
            </div>
            <ul class="visible-xs list-inline text-right">
                <li><a href=https://github.com/jeffwesson><i class="fa fa-github-square fa-3x"></i></a></li>
                <li><a href=https://twitter.com/jeffwesson><i class="fa fa-twitter-square fa-3x"></i></a></li>
                <li><a href=https://plus.google.com/102430060937675758208><i class="fa fa-google-plus-square fa-3x"></i></a></li>
            </ul>
            <?php get_search_form(); ?>
        </div>
    </nav>
    <!-- /.navbar-collapse -->