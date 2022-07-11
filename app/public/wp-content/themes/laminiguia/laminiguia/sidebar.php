
<aside id="id-bar" class="main-bar">

<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php

	wp_nav_menu(
		array(
			'menu' => 'primary',
		'container' => 'div',
		'theme_location' => 'primary',
		'items_wrap' => '<ul class="class">%3$s</ul>',
		//'walker' => new walker_menu_principal()
		)

	)

?>
</aside><!-- #secondary -->
