<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

 get_header(); 

//SON 6 ETKİNLİK
$etkinlikler_args = array( 'post_type' => 'etkinlik', 'post_status'=> 'publish', 'posts_per_page' => 6 );
$etkinlikler_query = new WP_Query( $etkinlikler_args ); 
$etkinlikler = array();
if ( $etkinlikler_query->have_posts() ){
	while ( $etkinlikler_query->have_posts() ) : $etkinlikler_query->the_post();
		$etkinlikler[] = array(
			'caption'=> get_the_title(), 
			'thumbnail'=> get_the_post_thumbnail(),
			'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(170, 242)),
			'url'=> get_post_permalink()
		);
		wp_reset_postdata();
	endwhile;
}

?>
<section class="section-content">
  <div class="container-fluid">
    <div class="row">
      <?php foreach($etkinlikler as $key => $etkinlik){ ?>
      <div class="col-xs-12 col-sm-4 m-b-10">
        <div class="etkinlik-afis-orta"><a href="<?php echo $etkinlik['url']; ?>"><?php echo $etkinlik['thumbnail']; ?></a></div>
      </div>
      <?php } ?>
      
    </div>
  </div>

  <div class="container-fluid">
    <div class="row m-t-10 m-b-20">
      <div class="col-xs-12">
        <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" style="margin-right: 75px" /> <span class="panel-title-izmirpark">Etkinlik Arşivi</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" style="margin-left: 75px" /></div>
        <div class="slide-etkinlik-arsivi">
        <?php foreach($etkinlikler as $key => $etkinlik){ ?>
          <div class="slide"><a href="<?php echo $etkinlik['url']; ?>"><?php echo $etkinlik['thumbnail-s']; ?></a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  
</section>

<?php get_footer(); ?>