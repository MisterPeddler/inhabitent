<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Product Taxonomy
 function inhabitent_tax_product_type() {

 	$labels = array(
 		'name'                       => 'Product Types',
 		'singular_name'              => 'Product Type',
 		'menu_name'                  => 'Product Type',
 		'all_items'                  => 'All Product Type',
 		'parent_item'                => 'Parent Product Type',
 		'parent_item_colon'          => 'Parent Product Type:',
 		'new_item_name'              => 'NewProduct Type',
 		'add_new_item'               => 'Add New Product Type',
 		'edit_item'                  => 'Edit Product Type',
 		'update_item'                => 'Update Product Type',
 		'view_item'                  => 'View Product Type',
 		'separate_items_with_commas' => 'Separate product types with commas',
 		'add_or_remove_items'        => 'Add or remove product types',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Popular Types',
 		'search_items'               => 'Search Product Types',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No items',
 		'items_list'                 => 'Product type list',
 		'items_list_navigation'      => 'Product type list navigation',
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => false,
 	);
 	register_taxonomy( 'product_type', array( 'products' ), $args );

 }
 add_action( 'init', 'inhabitent_tax_product_type', 0 );