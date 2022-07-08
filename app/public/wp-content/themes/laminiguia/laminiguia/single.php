<div class="outter">
	<div class="main-wrap">

		<main id="primary" class="principal">
			<?php
			get_header();
			?>
			<div>
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'laminiguia') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'laminiguia') . '</span> <span class="nav-title">%title</span>',
						)
					);

					

				endwhile; // End of the loop.
				?>
			</div>
		

		</main><!-- #main -->
		<?php
		get_sidebar();
		?>
	</div>

</div>
<?php
get_footer();
?>