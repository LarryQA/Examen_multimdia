<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaMiniguia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'laminiguia' ); ?></a>

	<header>
		<div>
			<?php
			the_custom_logo();
			?>
				<div class = "barra-superior">

				<div class = "sub-barra">
					<img src="http://laminiguia.local/wp-content/uploads/2022/07/image.png" alt="Menú">
						<div>
							<img src="http://laminiguia.local/wp-content/uploads/2022/07/search-icon.png">
							<input id = "buscar" type="text" placeholder="Buscar algo">
						</div>
					</div>
					
					<div>
					
					<img src="http://laminiguia.local/wp-content/uploads/2022/07/notificacion.png">
					<img src="http://laminiguia.local/wp-content/uploads/2022/07/carrito-de-compras.png">
					<button class = "btn">Regístrate</button>
					<button class = "btn">Iniciar Sesión</button>
					</div>
					

					
				</div>
				<?php
			$laminiguia_description = get_bloginfo( 'description', 'display' );
			if ( $laminiguia_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $laminiguia_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'laminiguia' ); ?></button>
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
