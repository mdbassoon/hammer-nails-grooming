<?php
/**
 * hngrooming functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hngrooming
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hngrooming_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hngrooming, use a find and replace
		* to change 'hngrooming' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'hngrooming', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hngrooming' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'hngrooming_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'hngrooming_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hngrooming_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hngrooming_content_width', 640 );
}
add_action( 'after_setup_theme', 'hngrooming_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hngrooming_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hngrooming' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hngrooming' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hngrooming_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hngrooming_scripts() {

	wp_enqueue_style( 'hngrooming-bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'hngrooming-lighbox-css', get_stylesheet_directory_uri() . '/css/light-box.css');
	wp_enqueue_style( 'hngrooming-owl-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'hngrooming-responsive-css', get_stylesheet_directory_uri() . '/css/responsive.css');
	wp_enqueue_style( 'hngrooming-main-css', get_stylesheet_directory_uri() . '/css/style.css');

	wp_enqueue_script( 'hngrooming-jquery-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hngrooming-plugins-js', get_template_directory_uri() . '/js/plugins.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'hngrooming-main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'hngrooming_scripts' );



function hn_groom_enqueue_assets() {

}
add_action( 'wp_enqueue_scripts', 'hn_groom_enqueue_assets' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function hn_cpts()
    {

    // Set UI labels for Custom Post Type

    $labels = array(
        'name' => 'Locations' ,
        'singular_name' => 'Location',
        'menu_name' => 'Locations',
        'parent_item_colon' => 'Parent Location',
        'all_items' => 'All Locations',
        'view_item' => 'View Location',
        'add_new_item' => 'Add New Location',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Location',
        'update_item' => 'Update Location',
        'search_items' => 'Search Location',
        'not_found' => 'Not Found',
        'not_found_in_trash' => 'Not found in Trash',
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => 'locations',
        'description' => 'Locations',
        'labels' => $labels,

        // Features this CPT supports in Post Editor

        'supports' => array(
            'title',
            'custom-fields',
			'thumbnail',
			'page-attributes'
        ) ,

        // You can associate this CPT with a taxonomy or custom taxonomy.

        /*'taxonomies' => array(
            'genres'
        ) ,*/
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
		'rewrite' => array(
			'with_front' => false
		)
    );

    // Registering your Custom Post Type

    //register_post_type('locations', $args);
    register_post_type('location', $args);
	
	// Labels part for the GUI
	
	$labels = array(
		'name' => _x( 'Service Types', 'taxonomy general name' ),
		'singular_name' => _x( 'Service Type', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Service Types' ),
		'menu_name' => __( 'Service Types' ),
	); 
	
	// Now register the non-hierarchical taxonomy like tag
	
	register_taxonomy('service_types','books',array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'service-type' ),
	));
	
    // Set UI labels for Custom Post Type

    $labels = array(
        'name' => 'Services' ,
        'singular_name' => 'Service',
        'menu_name' => 'Services',
        'parent_item_colon' => 'Parent Service',
        'all_items' => 'All Services',
        'view_item' => 'View Service',
        'add_new_item' => 'Add New Service',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Service',
        'update_item' => 'Update Service',
        'search_items' => 'Search Service',
        'not_found' => 'Not Found',
        'not_found_in_trash' => 'Not found in Trash',
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => 'Services',
        'description' => 'Services',
        'labels' => $labels,

        // Features this CPT supports in Post Editor

        'supports' => array(
            'title',
			'editor',
            'custom-fields',
        ) ,

        // You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies' => array('service_types'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
		'rewrite' => array(
			'with_front' => false
		)
    );

    // Registering your Custom Post Type

    //register_post_type('locations', $args);
    register_post_type('service', $args);

}
add_action('init', 'hn_cpts', 0);

function rewrite_presale_urls(){
	add_rewrite_rule( 'coming-soon\/(.*)', 'index.php?post_type=location&name=$matches[1]', 'top' );
}
add_action('init','rewrite_presale_urls',0);

function hn_populate_location_services($value, $post_id, $field) {
	
	$services = get_posts(array(
		'post_type'=>'service',
		'post_status'=>'published',
		'posts_per_page'=>-1,
	));
	$new_value = array();

	foreach($services as $service){
		$value_exists = false;
		if($value){
			foreach($value as $sub_fields){		
				if((int)$sub_fields['field_65fa691f34901']==(int)$service->ID){
					$new_value[] = $sub_fields;
					$value_exists = true;
					break;
				}
			}	
		}
		if(!$value_exists){
			$new_value[] = array(
				'field_65fa692f34902'=>$service->post_title,
				'field_65fa691f34901'=>$service->ID,
			);
		}
	}
	$value = $new_value;
	
    return $new_value;
    
}
add_filter('acf/load_value/key=field_65fa691234900', 'hn_populate_location_services', 10, 3);

function hn_acf_state_select($field){
	$field['choices'] = hn_state_abbr();
	return $field;
}
add_filter('acf/load_field/key=field_65fa99467d844', 'hn_acf_state_select', 10, 3);


add_filter( 'gform_pre_render_4', 'populate_posts' );
add_filter( 'gform_pre_validation_4', 'populate_posts' );
add_filter( 'gform_pre_submission_filter_4', 'populate_posts' );
add_filter( 'gform_admin_pre_render_4', 'populate_posts' );
function populate_posts( $form ) {
 
    foreach ( $form['fields'] as &$field ) {
 
        if ( $field->type != 'select' || strpos( $field->cssClass, 'populate-locations' ) === false ) {
            continue;
        }
 
        
 
        $choices = array();
		$states = hn_state_abbr();
		foreach($states as $abbr=>$state){
			$locations_in_state = get_posts(array(
				'post_type'=>'location',
				'meta_key'      => 'state',
				'meta_value'    => $abbr,
				'fields' => 'ids',
				'posts_per_page'=>-1,
				'orderby' => 'title',
				'order' => 'ASC',
			));
			if(count($locations_in_state)>0){
				foreach($locations_in_state as $abbr=>$state_info){
					
					foreach($state_info as $location_id){
						if(get_field('location_status',$location_id)['hide_listing'][0]=='1'||(get_field('location_status',$location_id)['is_it_live'][0]!='1'&&get_field('location_status',$location_id)['presale'][0]!='1')){
							continue;
						}
						$choices[] = array( 'text' => get_the_title($location_id), 'value' => get_the_title($location_id) );
					}
				}
			}
		}

 
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $field->placeholder = 'Location*';
        $field->choices = $choices;
 
    }
 
    return $form;
}

function enable_svg_upload( $upload_mimes ) {



    $upload_mimes['svg'] = 'image/svg+xml';



    $upload_mimes['svgz'] = 'image/svg+xml';



    return $upload_mimes;


}

function hn_state_abbr($abbr=null){
	$state_by_abbr = array (
		'AK' => 'Alaska',
		'AL' => 'Alabama',
		'AS' => 'American Samoa',
		'AR' => 'Arkansas',
		'AZ' => 'Arizona',
		'CA' => 'California',
		'CO' => 'Colorado',
		'CT' => 'Connecticut',
		'DE' => 'Delaware',
		'DC' => 'District of Columbia',
		'FL' => 'Florida',
		'GA' => 'Georgia',
		'GU' => 'Guam',
		'HI' => 'Hawaii',
		'ID' => 'Idaho',
		'IA' => 'Iowa',
		'IL' => 'Illinois',
		'IN' => 'Indiana',
		'KS' => 'Kansas',
		'KY' => 'Kentucky',
		'LA' => 'Louisiana',
		'ME' => 'Maine',
		'MD' => 'Maryland',
		'MA' => 'Massachusetts',
		'MI' => 'Michigan',
		'MN' => 'Minnesota',
		'MS' => 'Mississippi',
		'MO' => 'Missouri',
		'MP' => 'Northern Mariana Islands',
		'NC' => 'North Carolina',
		'ND' => 'North Dakota',
		'NE' => 'Nebraska',
		'NV' => 'Nevada',
		'NH' => 'New Hampshire',
		'NJ' => 'New Jersey',
		'NM' => 'New Mexico',
		'NY' => 'New York',
		'OH' => 'Ohio',
		'OK' => 'Oklahoma',
		'OR' => 'Oregon',
		'PA' => 'Pennsylvania',
		'PR' => 'Puerto Rico',
		'RI' => 'Rhode Island',
		'SC' => 'South Carolina',
		'SD' => 'South Dakota',
		'TN' => 'Tennessee',
		'TX' => 'Texas',
		'UT' => 'Utah',
		'VA' => 'Virginia',
		'VT' => 'Vermont',
		'VI' => 'Virgin Islands',
		'WA' => 'Washington',
		'WV' => 'West Virginia',
		'WI' => 'Wisconsin',
		'WY' => 'Wyoming',
	);
	if($abbr){
		return $state_by_abbr[$abbr];
	}
	return $state_by_abbr;
}


add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );