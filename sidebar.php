<?php
/**
 * EA Starter
 *
 * @package      EAStarter
 * @since        1.0.0
 * @copyright    Copyright (c) 2014, Contributors to EA Genesis Child project
 * @license      GPL-2.0+
 */

if ( ! function_exists( 'ea_page_layout' ) )
	return;

$layout = ea_page_layout();
if ( ! in_array( $layout, array( 'content-sidebar', 'sidebar-content' ) ) )
	return;

$sidebar = apply_filters( 'ea_sidebar', 'primary-sidebar' );
$display = is_active_sidebar( $sidebar );
if ( ! apply_filters( 'ea_display_sidebar', $display ) )
	return;

tha_sidebars_before();
$classes = apply_filters( 'ea_sidebar_class', array( 'col-md-3' ) );
echo '<div class="' . join( ' ', $classes ) . '"><aside class="sidebar-primary" role="complementary">';
	tha_sidebar_top();
	if ( is_active_sidebar( $sidebar ) )
		dynamic_sidebar( $sidebar );
	tha_sidebar_bottom();
echo '</aside></div>';
tha_sidebars_after();
