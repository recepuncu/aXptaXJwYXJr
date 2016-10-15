<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

get_header(); 
		
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
$magaza = array(
	'title'=> get_the_title(), 
	'excerpt'=> get_the_excerpt(),
	'adres'=> get_post_meta($post->ID, 'adres', true),
	'web'=> get_post_meta($post->ID, 'web', true),
	'telefon'=> get_post_meta($post->ID, 'telefon', true),
	'thumbnail'=> $thumbnail ? $thumbnail[0] : null,
	'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(130, 130), array('class'=>'img-thumbnail')),
	'url'=> get_post_permalink()
);
		
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container m-b-10">
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div> <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-responsive' ) ); ?> </div>
      <ul class="list-group">
        <li class="list-group-item"><span class="glyphicon glyphicon-road"></span>&nbsp;
		<?php echo $magaza['adres'] ?></li>
        <li class="list-group-item"><span class="glyphicon glyphicon-home"></span>&nbsp;
		<?php echo $magaza['web'] ?></li>
        <li class="list-group-item"><span class="glyphicon glyphicon-earphone"></span>&nbsp;
		<?php echo $magaza['telefon'] ?></li>
      </ul>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-9">
      <blockquote>
        <h2 class="m-t-0"><?php echo $magaza['title']; ?></h2>
        <footer><?php echo wpautop($post->post_content); ?></footer>
      </blockquote>
    </div>
  </div>
</div>
</article>
<?php get_footer(); ?>
