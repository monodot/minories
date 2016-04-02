<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minories
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
	return;
}
?>

<div class="widget-area">
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
</div><!-- .widget-area -->
