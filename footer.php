<?php
/**
 * Шаблон подвала (footer.php)
 */
	$theme_options = get_option('option_name');
?>
  <div id="footer-wrapper">
    <footer id="sub-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 center">

            <article class="col-md-5 center">
              <div class="widget">
                <h4>Свяжитесь с нами</h4>
                <ul class="socialmedia">
                	<?php if($theme_options['kdv_facebook_header'] != ''){ ?>
                    <li>
                    	<a href="<?php echo $theme_options['kdv_facebook_header']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <?php } if($theme_options['kdv_tvit_header'] != ''){ ?>
                    <li>
                    	<a href="<?php echo $theme_options['kdv_tvit_header']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <?php } if($theme_options['kdv_linke_header'] != ''){ ?>
                	<li>
                		<a href="<?php echo $theme_options['kdv_linke_header']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                	</li>
                	<?php } if($theme_options['kdv_google_header'] != ''){ ?>
                	<li>
                		<a href="<?php echo $theme_options['kdv_google_header']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                	</li>
                	<?php } if($theme_options['kdv_youtube_header'] != ''){ ?>
                	<li>
                		<a href="<?php echo $theme_options['kdv_youtube_header']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                	</li>
                	<?php } if($theme_options['kdv_rss_header'] != ''){ ?>
                	<li>
                		<a href="<?php echo $theme_options['kdv_rss_header']; ?>" target="_blank"><i class="fa fa-rss-square"></i></a>
                	</li>
                	<?php } ?>
                </ul>
              </div>
            </article>

          </div>
        </div>
      </div>
    </footer>

    <div class="footer-bar clearfix">
        <p class="left">&copy; <?php echo date("Y")." "; bloginfo( $string ); ?>. Все права защещены.</p>
    </div>
  </div>
  <?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
<?php echo $theme_options['kdv_footer_info']; ?>
</body>
</html>