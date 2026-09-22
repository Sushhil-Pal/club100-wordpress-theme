<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function club100_enqueue_assets() {

    $theme_css_path = get_stylesheet_directory() . '/style.css';

    wp_enqueue_style(
        'club100-style',
        get_stylesheet_uri(),
        array(),
        file_exists( $theme_css_path )
            ? filemtime( $theme_css_path )
            : wp_get_theme()->get( 'Version' )
    );

    $global_css_path = get_template_directory() . '/assets/css/global.css';

    wp_enqueue_style(
        'club100-global',
        get_template_directory_uri() . '/assets/css/global.css',
        array( 'club100-style' ),
        file_exists( $global_css_path )
            ? filemtime( $global_css_path )
            : wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'club100_enqueue_assets' );


function club100_register_block_styles() {

    register_block_style(
        'core/button',
        array(
            'name'  => 'secondary',
            'label' => __( 'Secondary', 'club100' ),
        )
    );

    register_block_style(
        'core/button',
        array(
            'name'  => 'light',
            'label' => __( 'Light', 'club100' ),
        )
    );

    register_block_style(
        'core/group',
        array(
            'name'  => 'club100-card',
            'label' => __( 'Club100 Card', 'club100' ),
        )
    );
}

add_action( 'init', 'club100_register_block_styles' );

/**
 * Club100 favicon.
 */
function club100_favicon() {
	$icon = get_template_directory_uri()
		. '/assets/images/club100-logo/club100-favicon-512.png';

	echo '<link rel="icon" type="image/png" sizes="512x512" href="' . esc_url( $icon ) . '">' . "\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url( $icon ) . '">' . "\n";
}

add_action( 'wp_head', 'club100_favicon' );
add_action( 'admin_head', 'club100_favicon' );

add_theme_support( 'title-tag' );

/**
 * Club100 SEO + Social Sharing Metadata
 */
function club100_get_page_meta() {

	$default = array(
		'title'       => 'Club100 | Fitness, Well-being & Measurable Progress',
		'description' => 'Club100 combines fitness assessment, guided training and progress tracking to help people build strength, mobility, cardiovascular fitness and overall well-being.',
		'image'       => get_template_directory_uri() . '/assets/images/social/club100-social-default.jpg',
	);

	if ( is_front_page() ) {
		return array(
			'title'       => 'Club100 | Know Your Fitness. Improve It. Measure the Progress.',
			'description' => 'Fitness assessment, structured training and reassessment designed to help you understand your fitness and measure real progress.',
			'image'       => get_template_directory_uri() . '/assets/images/social/club100-home.jpg',
		);
	}

	if ( is_page( 'fitness-assessment' ) ) {
		return array(
			'title'       => 'Club100 Fitness Assessment | Know Where Your Fitness Stands',
			'description' => 'Understand your fitness across body composition, cardiovascular health, strength, mobility, balance and well-being with the Club100 Fitness Assessment.',
			'image'       => get_template_directory_uri() . '/assets/images/social/club100-assessment.jpg',
		);
	}

	if ( is_page( 'corporate' ) ) {
		return array(
			'title'       => 'Corporate Fitness & Well-being Programs | Club100',
			'description' => 'Structured employee fitness programs combining assessment, guided training, engagement and measurable progress.',
			'image'       => get_template_directory_uri() . '/assets/images/social/club100-corporate.jpg',
		);
	}

	if ( is_page( 'societies' ) ) {
		return array(
			'title'       => 'Community Fitness Programs for Societies | Club100',
			'description' => 'Bring structured, varied and measurable fitness programs to your residential community with Club100.',
			'image'       => get_template_directory_uri() . '/assets/images/social/club100-societies.jpg',
		);
	}

	if ( is_page( 'about' ) ) {
		return array(
			'title'       => 'About Club100 | Fitness That Helps You Live Better',
			'description' => 'Learn why Club100 combines measurable assessment, varied training, community participation and progress tracking into one fitness journey.',
			'image'       => get_template_directory_uri() . '/assets/images/social/club100-about.jpg',
		);
	}

	if ( is_page( 'contact' ) ) {
		return array(
			'title'       => 'Contact Club100',
			'description' => 'Talk to Club100 about fitness assessments, society fitness programs, corporate wellness programs or general enquiries.',
			'image'       => get_template_directory_uri() . '/assets/images/social/club100-contact.jpg',
		);
	}

	return $default;
}


function club100_document_title( $title ) {

	$meta = club100_get_page_meta();

	if ( ! empty( $meta['title'] ) ) {
		$title['title'] = $meta['title'];
		unset( $title['tagline'] );
		unset( $title['site'] );
	}

	return $title;
}

add_filter( 'document_title_parts', 'club100_document_title' );

function club100_social_meta() {

	if ( is_admin() ) {
		return;
	}

	$meta = club100_get_page_meta();

	$title       = $meta['title'];
	$description = $meta['description'];
	$image       = $meta['image'];
	$url         = home_url( wp_unslash( $_SERVER['REQUEST_URI'] ) );

	?>
	<meta name="description" content="<?php echo esc_attr( $description ); ?>">

	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Club100">
	<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $url ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
	<meta property="og:image:secure_url" content="<?php echo esc_url( $image ); ?>">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
	<meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
	<?php
}

add_action( 'wp_head', 'club100_social_meta', 5 );

/**
 * Add canonical URL for homepage.
 *
 * WordPress outputs canonical tags for singular pages,
 * but not necessarily for the static front page.
 */
function club100_home_canonical() {

	if ( is_front_page() ) {
		echo '<link rel="canonical" href="' . esc_url( home_url( '/' ) ) . '">' . "\n";
	}
}

add_action( 'wp_head', 'club100_home_canonical', 4 );