<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">

				<?php $page = get_query_var('paged'); global $wp_query; ?>
				<?php if($page != 0): ?>
				<div class="archive__header">
					<h1>Latest News</h1>
          <div class="archive__page">Page <?php echo $page; ?> or <?php echo $wp_query->max_num_pages; ?></div>
         </div>
        <?php endif; ?>

				<?php get_template_part('loop'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
