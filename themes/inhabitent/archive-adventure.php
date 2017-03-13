<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<div class="adventure-archive">

<h1>LATEST ADVENTURES</h1>

  <?php $loop = new WP_Query( 
  array( 'post_type' => 'adventure', 
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order'=> 'ASC')); ?>

  
  <ul class="adventure-container-index">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <li class="adventure-item">
        <?php the_post_thumbnail('large'); ?>
        <div class="image-shader"></div>
        <p><?php the_title();?></p>
        <a class="adventure-button" href="<?php the_permalink() ?>">Read More</a>
      </li>
    <?php endwhile; wp_reset_query(); ?>

  </ul>

</div>
<?php get_footer(); ?>
