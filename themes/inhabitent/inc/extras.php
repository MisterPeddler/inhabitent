<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function red_wp_trim_excerpt($text)
{
    $raw_excerpt = $text;

    if ('' == $text) {
        // retrieve the post content
        $text = get_the_content('');

        // delete all shortcode tags from the content
        $text = strip_shortcodes($text);

        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);

        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags($text, $allowed_tags);

        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);

        // // create a custom "more" link
         $excerpt_end = '<span>[...]</span><p><a class="inhab-button" href="' . get_permalink() . '" class="inhab-button">Read more &rarr;</a></p>'; // modify excerpt ending
         $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);

        if (count($words) > $excerpt_length) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
        } else {
            $text = implode(' ', $words);
        }
    }

    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'red_wp_trim_excerpt');



/**
* Swaps out wordpress logo for inhabitent logo on login page
*/
function my_login_logo()
{
    ?>
    <style type="text/css">
        body.login div#login h1 a{
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
				 background-position: center center;
				 background-repeat: no-repeat;
				 background-size: 250px 250px;
				 width:250px;
        }

				#login .button.button-primary{
					background-color: #2488a3;
				}

				.login #login_error, .login .message{
				border-left: 4px solid #2488a3 !important;
			}

    </style>
<?php

}
add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'Inhabitent Online Hipster Camping Store';
}
add_filter('login_headertitle', 'my_login_logo_url_title');


/**
* Update About Hero Imagetgk
*/

function update_hero_image()
{
    if (!is_page_template('page-templates/about.php')) {
        return;
    }

    $url = CFS()->get('about_header_image');
    if (!$url) {
        return;
    }

    $custom_styles = ".about-hero {
					background:linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0.25) 100%),
					url({$url});}";

    wp_add_inline_style('red-starter-style', $custom_styles);
}
add_action('wp_enqueue_scripts', 'update_hero_image');

function set_nav_bar_type()
{
    if (is_page_template('page-templates/about.php') || is_page_template('front-page.php')) {
    }
}


function hwl_home_pagesize($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }



    if (is_post_type_archive('products')) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set('posts_per_page', 16);
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        return;
    }
}
add_action('pre_get_posts', 'hwl_home_pagesize', 1);


function my_theme_archive_title($title)
{
    if (is_post_type_archive('products')) {
        $title = 'Shop Stuff';
    } elseif (is_post_type_archive('do')) {
        $title = 'Do';
    } elseif (is_post_type_archive('wear')) {
        $title = 'Do';
    } elseif (is_post_type_archive('eat')) {
        $title = 'Do';
    } elseif (is_post_type_archive('sleep')) {
        $title = 'Do';
    }

    return $title;
}

add_filter('get_the_archive_title', 'my_theme_archive_title');


