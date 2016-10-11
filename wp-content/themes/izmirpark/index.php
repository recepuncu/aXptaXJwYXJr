<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

get_header();

if ( is_front_page() ) :
	get_template_part( 'template-parts/anasayfa', 'index' );
	
elseif ( is_page( 'Etkinlikler' ) ) :
    get_template_part( 'template-parts/etkinlikler', 'Etkinlikler' );
	
elseif ( is_page( 'Mağazalar' ) ) :
    get_template_part( 'template-parts/magazalar', 'Mağazalar' );
	
elseif ( is_category() ) :
    $parents = get_category_parents( $cat, false, '|' );
	$parent = explode('|', $parents);
	if(strcmp(strip_tags($parent[0]), 'MAĞAZALAR')==0){
		get_template_part( 'template-parts/magazalar', 'Mağazalar' );
	}
	echo $parent[0];
	
elseif ( is_single() ) :
    $post_type = get_post_type();
	if($post_type=='etkinlik'){
		get_template_part( 'template-parts/etkinlik', 'Etkinlik' );
	}
	
endif;

get_sidebar();

get_footer();