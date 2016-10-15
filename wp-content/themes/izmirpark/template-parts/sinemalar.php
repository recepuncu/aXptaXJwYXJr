<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

 get_header(); 

//SON 8 SİNEMA
$sinemalar_args = array( 'post_type' => 'sinema', 'post_status'=> 'publish', 'posts_per_page' => 8, 'order' => 'DESC' );
$sinemalar_query = new WP_Query( $sinemalar_args ); 
$sinemalar = array();
if ( $sinemalar_query->have_posts() ){
	while ( $sinemalar_query->have_posts() ) : $sinemalar_query->the_post();
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$sinemalar[] = array(
			'caption'=> get_the_title(), 
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
	endwhile;
	wp_reset_postdata();
}

?>
<section class="section-content">
  <div class="container-fluid">
    <div class="row">
      <?php foreach($sinemalar as $key => $sinema){ ?>
      <div class="col-xs-12 col-sm-6 col-md-3 m-b-10">
        <div class="sinema-afis-orta text-center">
			<a href="<?php echo $sinema['url']; ?>">				
				<?php echo '<img src="'.$sinema['thumbnail'].'" class="img-responsive m-l-auto m-r-auto" alt="'.$sinema['caption'].'" />'; ?>
			</a>
		</div>
      </div>
      <?php } ?>
      
    </div>
  </div>

  <div class="container-fluid">
    <div class="row m-t-10 m-b-20">
      <div class="col-xs-12">
        <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-left" /> <span class="panel-title-izmirpark">Sinema Arşivi</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-right" /></div>
        <div class="slide-sinema-arsivi">
        <?php foreach($sinemalar as $key => $sinema){ ?>
          <div class="slide"><a href="<?php echo $sinema['url']; ?>"><?php echo $sinema['thumbnail-s']; ?></a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  
</section>

<?php get_footer(); ?>