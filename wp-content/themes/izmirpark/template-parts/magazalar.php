<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

 get_header(); 

//MAĞAZALAR
if(!empty($cat)){
	$magazalar_args = array( 'cat'=> $cat, 'post_type' => 'magaza', 'posts_per_page' => 48 );	
}else{
	$magazalar_args = array('post_type' => 'magaza', 'posts_per_page' => 48 );
}
$magazalar_query = new WP_Query( $magazalar_args ); 
$magazalar = array();
if ( $magazalar_query->have_posts() ){
	while ( $magazalar_query->have_posts() ) : $magazalar_query->the_post();
		$magazalar[] = array(
			'caption'=> get_the_title(), 
			'excerpt'=> get_the_excerpt(),
			'thumbnail'=> get_the_post_thumbnail(),
			'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(130, 130)),
			'url'=> get_post_permalink()
		);
		wp_reset_postdata();
	endwhile;
}else{
	echo 'Mağaza bulunamadı.';
}

?>

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
		<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
			<aside class="sidebar widget-area izmirpark-kategori-ana-sayfa" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside><!-- .sidebar .widget-area -->
		<?php endif; ?>		
      </div>
    </div>
  </div>
</section>

<section class="section-content">
  <div class="container-fluid m-t-10">
    <div class="row">
      <?php foreach($magazalar as $key => $magaza){ ?>
      <div class="col-xs-2 col-sm-2 m-b-10">
        <div class="magaza-afis-orta">
			<div class="magaza-logo"><a href="<?php echo $magaza['url']; ?>"><?php echo $magaza['thumbnail']; ?></a></div>
			<div class="magaza-ozet"><?php echo wpautop($magaza['excerpt']); ?></div>
		</div>
      </div>
      <?php } ?>
      
    </div>
  </div>

  <div class="container-fluid">
    <div class="row m-t-10 m-b-20">
      <div class="col-xs-12">
        <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" style="margin-right: 75px" /> <span class="panel-title-izmirpark">Mağaza Arşivi</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" style="margin-left: 75px" /></div>
        <div class="slide-magaza-arsivi">
        <?php foreach($magazalar as $key => $magaza){ ?>
          <div class="slide"><a href="<?php echo $magaza['url']; ?>"><?php echo $magaza['thumbnail-s']; ?></a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  
</section>

<?php get_footer(); ?>