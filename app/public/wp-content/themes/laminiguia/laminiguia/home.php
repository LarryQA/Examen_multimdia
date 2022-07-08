<div class="outter">
	<div class="main-wrap">
		<div id= "id-content" class="principal">
				<?php
				get_header();
				?>
			<div class = post-wrap>

				<?php
				 $args = array(  
					'post_type' => 'cursos',
					'post_status' => 'publish',
					'posts_per_page' => 8, 
					'orderby' => 'title', 
					'order' => 'ASC', 
				);

				$loop = new WP_Query($args ); 
				if ($loop->have_posts()) :

				/* Start the Loop */
				while ($loop->have_posts()) :
					$loop->the_post();
					get_template_part('template-parts/content', 'home');

				endwhile;

				endif;
				?>
			</div><!-- #main -->
		</div>
		
	</div>
	<?php
		get_sidebar();
		?>
</div>
<?php
		get_footer();
?>



