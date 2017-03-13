<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="container">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if (have_posts()) : ?>

			<header class="page-header">
			<h1>LATEST ADVENTURES</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="adventure-archive-container">

			<?php while (have_posts()) : the_post(); ?>

				<div class="adventure">
				PUT STUFF HERE ON SUNDAY
				</div>

			<?php endwhile; ?>

			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
