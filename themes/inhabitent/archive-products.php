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
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>

				<?php
				$terms = get_terms( array(
						'taxonomy' => 'product_type',
						'hide_empty' => false,
				) );
				?>

				<div class="product-types">
					<?php foreach($terms as $item) :?>

					    <?php
					    $linkUrl = get_home_url() . "/product_type/" . $item->slug;
					    ?>
					    <a class="product-type-link" href="<?php echo $linkUrl ?>"> <?php echo $item->name ?></a>

					<?php endforeach ?>

				</div>

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
