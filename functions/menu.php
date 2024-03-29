<?php
// Register menus
register_nav_menus(
	array(
		'main-nav'		=> __( 'The Main Menu', 'jointswp' ),		// Main nav in header
		'offcanvas-nav'	=> __( 'The Left Off-Canvas Menu', 'jointswp' ),	// Off-Canvas nav
		'offcanvas-nav-right'	=> __( 'The Right Off-Canvas Menu', 'jointswp' ),	// Off-Canvas nav
		'footer-links'	=> __( 'Footer Links', 'jointswp' )			// Secondary nav in footer
	)
);

// The Top Menu
function joints_top_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'main-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Top Menu
function joints_vertical_nav() {
    wp_nav_menu(array(
        'container'			=> false,						// Remove nav container
        'menu_id'			=> 'side-nav',					// Adding custom nav id
        'menu_class'		=> 'vertical medium-horizontal menu',	// Adding custom nav class
        'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location'	=> 'main-nav',					// Where it's located in the theme
        'depth'				=> 5,							// Limit the depth of the nav
        'fallback_cb'		=> false,						// Fallback function (see below)
        'walker'			=> new Topbar_Menu_Walker()
    ));
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

// The Off Canvas Menu
function joints_off_canvas_nav() {
	wp_nav_menu(array(
		'container'			=> false,							// Remove nav container
		'menu_id'			=> 'offcanvas-nav',					// Adding custom nav id
		'menu_class'		=> 'vertical menu accordion-menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location'	=> 'offcanvas-nav',					// Where it's located in the theme
		'depth'				=> 5,								// Limit the depth of the nav
		'fallback_cb'		=> false,							// Fallback function (see below)
		'walker'			=> new Off_Canvas_Menu_Walker()
	));
}

// The Right Off Canvas Menu
function joints_right_off_canvas_nav() {
	wp_nav_menu(array(
		'container'			=> false,							// Remove nav container
		'menu_id'			=> 'offcanvas-nav-nav',					// Adding custom nav id
		'menu_class'		=> 'vertical menu accordion-menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location'	=> 'offcanvas-nav-right',					// Where it's located in the theme
		'depth'				=> 5,								// Limit the depth of the nav
		'fallback_cb'		=> false,							// Fallback function (see below)
		'walker'			=> new Off_Canvas_Menu_Walker()
	));
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
	function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
		$object = $item->object;
		$type = $item->type;
		$title = $item->title;
		$description = $item->description;
		$permalink = $item->url;
		$output .= "<li class='" .  implode(" ", $item->classes) . "'>";

		//Add SPAN if no Permalink
		if( $permalink && $permalink != '#' ) {
			$output .= '<a href="' . $permalink . '">';
		} else {
			$output .= '<span>';
		}

		$output .= $title;

		$imgWrapStart = '';
		$imgWrapEnd = '';

		if( $permalink && $permalink != '#' ) {
			$output .= '</a>';
			$imgWrapStart = '<a href="'.$permalink.'">';
			$imgWrapEnd = '</a>';
		} else {
			$output .= '</span>';
		}

		$pageID = get_post_meta( $item->ID, '_menu_item_object_id', true );
		$thumb = get_the_post_thumbnail( $pageID, 'thumbnail');
		if($thumb == '') {
			$thumb='<img src="https://via.placeholder.com/150" style="border-radius: 50%;">';
		}
		$output .= '<div class="grid-x grid-padding-x">';
		$output .= '<div class="cell shrink">'.$imgWrapStart.$thumb.$imgWrapEnd.'</div>';
		if( $description != '' && $depth == 0 ) {
			$output .= '<div class="cell auto">' . $description . '</div>';
		}

		$output .= '</div>';
	}
}

// The Footer Menu
function joints_footer_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'footer-links',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'footer-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home'		=> true,
		'menu_class'	=> '',		// Adding custom nav class
		'include'		=> '',
		'exclude'		=> '',
		'echo'			=> true,
		'link_before'	=> '',		// Before each link
		'link_after'	=> ''		// After each link
	));
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );