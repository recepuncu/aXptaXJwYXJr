<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

get_header(); 

$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
$etkinlik = array(
	'title'=> get_the_title(), 
	'thumbnail'=> $thumbnail ? $thumbnail[0] : null,
	'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(170, 242)),
	'url'=> get_post_permalink()	
);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container m-b-10">
	<div class="row">
		<div class="col-xs-12 col-sm-5">
			<div>
				<?php echo '<img src="'.$etkinlik['thumbnail'].'" class="img-responsive m-l-auto m-r-auto" alt="'.$etkinlik['title'].'" />'; ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7">
			<blockquote>				
				<h2 class="m-t-0"><?php echo $etkinlik['title']; ?></h2>
				<footer><?php echo wpautop($post->post_content); ?></footer>
			</blockquote>			
		</div>
	</div>    
</div>
</article>

<?php get_footer(); ?>