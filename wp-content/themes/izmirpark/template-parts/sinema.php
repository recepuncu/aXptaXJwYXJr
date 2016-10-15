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
$sinema = array(
	'title'=> get_the_title(), 
	'thumbnail'=> $thumbnail ? $thumbnail[0] : null,
	'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(170, 242)),
	'url'=> get_post_permalink(),
	'dil'=> get_post_meta($post->ID, 'dil', true),
	'sure'=> get_post_meta($post->ID, 'sure', true),
	'salon'=> get_post_meta($post->ID, 'salon', true),
	'seanslar'=> get_post_meta($post->ID, 'seanslar', true),
	'bilet_alma_adresi'=> get_post_meta($post->ID, 'bilet_alma_adresi', true),
	'fragman_adresi'=> get_post_meta($post->ID, 'fragman_adresi', true)
);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container m-b-10">
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <div> <?php echo '<img src="'.$sinema['thumbnail'].'" class="img-responsive m-l-auto m-r-auto" alt="'.$sinema['title'].'" />'; ?> </div>
    </div>
    <div class="col-xs-12 col-sm-8">
      <blockquote>
        <h2 class="m-t-0"><?php echo $sinema['title']; ?></h2>
        <footer> <?php echo wpautop($post->post_content); ?>
          <ul class="list-group">
            <li class="list-group-item"> <span style="width:70px; display: inline-block;"><b>Dil</b></span>:&nbsp;<?php echo $sinema['dil'] ?></li>
            <li class="list-group-item"> <span style="width:70px; display: inline-block;"><b>Süre</b></span>:&nbsp;<?php echo $sinema['sure'] ?></li>
            <li class="list-group-item"> <span style="width:70px; display: inline-block;"><b>Salon</b></span>:&nbsp;<?php echo $sinema['salon'] ?></li>
            <li class="list-group-item"> <span style="width:70px; display: inline-block;"><b>Seanslar</b></span>:&nbsp;<?php echo $sinema['seanslar'] ?></li>
          </ul>
          <div class="btn-group" role="group"> <a target="new" href="<?php echo $sinema['fragman_adresi']; ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-triangle-right"></span> Fragmanı izle</a> <a target="new" href="<?php echo $sinema['bilet_alma_adresi']; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-barcode"></span> Bilet Al</a> </div>
        </footer>
      </blockquote>
    </div>
  </div>
</div>
</article>
<?php get_footer(); ?>
