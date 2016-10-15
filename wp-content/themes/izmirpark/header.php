<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="theme-color" content="#ec008c">
<title><?php echo $page_title; ?></title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/js/bxslider/jquery.bxslider.css"/>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/customize.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/phone.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/tablet.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/desktop.css"/>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body>
<nav class="navbar navbar-default navbar-izmirpark navbar-fixed-top">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo $logo[0]; ?>" class="visible-xs" height="30" alt="İzmir Park" />
	  <img src="<?php echo $logo[0]; ?>" class="visible-sm" height="30" alt="İzmir Park" />
      <img src="<?php echo $logo[0]; ?>" class="visible-lg" alt="İzmir Park" />
	  </a>
<ul class="mobile-social-nav visible-xs">
        <li><a href="https://www.facebook.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.png" width="35" height="35" alt="Facebook" longdesc="https://www.facebook.com/izmirpark" class="img-responsive" /></a></li>
        <li><a href="http://instagram.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.png" width="35" height="35" alt="Instagram" longdesc="http://instagram.com/izmirpark" class="img-responsive" /></a></li>
        <li><a href="https://twitter.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-icon.png" width="35" height="35" alt="Twitter" longdesc="https://twitter.com/izmirpark" class="img-responsive" /></a></li>
      </ul>      
      </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php
		if ( has_nav_menu( 'primary' ) ) :
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav navbar-nav',
			) );
		endif; 
		?>
      <ul class="nav navbar-nav navbar-right visible-lg">
        <li><a href="https://www.facebook.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.png" width="35" height="35" alt="Facebook" longdesc="https://www.facebook.com/izmirpark" /></a></li>
        <li><a href="http://instagram.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.png" width="35" height="35" alt="Instagram" longdesc="http://instagram.com/izmirpark" /></a></li>
        <li><a href="https://twitter.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-icon.png" width="35" height="35" alt="Twitter" longdesc="https://twitter.com/izmirpark" /></a></li>
      </ul>
		<div class="dropdown navbar-right visible-sm">
			<button class="btn btn-default dropdown-toggle m-t-10" type="button" id="tabletten_paylas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="tabletten_paylas">
				<li><a href="https://www.facebook.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.png" width="35" height="35" alt="Facebook" longdesc="https://www.facebook.com/izmirpark" /> Facebook</a></li>
				<li><a href="http://instagram.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.png" width="35" height="35" alt="Instagram" longdesc="http://instagram.com/izmirpark" /> Instagram</a></li>
				<li><a href="https://twitter.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-icon.png" width="35" height="35" alt="Twitter" longdesc="https://twitter.com/izmirpark" /> Twitter</a></li>
			</ul>
		</div>	  
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div class="site-content">
