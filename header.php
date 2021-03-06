<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v1.1">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png?v1.1"
              rel="apple-touch-icon"/>
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="off-canvas-wrapper">

    <!-- Load off-canvas container. Feel free to remove if not using. -->
    <?php get_template_part( 'parts/content', 'offcanvas' );  ?>
    <?php //get_template_part( 'parts/content', 'offcanvas-right' );  ?>

    <div class="off-canvas-content" data-off-canvas-content>

        <header class="header" role="banner">

            <div class="blue-background white top-banner">
                <div class="grid-container">
                    <div class="grid-x">
                        <div class="cell large-9 medium-8 small-12">
                            <div class="grid-x">
                                <div class="telephone cell large-4 medium-3 small-4">
                                    <div class="description">Home Care Enquires</div>
                                    <?php
                                    $home_care_enquiries_number = get_field('home_care_enquiries_number','option');
                                    $looking_for_staff_number = get_field('looking_for_staff_number','option');
                                    $want_to_work_for_us_number = get_field('want_to_work_for_us_number','option');
                                    ?>
                                    <div class="semi-bold"><a href="tel:<?php echo preg_replace('/\s+/', '', $home_care_enquiries_number)?>" class="white"><?php echo $home_care_enquiries_number; ?></a></div>
                                </div>
                                <div class="telephone cell large-4 medium-4 small-4">
                                    <div class="description">Looking for Staff?</div>
                                    <div class="semi-bold"><a href="tel:<?php echo preg_replace('/\s+/', '', $looking_for_staff_number)?>" class="white"><?php echo $looking_for_staff_number; ?></a></div>
                                </div>
                                <div class="telephone cell large-4 medium-4 small-4">
                                    <div class="description">Want to Work for Us?</div>
                                    <div class="semi-bold"><a href="tel:<?php echo preg_replace('/\s+/', '', $want_to_work_for_us_number)?>" class="white"><?php echo $want_to_work_for_us_number; ?></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="show-for-small-only">&nbsp;</div>
                        <div class="cell large-3 medium-4 small-12 show-for-medium">
                           <?php get_template_part('parts/header','icons'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="searchbar" class="grid-container show-for-large">
                <div class="grid-x">
                    <div class="large-7 medium-4 small-6 cell pad-top-15 pad-bottom-15">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
                    </div>
                    <div class="cell auto"></div>
                    <div class="cell shrink pad-top-48">

                        <form role="search" method="get" class="search-form inline-block" action="<?php echo home_url( '/' ); ?>">
                                <input type="search" class="header-search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />

                            <input type="submit" class="header-search-submit button" value="" />
                        </form>

                        <a href="<?php the_field('facebook','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebookicon.svg"></a>
                        <a href="<?php the_field('linkedin','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedInicon.svg"></a>
                        <a href="<?php the_field('twitter','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twittericon.svg"></a>

                    </div>
                </div>
            </div>

            <div id="searchbarmobile" class="grid-container hide-for-large">
                <div class="grid-x">
                    <div class="large-8 medium-4 small-6 cell pad-top-15 pad-bottom-15">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
                    </div>
                    <div class="cell auto"></div>
                    <div class="cell shrink pad-top-24">

                        <form role="search" method="get" class="search-form inline-block show-for-medium" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" class="header-search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />

                            <input type="submit" class="header-search-submit button" value="" />
                        </form>

                        <a href="<?php the_field('facebook','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebookicon.svg"></a>
                        <a href="<?php the_field('linkedin','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedInicon.svg"></a>
                        <a href="<?php the_field('twitter','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twittericon.svg"></a>

                    </div>
                </div>
            </div>

            <div id="main-nav">
                <!-- This navs will be applied to the topbar, above all content
                     To see additional nav styles, visit the /parts directory -->
                <?php get_template_part('parts/nav', 'offcanvas-topbar'); ?>
            </div>
        </header> <!-- end .header -->