
<?php
/**
 * Template Name: About Page Template
 *
 * @package Inhabitent Theme
 */


 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main about" role="main">

          <div class="about-hero hero-image">
            <h1 class="about-title">ABOUT</h1>
          </div>

          <div class="about container">
            <?php echo CFS()->get( 'our_story' ); ?>
            <?php echo CFS()->get( 'our_team' ); ?>
          </div>

 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php get_footer(); ?>
