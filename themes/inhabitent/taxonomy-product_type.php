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
		<?php if ( have_posts() ) : ?>




			<header class="page-header product-page-header">


				<h1 class="page-title"><?php single_term_title();?></h1>
				<p><?php echo term_description();?></p>

				<div class="dashed-line"></div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="product-container">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-product' );
				?>

			<?php endwhile; ?>
				</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php get_footer(); ?>
