<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adas Portfolio
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div class="adas-portfolio-sidebar">
	<aside id="adas-portfolio-primary-sidebar" class="widget-area">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside>
</div>
