<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-left" id="off-canvas" data-off-canvas>
    <div>
        <a data-toggle="off-canvas" class="close-button white">X</a>
    </div>

	<div class="blue-background white pad-top-50 pad-bottom-10">
        <?php get_template_part('parts/header','icons'); ?>
    </div>
    <div class="white-background pad-top-10 pad-bottom-10 pad-left-10">
        <form role="search" method="get" class="search-form inline-block" action="<?php echo home_url( '/' ); ?>">
            <input type="search" class="header-search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />

            <input type="submit" class="header-search-submit button" value="" />
        </form>
    </div>
    <div>
        <div class="cell shrink"><?php joints_vertical_nav(); ?></div>
    </div>
</div>
