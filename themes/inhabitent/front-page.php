
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<section class="front-page">

  <section class="hero">

    <img src="<?php echo get_bloginfo('template_url') ?>/images/inhabitent-logo-full.svg"/>

  </section>

<!-- more stuff goes here -> static content-->

<section class="shop-stuff-section">

  <?php
  $terms = get_terms( array(
      'taxonomy' => 'product_type',
      'hide_empty' => false,
  ) );

  // echo json_encode($terms);
  //
  // foreach($terms as $item){
  //   echo $item->name;
  //   echo "<br />";
  //   echo $item->description;
  //   echo "<br />";
  // }
  ?>

<h1>SHOP STUFF</h1>

<?php foreach($terms as $item) :?>

  <div class="shop-cat-container">

    <?php
    $imgUrl = get_template_directory_uri() . "/images/" . $item->slug . ".svg";
    $linkUrl = get_home_url() . "/product_type/" . $name;
    ?>
    
    <img src=" <?php echo $imgUrl ?> "/>
    <p class="shop-cat-description"><?php echo $item->description ?></p>
    <a href="<?php echo $linkUrl ?>"> <?php echo $item->name ?> Stuff</a>
  </div>
<?php endforeach ?>

</section>



<section class="inhab-newsfeed-section container">
  <?php
  //$post;
  $args = array(
	'posts_per_page'   => 3,
	'orderby'          => 'date',
	'order'            => 'DESC',
);
  $news_feed_posts = get_posts( $args );

  foreach ( $news_feed_posts as $post):
    setup_postdata($post);?>

  <div class="inhab-newsfeed-item">

    <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

    <div class="entry-meta"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></div>
    <h3><?php the_title() ?></h3>
    <a class="inhab-button" href="<?php the_permalink() ?>">READ ENTRY</a>

  </div>

<?php endforeach;
wp_reset_postdata(); ?>
</section>

<section class="latest-adventures">

<h1>LATEST ADVENTURES</h1>

<div class="adventure-container">
<div class="adventure-left">
  <h2>Getting Back to Nature in a Canoe</h2>
  <a href="#" class="inhab-button">READ MORE</a>
</div>

<div class="adventure-right-container">
  <div class="adventure-top-right">
    <h2>A Night with Friends at the Beach</h2>
    <a href="#" class="inhab-button">READ MORE</a>
  </div>

  <div class="adventure-bottom-left">
    <h2>Taking in the View at Big Mountain</h2>
    <a href="#" class="inhab-button">READ MORE</a>
  </div>

  <div class="adventure-bottom-right">
    <h2>Star-Gazing at the Night Sky</h2>
    <a href="#" class="inhab-button">READ MORE</a>
  </div>
</div>
</div>

</section>
<!-- </div> -->

<!-- end of static content -->
</section>

<?php get_footer(); ?>
