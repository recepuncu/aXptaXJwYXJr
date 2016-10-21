</div><!-- ./site-content -->
<footer class="main-footer p-t-20">
  <div class="container-fluid">
    <div class="row mobile-social-nav-row">
      <div class="col-xs-12 col-sm-8">
        <ul class="izmirpark-footer">
          <li><a href="https://www.facebook.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon-2.png"  alt="Facebook" longdesc="https://www.facebook.com/izmirpark" class="img-responsive" /></a></li>
          <li><a href="http://instagram.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon-2.png"  alt="Instagram" longdesc="http://instagram.com/izmirpark" class="img-responsive" /></a></li>
          <li><a href="https://twitter.com/izmirpark"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-icon-2.png"  alt="Twitter" longdesc="https://twitter.com/izmirpark" class="img-responsive" /></a></li>
			<?php
            if ( has_nav_menu( 'footer' ) ) :
                wp_nav_menu( array(
                    'theme_location' => 'footer'
                ) );
            endif; 
            ?>          
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4">         
        <?php echo do_shortcode( '[contact-form-7 id="168" title="Abone Ol"]' ); ?>
      </div>
    </div>
    <div class="text-center p-0 m-0 m-b-20">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down-footer.png" width="24" height="9" />
    </div>
    <div class="row">
      <div class="col-xs-12">
        <p>© 2016 <a class="footer-a" href="http://www.brandoves.com.tr/">Brandvoves</a></p>
        <p>Tüm hakları saklıdır.</p>
        <p>Tasarım <a class="footer-a" href="http://www.brandoves.com.tr/">Brandoves</a></p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bxslider/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body></html>