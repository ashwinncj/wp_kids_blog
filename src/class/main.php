<?php
/**
 * Main class which initializes the activation and other functions.
 */

class SukeInv {

    public function __construct() {
        add_action( 'init', array( $this, 'create_kids_blog_type' ) );
    }

    public static function activate() {
        /**
         * Activation functions for the plugin. 
         * */
    }

    public function create_kids_blog_type() {
        /**
         * Function to Register a custom post type 'Invoice' 
         * */
        $labels = array(
			'name'               => 'Kids Blog',
			'singular_name'      => 'Blog',
			'menu_name'          => 'Kids Blog',
			'name_admin_bar'     => 'Kids Blog',
			'archives'           => 'Kids Blog' . ' Archives',
			'attributes'         => 'Kids Blog' . ' Attributes',
			'parent_item_colon'  => 'Parent Item:',
			'all_items'          => 'All ' . 'Kids Blogs',
			'add_new_item'       => 'Add New ' . 'Kids Blog',
			'add_new'            => 'Add New',
			'new_item'           => 'New ' . 'Kids Blog',
			'edit_item'          => 'Edit ' . 'Kids Blog',
			'update_item'        => 'Update ' . 'Kids Blog',
			'view_item'          => 'View ' . 'Kids Blog',
			'view_items'         => 'View ' . 'Kids Blogs',
			'search_items'       => 'Search ' . 'Kids Blogs',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in Trash',
		);

		/**
		 * Supported CMS fields
		 */
		$supports = array(
			'title',
			'author',
			'thumbnail',
			'editor',
			'excerpt',
		);

		/**
		 * Supported taxonomies
		 */
		$taxonomies = array(
			'category',
			'post_tag',
		);

		/**
		 * Rewrite base
		 */
		$rewrite = array(
			'slug'       => 'invoices',
			'with_front' => false,
			'feeds'      => true,
		);

        $args = array(
			'label'               => 'Kids Blog',
			'description'         => 'Kids Blog' . ' post type',
			'labels'              => $labels,
			'supports'            => $supports,
			'taxonomies'          => $taxonomies,
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-video',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'post',
			'rest_base'           => 'kb',
		);

        register_post_type( 'kb', $args );
    }
}