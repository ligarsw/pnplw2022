<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pnplw2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/logo2022min.png">
                </div>
                <div class="col">
                    <h2judul>Mahkamah Agung Republik Indonesia</h2judul><br>
                    <h1judul>Pengadilan Negeri Pelalawan Kelas II</h1judul>
                    <h3judul><br>Jl. Hang Tuah SP VI - Pangkalan Kerinci -
                        Pelalawan
                        <br>
                        Email : Info@pn-pelalawan.go.id
                    </h3judul>
                </div>
            </div>

        </div>


        <div class="container bg-kuning">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">

                    <a class="skip-link screen-reader-text"
                        href="#primary"><?php esc_html_e('Skip to content', 'pnplw2022'); ?></a>

                    <header id="masthead" class="site-header">
                        <div class="site-branding">
                            <?php
                            the_custom_logo();
                            if (is_front_page() && is_home()) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php
                            else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a></p>
                            <?php
                            endif;
                            $pnplw2022_description = get_bloginfo('description', 'display');
                            if ($pnplw2022_description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $pnplw2022_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                            ?></p>
                            <?php endif; ?>
                        </div><!-- .site-branding -->

                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'pnplw2022'); ?></button>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                            ?>
                        </nav><!-- #site-navigation -->
                    </header><!-- #masthead -->
                </div><!-- .col-12 -->
            </div><!-- .bg kuning-->
        </div><!-- .container -->