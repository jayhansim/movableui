<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

			<header class="header" role="banner">

			<?php if(is_single()): ?>
				<?php if (have_posts()): the_post(); ?>
					<?php $thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
					$thumb_url = $thumb_url_array[0]; ?>
					<div class="single__bg" style="background-image:url(<?php echo $thumb_url ?>)"></div>
				<?php endif; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?>

			<!-- Logo -->
			<?php if (is_home() && !is_paged()): ?>
				<h1 class="header__title"><?php bloginfo('title'); ?></h1>
			<?php endif; ?>

			<div class="logo">
				<a href="<?php bloginfo('home'); ?>" title="Movable UI home">
					<svg width="236" height="33" viewBox="0 0 236 33" xmlns="http://www.w3.org/2000/svg"><title>Movable UI</title><g fill="none" fill-rule="evenodd">
						<path d="M77.234 33.043h32.484L93.476 5.52 77.234 33.043z" fill="#20C5B6"/>
						<path class="svg--text" d="M32.906 31.005V2.025H22.778l-6.325 15.13-6.325-15.13H0v28.98h8.35V15.13l4.96 13.064h6.285l4.96-13.064v15.875h8.35zM51.51 1.736c-9.22 0-15.917 6.16-15.917 14.76 0 8.64 6.698 14.922 15.916 14.922s15.915-6.325 15.915-14.923c0-8.558-6.697-14.76-15.916-14.76zm.123 7.98c3.307 0 5.953 2.85 5.953 6.82 0 3.968-2.646 6.904-5.953 6.904-3.307 0-6.2-2.936-6.2-6.904 0-3.97 2.852-6.82 6.2-6.82z" fill="#3A3746"/>
						<path d="M91.085 0h-32.52l16.278 27.56L91.085 0z" fill="#FFAF00"/>
						<path class="svg--text" d="M104.672 2.026v28.98h15.38c7.068 0 11.656-3.184 11.656-8.145 0-3.637-2.273-6.53-5.746-7.316 2.977-.91 4.878-3.35 4.878-6.2 0-4.425-4.506-7.318-11.492-7.318h-14.676zm9.55 7.027h4.588c1.323 0 2.19.786 2.19 2.026 0 1.28-.867 2.107-2.19 2.107h-4.588V9.053zm0 10.5h4.588c1.778 0 2.935.827 2.935 2.11 0 1.405-1.157 2.314-2.935 2.314h-4.588v-4.423zM144.193 23.026v-21h-9.59v28.98h21.66v-7.98h-12.07zM183.26 9.3V2.027h-24.516v28.98h24.887v-7.277h-15.295V20.13h13.56v-7.275h-13.56V9.3h14.924zM222.822 2.026h-9.59v16.7c0 2.895-1.82 4.714-4.176 4.714-2.398 0-4.465-1.86-4.465-4.713v-16.7H195v16.7c0 7.69 5.58 12.69 14.014 12.69 8.392 0 13.808-5 13.808-12.69v-16.7zM235.59 31.005V2.025H226v28.98h9.59z" fill="#3A3746"/></g>
					</svg>
				</a>
			</div>

			<!-- Site Description -->
			<p class="site-description">
				<?php bloginfo('description'); ?>
			</p>

		</header>

