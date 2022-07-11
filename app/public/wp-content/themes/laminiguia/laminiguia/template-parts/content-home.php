<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LaMiniguia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("cursos_class"); ?>>

	<header class="post-centro">


		<img class="thumbnail_settings" src="<?php the_post_thumbnail_url(); ?>" alt="Imagen">

		<?php
		
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header><!-- .entry-header -->


	<div class="entry-content">

	<?php

		$desc = get_post_meta(get_the_ID(), 'informacion_del_curso_descuento', true);
		$precio = get_post_meta(get_the_ID(), 'informacion_del_curso_precio', true);

		if($precio){
			$precio_f =  ($desc > 0) ? $precio - ($precio * ($desc / 100)) : $precio;
			$signo = '$';
		}
		else{
			$precio_f = 'Gratis';
			$signo = null;
		}
		?>

		<div class="el_precio_ent">
			<p>			
				<?php
				echo $signo;
				echo $precio_f;
				?>
			</p>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php laminiguia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->