<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">
				<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
