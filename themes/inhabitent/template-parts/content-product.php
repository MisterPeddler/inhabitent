<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' );  ?>
		<?php endif; ?>

<div class="product-info-container">
    <div class="product-info">
        <p><?php the_title(); ?></p>
        <p><?php echo CFS()->get( 'price' ); ?></p>
        <!-- <?php the_title( sprintf( '<p class="entry-title">', '</p>' )); ?> -->

    </div>
    </div>

	</header><!-- .entry-header -->



</article><!-- #post-## -->
