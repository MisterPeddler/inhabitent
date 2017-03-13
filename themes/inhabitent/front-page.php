
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="front-page">

  <section class="hero">

    <img src="<?php echo get_template_directory_uri() ?>/images/inhabitent-logo-full.svg"/>

  </section>


<section class="shop-stuff-section">
  <?php
  $terms = get_terms(array(
      'taxonomy' => 'product_type',
      'hide_empty' => false,
  ));

  ?>

<h1 class="front-page-heading">SHOP STUFF</h1>
<div class="shop-stuff-container">

<?php foreach ($terms as $item) :?>

  <div class="shop-cat-item">

    <?php
    $imgUrl = get_template_directory_uri() . "/images/" . $item->slug . ".svg";
    $linkUrl = get_home_url() . "/product_type/" . $item->slug;
    ?>

    <img src=" <?php echo $imgUrl ?> "/>
    <p class="shop-cat-description"><?php echo $item->description ?></p>
    <a class="green-button-style" href="<?php echo $linkUrl ?>"> <?php echo $item->name ?> Stuff</a>
  </div>
<?php endforeach ?>

</div>
</section>



<section class="inhab-newsfeed-section">

<h1 >Inhabitent Journal</h1>

<div class="inhab-newsfeed-container">

  <?php
  $args = array(
    'posts_per_page'   => 3,
    'orderby'          => 'date',
    'order'            => 'DESC',
);
  $news_feed_posts = get_posts($args);

  foreach ($news_feed_posts as $post):
    setup_postdata($post);?>

  <div class="inhab-newsfeed-item">

    <?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('medium'); ?>
		<?php endif; ?>

    <div class="content-box">
      <div class="entry-meta"><?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></div>
      <p><?php the_title() ?></p>
      <a class="inhab-button" href="<?php the_permalink() ?>">READ ENTRY</a>
    </div>

  </div>

<?php endforeach;
wp_reset_postdata(); ?>

</div>

</section>

<section class="latest-adventures">

  <?php $loop = new WP_Query( 
  array( 'post_type' => 'adventure', 
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order'=> 'ASC')); ?>

  <h1>LATEST ADVENTURES</h1>
  <ul class="adventure-container">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <li class="adventure-item">
        <?php the_post_thumbnail('large'); ?>
        <div class="image-shader"></div>
        <p><?php the_title();?></p>
        <a class="adventure-button" href="<?php the_permalink() ?>">Read More</a>
      </li>
    <?php endwhile; wp_reset_query(); ?>

  </ul>

  <a class="green-button-style adventure-archive-button" 
    href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">More Adventures</a>

</section>

</section>

<?php get_footer(); ?>
