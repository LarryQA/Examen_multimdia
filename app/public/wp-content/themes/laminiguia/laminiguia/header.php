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

	<header class = "barra-superior">


					<div id = "show2" class = "sub-barra">
	
						<a href="#" class= "abrir-barra"><img src="http://laminiguia.local/wp-content/uploads/2022/07/image.png" alt="Menú" ></a>
						
							<div>
							<img src="http://laminiguia.local/wp-content/uploads/2022/07/search-icon.png">
							<input id = "buscar" type="text" placeholder="Buscar algo">
							</div>
					</div>

					<div id = "show" class = "sub-barra do-not-show">
					<img src="http://laminiguia.local/wp-content/uploads/2022/07/notificacion.png">
					<img src="http://laminiguia.local/wp-content/uploads/2022/07/carrito-de-compras.png">
					<button class = "btn">Regístrate</button>
					<button class = "btn">Iniciar Sesión</button>
					</div>


	</header><!-- #masthead -->
