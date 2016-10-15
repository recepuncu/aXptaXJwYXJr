<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

get_header(); 

wp_reset_postdata();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
        	<?php the_content(); ?>
		</div>
	</div>
</div>
</article>

<?php get_footer(); ?>