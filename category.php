<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">
				<div class="archive__header">
					<h5 class="archive__type">Category</h5>
					<h1><?php single_cat_title(); ?></h1>
					<?php if($page != 0): ?>
	          <div>Page <?php echo $page; ?></div>
	        <?php endif; ?>
				</div>

				<?php get_template_part('loop'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
