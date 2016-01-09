<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('loop'); ?>>
		<div class="loop__content">

			<div class="loop__header">

			</div>

			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="loop__thumbnail">
					<?php the_post_thumbnail('thumbnail'); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>

			<h2 class="article__title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>

			<div class="article__date">
				<?php the_time('j F Y'); ?>
			</div>

			<div class="article__category">
				<?php the_category(); ?>
			</div>

			<div class="loop__excerpt">
				<?php html5wp_excerpt('html5wp_index'); ?>
			</div>

		</div>

		<a href="<?php the_permalink(); ?>" class="loop__readmore">
			<span>Continue reading</span>
		</a>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
