<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package default
 */
$logo_white = get_field('logo_white','options');
$logo_color = get_field('logo_color','options');
?>
<!doctype html>
<html <?php language_attributes(); ?> class="js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('nk-body body-wider bg-light'); ?>>

<div class="nk-wrap">
    <header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">
        <!-- Header @s -->
        <div class="header-main">
            <div class="header-container container">
                <div class="header-wrap">
                    <!-- Logo @s -->
                    <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".6">
                        <a href="/" class="logo-link">
                            <img class="logo-dark" src="<?= get_img($logo_color['id']) ?>" width="100" alt="<?=$logo_color['alt']?>">
                            <img class="logo-light" src="<?= get_img($logo_white['id']) ?>" width="100" alt="<?=$logo_color['alt']?>">
                        </a>
                    </div>
                    <!-- Menu Toogle @s -->
                    <div class="header-nav-toggle">
                        <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                            <div class="toggle-line">
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <!-- Menu @s -->
                    <div class="header-navbar animated" data-animate="fadeInDown" data-delay=".75">
                        <nav class="header-menu" id="header-menu">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'header',
                                'container' => false,
                                'menu_class' => 'menu'
                            ]);
                            ?>
                        </nav>
                    </div><!-- .header-navbar @e -->
                </div>
            </div>
        </div><!-- .header-main @e -->
    </header>
