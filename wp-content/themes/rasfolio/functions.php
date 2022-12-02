<?php
    // language transalation setup 
    load_theme_textdomain('rasfolio', get_template_directory().'/languages');

    // dynamic site/page title
    function rasfolio_setup(){
        add_theme_support('title-tag','excerpt');
        add_theme_support('post-thumbnails',array('post','service'));

        // registering manu
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'rasfolio'),
            'footer-menu' => __('Footer Menu', 'rasfolio'),
            'top-menu' => __('Topber Menu', 'rasfolio')

        ));

        /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 150;
		$logo_height = 50;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);


    }
    // hocks for title
    add_action('after_setup_theme','rasfolio_setup');

        

    // activing assects style and js
    function rasfolio_assets() {
        // connecting bootstrap
        wp_enqueue_style( 'stylesheetBootstrap', get_template_directory_uri().'/assect/css/bootstrap.css', array(), '1.0.0', 'all' );

        // <!-- bootstrap icon -->
        wp_enqueue_style( 'bootstricons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css', false );
        // styles css
        wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/assect/css/style.css', array(), '1.0.0', 'all' );
        // defult css
        wp_enqueue_style( 'main', get_stylesheet_uri() );


        // @@@@@js files@@@@@@@ 
        // bangla date
        wp_enqueue_script( 'banglafont', 'https://bangla.plus/scripts/bangladatetoday.min.js', 
        '1.0.0', true);
        wp_enqueue_script( 'bootstrapJs', get_template_directory_uri().'/assect/js/bootstrap.bundle.min.js', 
        '1.0.0', true);    
        wp_enqueue_script( 'mainJs', get_template_directory_uri().'/assect/js/main.js', 
        '1.0.0', true);    

    }
    add_action( 'wp_enqueue_scripts', 'rasfolio_assets' );

    // ############POST VIEW############
    // function gt_get_post_view() {

    //         $count = get_post_meta( get_the_ID(), 'post_views_count', true );
        
    //         return "$count views";
        
    //     }
        
    //     function gt_set_post_view() {
        
    //         $key = 'post_views_count';
        
    //         $post_id = get_the_ID();
        
    //         $count = (int) get_post_meta( $post_id, $key, true );
        
    //         $count++;
        
    //         update_post_meta( $post_id, $key, $count );
        
    //     }
        
    //     function gt_posts_column_views( $columns ) {
        
    //         $columns['post_views'] = 'Views';
        
    //         return $columns;
        
    //     }
        
    //     function gt_posts_custom_column_views( $column ) {
        
    //         if ( $column === 'post_views') {
        
    //             echo gt_get_post_view();
        
    //         }
        
    //     }
        
    //     add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
        
    //     add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
    // https://blog.hubspot.com/website/wordpress-post-views

    // *********************************************************************************************************
    // dynamic services  using custom post  
    function rasfolio_services(){
        $labels = array(
            'name'                  => _x( 'Services', 'Post type general name', 'rasfolio' ),
            'rasfolio'              => _x( 'service', 'Post type singular name', 'rasfolio' ),
            'menu_name'             => _x( 'Services', 'Admin Menu text', 'rasfolio' ),
            'name_admin_bar'        => _x( 'service', 'Add New on Toolbar', 'rasfolio' ),
            'add_new'               => __( 'Add Service', 'rasfolio' ),
            'add_new_item'          => __( 'Add New Service', 'rasfolio' ),
            'new_item'              => __( 'New Service', 'rasfolio' ),
            'edit_item'             => __( 'Edit Service', 'rasfolio' ),
            'view_item'             => __( 'View Service', 'rasfolio' ),
            'all_items'             => __( 'All Service', 'rasfolio' ),
            'search_items'          => __( 'Search Service', 'rasfolio' ),
            'parent_item_colon'     => __( 'Parent Service:', 'rasfolio' ),
            'not_found'             => __( 'No Services found.', 'rasfolio' ),
            'not_found_in_trash'    => __( 'No Services found in Trash.', 'rasfolio' ),
            'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'service' ),
                'capability_type'    => 'post',
                'menu_position'       => 5,
                'menu_icon'           => 'dashicons-analytics',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'thumbnail'),
                // to enable gutenburg editor this code need, without by defult clasic activate
                'show_in_rest'       => true
                
            );
        
            register_post_type( 'service', $args );
    }
    add_action('init','rasfolio_services');