<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">
				<div class="archive__header">
					<h5 class="archive__type"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); ?></h5>
					<h1><?php echo get_search_query(); ?></h1>
					<?php $page = get_query_var('paged'); global $wp_query; ?>
					<?php if($page != 0): ?>
						 <div class="archive__page">Page <?php echo $page; ?> or <?php echo $wp_query->max_num_pages; ?></div>
					<?php endif; ?>
				</div>

				<?php get_template_part('loop'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
