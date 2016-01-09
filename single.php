<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main">

			<div class="wrapper">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

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

						<!-- <span class="comments">
							<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?>
						</span> -->

						<?php the_content(); // Dynamic Content ?>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					</article>
					<!-- /article -->

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
