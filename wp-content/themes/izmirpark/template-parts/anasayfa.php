<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage İzmir_Park
 * @since İzmir Park 1.0
 */

 get_header();

 //ÜST SLİDE
$ana_sayfa_slide_ust_args = array( 'post_type' => 'anasayfa-slide-ust', 'post_status'=> 'publish','posts_per_page' => 10 );
$ana_sayfa_slide_ust_query = new WP_Query( $ana_sayfa_slide_ust_args ); 
$ana_sayfa_slide_ust = array();
if ( $ana_sayfa_slide_ust_query->have_posts() ){
	while ( $ana_sayfa_slide_ust_query->have_posts() ) : $ana_sayfa_slide_ust_query->the_post();
		//$ana_sayfa_slide_ust[] = array('caption'=> get_the_title(), 'thumbnail'=> get_the_content());
        $ana_sayfa_slide_ust[] = array(
			'caption'=> get_the_title(), 
			'thumbnail'=> get_the_post_thumbnail(),
			'url'=> get_post_permalink()
		);
		wp_reset_postdata();
	endwhile;
}

//ALT SLİDE
$ana_sayfa_slide_alt_args = array( 'post_type' => 'anasayfa-slide-alt', 'post_status'=> 'publish', 'posts_per_page' => 10 );
$ana_sayfa_slide_alt_query = new WP_Query( $ana_sayfa_slide_alt_args ); 
$ana_sayfa_slide_alt = array();
if ( $ana_sayfa_slide_alt_query->have_posts() ){
	while ( $ana_sayfa_slide_alt_query->have_posts() ) : $ana_sayfa_slide_alt_query->the_post();
		$ana_sayfa_slide_alt[] = array(
			'caption'=> get_the_title(), 
			'thumbnail'=> get_the_post_thumbnail(),
			'url'=> get_post_permalink()
		);
		wp_reset_postdata();
	endwhile;
}

//MAĞAZALAR
$magazalar_args = array('post_type' => 'magaza', 'posts_per_page' => 48 );
$magazalar_query = new WP_Query( $magazalar_args ); 
$magazalar = array();
if ( $magazalar_query->have_posts() ){
	while ( $magazalar_query->have_posts() ) : $magazalar_query->the_post();
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$magazalar[] = array(
			'caption'=> get_the_title(), 
			'excerpt'=> get_the_excerpt(),
			'thumbnail'=> $thumbnail ? $thumbnail[0] : null,
			'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(130, 130), array('class'=>'img-thumbnail')),
			'url'=> get_post_permalink()
		);		
	endwhile;
	wp_reset_postdata();
}

?>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-8 top-left">
        <div id="anasayfa-slide-ust" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
			<?php foreach($ana_sayfa_slide_ust as $key => $slide){ ?>
            <li data-target="#anasayfa-slide-ust" data-slide-to="<?php echo $key; ?>" class="<?php echo $key==0?'active':''; ?>"></li>
            <?php } ?>
          </ol>
          <div class="carousel-inner" role="listbox">
		  <?php foreach($ana_sayfa_slide_ust as $key => $slide){ ?>
            <div class="item <?php echo $key==0?'active':''; ?>"> 
				<?php echo $slide['thumbnail']; ?>
              <div class="carousel-caption"> <?php echo $slide['caption']; ?> </div>
            </div>
			<?php } ?>
          </div>
          <a class="left carousel-control" href="#anasayfa-slide-ust" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Önceki</span> </a> <a class="right carousel-control" href="#anasayfa-slide-ust" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Sonraki</span> </a> </div>
      </div>
      <!-- carousel col -->
      <div class="col-xs-12 col-sm-4 top-right">

          <div class="m-b-10 box1">
			<a href="./sinemalar"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sinema.png" class="img-responsive m-l-auto m-r-auto" alt="Sinema" style="max-height: 306px;" /></a>
			</div>
          <div class="box2">
			<a href="./kampanyalar"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/kampanya.png" class="img-responsive m-l-auto m-r-auto" alt="Kampanya" style="max-height: 306px;" /></a>
			</div>

      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row m-t-10">
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
<section>
  <div class="container-fluid">
    <div class="row m-t-10 m-b-20">
      <div class="col-xs-12">
        <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-left" /> <span class="panel-title-izmirpark">Mağaza Arşivi</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-right" /></div>
        <div class="slide-magaza-arsivi">
        <?php foreach($magazalar as $key => $magaza){ ?>
          <div class="slide"><a href="<?php echo $magaza['url']; ?>"><?php echo $magaza['thumbnail-s']; ?></a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="footer">
    <div id="anasayfa-slide-alt" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
			<?php foreach($ana_sayfa_slide_alt as $key => $slide){ ?>
            <li data-target="#anasayfa-slide-alt" data-slide-to="<?php echo $key; ?>" class="<?php echo $key==0?'active':''; ?>"></li>
            <?php } ?>
          </ol>
          <div class="carousel-inner" role="listbox">
		  <?php foreach($ana_sayfa_slide_alt as $key => $slide){ ?>
            <div class="item <?php echo $key==0?'active':''; ?>"> 
				<?php echo $slide['thumbnail']; ?>
              <div class="carousel-caption"> <?php echo $slide['caption']; ?> </div>
            </div>
			<?php } ?>
          </div>
      <a class="left carousel-control" href="#anasayfa-slide-alt" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Önceki</span> </a> <a class="right carousel-control" href="#anasayfa-slide-alt" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Sonraki</span> </a> </div>
  </div>
</section>

<?php get_footer(); ?>