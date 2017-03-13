<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>



<section class="single-adventure">

	<?php the_post_thumbnail('full', ['class' => 'adventure-hero']); ?>

<div class="adventure-content">
<h1><?php the_title(); ?></h1>

<?php
global $post;
$theID = get_the_ID();
?>

<p class="author"> By <?php the_author_meta( 'display_name', $post->post_author ); ?></p>

<p class="adventure-post-content"> <?php echo apply_filters('the_content', get_post_field('post_content', $theID)); ?> </p>


<footer class="entry-footer">
		<!-- <?php red_starter_entry_footer(); ?> -->
    <a class = "inhab-button"><i class="fa fa-facebook" aria-hidden="true"></i>like</a>
    <a class = "inhab-button"><i class="fa fa-twitter" aria-hidden="true"></i>tweet</a>
    <a class = "inhab-button"><i class="fa fa-pinterest" aria-hidden="true"></i>pin</a>
	</footer><!-- .entry-footer -->

</div>



</section>
	

<?php get_footer(); ?>
