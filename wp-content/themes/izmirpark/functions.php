<?php

if ( ! function_exists( 'izmirpark_setup' ) ) :

function izmirpark_setup() {

	load_theme_textdomain( 'izmirpark' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

/*	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );*/
	
	add_theme_support( 'custom-logo', array(
		'height'      => 270,
		'width'       => 75,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),		
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1920, 9999 );
	
	register_nav_menus( array(
		'primary' => __( 'Sayfa Üst Menü', 'izmirpark' )
	) );
	
	add_theme_support( 'customize-selective-refresh-widgets' );
			
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
endif; // izmirpark_setup
add_action( 'after_setup_theme', 'izmirpark_setup' );

function return_post_type_args($name, $singular_name, $rewrite, $taxonomies=array()){
	return array(            
			'labels' => array(
				'name' => __( $name ),
				'singular_name' => __( $singular_name )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => $rewrite),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
			'taxonomies' => $taxonomies,
		);
}
function create_posttype() {
	register_post_type( 'anasayfa-slide-ust',		
		return_post_type_args('Slide Üst', 'Slide Üst', 'anasayfa-slide-ust')
	);
	register_post_type( 'anasayfa-slide-alt',		
		return_post_type_args('Slide Alt', 'Slide Alt', 'anasayfa-slide-alt')
	);
	register_post_type( 'etkinlik',		
		return_post_type_args('Etkinlikler', 'Etkinlik', 'etkinlik')
	);
	register_post_type( 'magaza',		
		return_post_type_args('Mağazalar', 'Mağaza', 'magaza', array('category'))
	);    
}
add_action( 'init', 'create_posttype' );


function izmirpark_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Anasayfa Kategori', 'izmirpark' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Anasayfa\'da orta menü alanı.', 'izmirpark' ),
		'class'         => 'izmirpark-kategori-ana-sayfa',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'izmirpark_widgets_init' );