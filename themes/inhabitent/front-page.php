
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
<!-- <div class="container"> -->

<section class="latest-adventures">

<h1>LATEST ADVENTURES</h1>

<div class="adventure-container">
<div class="adventure-left">
  <h2>Getting Back to Nature in a Canoe</h2>
  <a href="#" class="read-more">READ MORE</a>
</div>

<div class="adventure-right-container">
  <div class="adventure-top-right">
    <h2>A Night with Friends at the Beach</h2>
    <a href="#" class="read-more">READ MORE</a>
  </div>

  <div class="adventure-bottom-left">
    <h2>Taking in the View at Big Mountain</h2>
    <a href="#" class="read-more">READ MORE</a>
  </div>

  <div class="adventure-bottom-right">
    <h2>Star-Gazing at the Night Sky</h2>
    <a href="#" class="read-more">READ MORE</a>
  </div>
</div>
</div>

</section>
<!-- </div> -->

<!-- end of static content -->
</section>

<?php get_footer(); ?>
