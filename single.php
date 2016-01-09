<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main">

			<div class="wrapper">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post header -->
						<div class="post__header">
							<h1><?php the_title(); ?></h1>
							<div class="article__date">
								<?php the_time('j F Y'); ?>
							</div>

							<div class="article__category">
								<?php the_category(); ?>
							</div>
						</div>
						<!-- /post header -->

						<div class="post__content">
							<?php the_content(); // Dynamic Content ?>
							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
						</div>

					</article>
					<!-- /article -->

					<div class="comments">
						<h3>Leave your comment</h3>

						<?php comments_template(); ?>
					</div>

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
