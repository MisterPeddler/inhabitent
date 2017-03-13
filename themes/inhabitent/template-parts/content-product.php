<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

    <a href="<?php echo get_the_permalink() ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' );  ?>
		<?php endif; ?>
    </a>

<div class="product-info-container">
    <div class="product-info">
        <p><?php the_title(); ?></p>
        <p><?php echo CFS()->get( 'price' ); ?></p>

    </div>
    </div>

	</header><!-- .entry-header -->



</article><!-- #post-## -->
