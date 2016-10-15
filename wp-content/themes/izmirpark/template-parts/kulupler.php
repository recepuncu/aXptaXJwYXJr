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
$kk_etkinlikler_args = array( 
	'post_type' => 'etkinlik', 'post_status'=> 'publish', 'posts_per_page' => 6, 'order' => 'DESC',
	'meta_query' => array(
		array(
			'key' => 'kulup',
			'value' => 'kadin',
			'compare' => 'LIKE'
		)
	)
);
$kk_etkinlikler_query = new WP_Query( $kk_etkinlikler_args ); 
$kk_etkinlikler = array();
if ( $kk_etkinlikler_query->have_posts() ){
	while ( $kk_etkinlikler_query->have_posts() ) : $kk_etkinlikler_query->the_post();
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$kk_etkinlikler[] = array(
			'caption'=> get_the_title(), 
			'thumbnail'=> $thumbnail ? $thumbnail[0] : null,
			'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(170, 242)),
			'url'=> get_post_permalink()
		);		
	endwhile;
	wp_reset_postdata();
}

//SON 6 ETKİNLİK
$ck_etkinlikler_args = array( 
	'post_type' => 'etkinlik', 'post_status'=> 'publish', 'posts_per_page' => 6, 'order' => 'DESC',
	'meta_query' => array(
		array(
			'key' => 'kulup',
			'value' => 'cocuk',
			'compare' => 'LIKE'
		)
	)
);
$ck_etkinlikler_query = new WP_Query( $ck_etkinlikler_args ); 
$ck_etkinlikler = array();
if ( $ck_etkinlikler_query->have_posts() ){
	while ( $ck_etkinlikler_query->have_posts() ) : $ck_etkinlikler_query->the_post();
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$ck_etkinlikler[] = array(
			'caption'=> get_the_title(), 
			'thumbnail'=> $thumbnail ? $thumbnail[0] : null,
			'thumbnail-s'=> get_the_post_thumbnail($post->ID, array(170, 242)),
			'url'=> get_post_permalink()
		);		
	endwhile;
	wp_reset_postdata();
}

?>

<section class="section-content">
  <div class="container-fluid">
    <div class="row">
      <div id="kadin-kulubu" class="col-sm-6">
        <div class="m-b-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/kadin-kulubu.png" class="img-responsive m-r-auto m-l-auto" alt="Kadın Kulübü" /></div>
        <div class="visible-xs" role="group"> <a href="#kadin-kulubu" class="btn btn-primary btn-block">Kadın Kulübü</a> <a href="#cocuk-kulubu" class="btn btn-info btn-block m-b-10">Çocuk Kulübü</a> </div>
        <div>
          <?php if(count($kk_etkinlikler)>0): ?>
          <a href="<?php echo $kk_etkinlikler[0]['url']; ?>"> <?php echo '<img src="'.$kk_etkinlikler[0]['thumbnail'].'" class="img-responsive m-l-auto m-r-auto" alt="'.$kk_etkinlikler[0]['caption'].'" />'; ?> </a>
          <?php endif; ?>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h3>Kadınlar Hayatı İzmir Park’ta Yaşıyor</h3>
            <p> Kadın Kulübü etkinlikleriyle sevdiğiniz konular hakkında bilgi edinebilir, yeni arkadaşlar edinebilir ve hayallerinizi hayata geçirmek için adım atabilirsiniz.  Kadın Kulübü üyeleri, çocukların eğitimi,moda, güzellik ve sağlık gibi yaşama dair her şeyi birlikte paylaşıyor, çözüm arıyor ve öğreniyor. Tüm kadınlara açık ve ücretsiz olan  Kadın Kulübü’nün etkinliklerine katılırken, belirli mağazalardan çeşitli indirimler ve promosyonlar kazanabilir,mutlu ve sosyal bir topluluğun parçası olabilirsiniz.</p>
          </div>
          <div class="col-md-6">
            <div class="panel panel-default m-t-10">
              <div class="panel-body"> Kadınlar Kulübü Üyelik Formu <?php echo do_shortcode( '[contact-form-7 id="110" title="Üyelik Formu"]' ); ?> </div>
            </div>
          </div>
        </div>
        <div class="row m-t-10 m-b-20">
          <div class="col-xs-12">
            <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-left" /> <span class="panel-title-izmirpark">Etkinlik Arşivi</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-right" /></div>
            <div class="slide-etkinlik-arsivi">
              <?php foreach($kk_etkinlikler as $key => $etkinlik){ ?>
              <div class="slide"><a href="<?php echo $etkinlik['url']; ?>"><?php echo $etkinlik['thumbnail-s']; ?></a></div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Kadın Kulübü -->
      
      <div id="cocuk-kulubu" class="col-sm-6">
        <div class="m-b-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cocuk-kulubu.png" class="img-responsive m-r-auto m-l-auto" alt="Çocuk Kulübü" /></div>
        <div class="visible-xs" role="group"> <a href="#kadin-kulubu" class="btn btn-info btn-block">Kadın Kulübü</a> <a href="#cocuk-kulubu" class="btn btn-primary btn-block m-b-10">Çocuk Kulübü</a> </div>
        <div>
          <?php if(count($ck_etkinlikler)>0): ?>
          <a href="<?php echo $ck_etkinlikler[0]['url']; ?>"> <?php echo '<img src="'.$ck_etkinlikler[0]['thumbnail'].'" class="img-responsive m-l-auto m-r-auto" alt="'.$ck_etkinlikler[0]['caption'].'" />'; ?> </a>
          <?php endif; ?>
        </div>
        <div>
          <h3>Miniklerin Renkli Dünyası İzmir Park’ta</h3>
          <p>İzmir Park’ın minik misafirleri Çocuk Kulübü etkinlikleriyle hem eğleniyor hem öğreniyor. Arkadaşlık ve mutluluğun paylaşıldığı etkinlerde, çocuklar yaratıcılıklarını geliştiriyor; tasarlıyor,üretiyor ve oynuyor. Birbirinden keyifli aktivitelerle yarattığımız renkli ve özgün dünyamıza tüm çocuklarımızı bekliyoruz!.</p>
        </div>
        <div class="row m-t-10 m-b-20">
          <div class="col-xs-12">
            <div class="panel-izmirpark text-center m-b-10 m-t-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-left" /> <span class="panel-title-izmirpark">Etkinlik Arşivi</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bullet-yellow.png" class="bullet-right" /></div>
            <div class="slide-etkinlik-arsivi">
              <?php foreach($ck_etkinlikler as $key => $etkinlik){ ?>
              <div class="slide"><a href="<?php echo $etkinlik['url']; ?>"><?php echo $etkinlik['thumbnail-s']; ?></a></div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Çocuk Kulübü --> 
      
    </div>
  </div>
</section>
<?php get_footer(); ?>
