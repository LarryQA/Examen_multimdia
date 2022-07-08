<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaMiniguia
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="id-bar" class="main-bar">

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php

	wp_nav_menu(
		array(
			'menu' => 'primary',
		'container' => 'div',
		'theme_location' => 'primary',
		'items_wrap' => '<ul class="class">%3$s</ul>',
		'walker' => new walker_menu_principal()
		)

	)

?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
