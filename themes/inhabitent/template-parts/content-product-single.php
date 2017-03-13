<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("single-product-article"); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>




	</header><!-- .entry-header -->
<div class="product-info-container">

  <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <p class="price"><?php echo CFS()->get('price'); ?></p>
	<div class="entry-content">
		<?php the_content(); ?>

		<!-- <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
        ?> -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php red_starter_entry_footer(); ?> -->
    <a class = "inhab-button"><i class="fa fa-facebook" aria-hidden="true"></i>like</a>
    <a class = "inhab-button"><i class="fa fa-twitter" aria-hidden="true"></i>tweet</a>
    <a class = "inhab-button"><i class="fa fa-pinterest" aria-hidden="true"></i>pin</a>
	</footer><!-- .entry-footer -->
  </div>
</article><!-- #post-## -->
