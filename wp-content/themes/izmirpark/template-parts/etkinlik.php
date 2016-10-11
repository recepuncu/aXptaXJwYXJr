<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

get_header();

echo get_the_post_thumbnail();

echo get_the_title();

echo $post->post_content;

?>

<?php get_footer(); ?>