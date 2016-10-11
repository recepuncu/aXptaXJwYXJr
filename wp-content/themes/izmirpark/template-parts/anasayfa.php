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

?>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-8">
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
      <div class="col-xs-12 col-sm-4">
        <div class="row">
          <div class="col-xs-6 col-sm-12 col-md-12 m-b-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sinema.png" class="img-responsive" alt="Sinema" style="max-height: 306px;" /></div>
          <div class="col-xs-6 col-sm-12 col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/kampanya.png" class="img-responsive" alt="Kampanya" style="max-height: 306px;" /></div>
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
    <div class="row m-t-10">
      <div class="col-xs-12">
        <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" style="margin-right: 75px" /> <span class="panel-title-izmirpark">Mağazalar</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" style="margin-left: 75px" /></div>
        <div class="slide-magaza-logolari">
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza1"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza2"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza3"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza4"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza5"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza6"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza7"></div>
          <div class="slide"><img src="http://placehold.it/300x150&text=Mağaza8"></div>
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
            <li data-target="#anasayfa-slide-ust" data-slide-to="<?php echo $key; ?>" class="<?php echo $key==0?'active':''; ?>"></li>
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