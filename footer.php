<?php
/**
 * Шаблон подвала (footer.php)
 */
	$theme_options = get_option('option_name');
?>
<script type="text/javascript">
            //Apply javascript to new posts being loaded in by infinite scroll
            function titlePadding(){
                $videoHeight = $('.box-sm > img').height();
                $containerHeight = $('.box-content > h4').height();
                $backgroundTop = $videoHeight - $containerHeight;
                $backgroundTop = $backgroundTop - 120;
                $('.box-content > h4').css('padding-top', $backgroundTop);
                $('.blog-item').hover(function(){
                    $backgroundTop = 0;
                    if($backgroundTop < 0){
                        $backgroundTop = 0;
                    }
                    $(".box-content > h4", this).css('padding-top', $backgroundTop);
                }, function(){
                    //Reset backgroundTop value to prevent stacking negatives
                    $videoHeight = $('.box-sm > img').height();
                    $containerHeight = $('.box-content > h4').height();
                    $backgroundTop = $videoHeight - $containerHeight;
                    $backgroundTop = $backgroundTop - 120;
                    $(".box-content > h4", this).css('padding-top', $backgroundTop); 
                });
            };
            $('.blog-item').hover(function(){
                $backgroundTop = 0
                if($backgroundTop < 0){
                    $backgroundTop = 0;
                }
                $(".box-content > h4", this).css('padding-top', $backgroundTop);
            }, function(){
                $videoHeight = $('.box-sm > img').height();
                $containerHeight = $('.box-content > h4').height();
                $backgroundTop = $videoHeight - $containerHeight;
                $backgroundTop = $backgroundTop - 120;
                $(".box-content > h4", this).css('padding-top', $backgroundTop); 
            });
            $(document).ready(function(){
                //Set h4 height and hover state for blog posts
                $videoHeight = $('.box-sm > img').height();
                $containerHeight = $('.box-content > h4').height();
                $backgroundTop = $videoHeight - $containerHeight;
                $backgroundTop = $backgroundTop - 120;
                $('.box-content > h4').css('padding-top', $backgroundTop);
                $('.blog-item').hover(function(){
                $backgroundTop = 0;
                if($backgroundTop < 0){
                    $backgroundTop = 0;
                }
                $(".box-content > h4", this).css('padding-top', $backgroundTop);
                }, function(){
                    $videoHeight = $('.box-sm > img').height();
                    $containerHeight = $('.box-content > h4').height();
                    $backgroundTop = $videoHeight - $containerHeight;
                    $backgroundTop = $backgroundTop - 120;
                    $(".box-content > h4", this).css('padding-top', $backgroundTop); 
                });

            })  ;         
    
    
            $(window).resize(function(){
                $videoHeight = $('.box-sm > img').height();
                $containerHeight = $('.box-content > h4').height();
                $backgroundTop = $videoHeight - $containerHeight;
                $backgroundTop = $backgroundTop - 120;
                $('.box-content > h4').css('padding-top', $backgroundTop);
            });
    
</script>

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
<?php echo $theme_options['kdv_footer_info']; ?>
</body>
</html>