<?php
/**
 * Главная страница (index.php)
 */
get_header(); // подключаем header.php ?> 

  <section id="latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12 center">
            <h3>Blog</h3>
            	<h1><?php // заголовок архивов
					if (is_day()) : printf('Daily Archives: %s', get_the_date()); // если по дням
					elseif (is_month()) : printf('Monthly Archives: %s', get_the_date('F Y')); // если по месяцам
					elseif (is_year()) : printf('Yearly Archives: %s', get_the_date('Y')); // если по годам
					else : 'Archives';
				endif; ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>

          		<div  class="col-md-3 blog-item CareerampBusiness">
                <div class="box box-sm"  style="cursor:pointer;"  onclick="document.location='https://www.tonyrobbins.com/career-business/power-user-personas/'">
                  <a href="https://www.tonyrobbins.com/career-business/power-user-personas/"></a>
                                      <img onload="titlePadding()"  src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2017/01/26172759/User-personas_meeting-customers_blog-header_credit-shutterstock-tsyhun-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-certificate fa-fw"></i> promo</span>-->
                    <a href="https://www.tonyrobbins.com/career-business/" rel="category tag">Career &amp; Business</a>                    <h4 class="promotion">The power of user personas</h4>
                      <div class="blog-line"> </div>
                    <p class="subtitle">4 steps towards building a more effective marketing strategy</p>
                  <!--  <a href="https://www.tonyrobbins.com/career-business/power-user-personas/" class="btn"> read more</a>-->
                  </div>
                </div>
              </div>

                        
                            
              <div class="col-md-3 blog-item MindampMeaning">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/mind-meaning/world-spinning-control/'">
                  <a href="https://www.tonyrobbins.com/mind-meaning/world-spinning-control/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2017/01/24131021/world-out-of-control_tree-fallen_blog-header_credit-dailu-shutterstock-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/mind-meaning/" rel="category tag">Mind &amp; Meaning</a>                    <h4><a href="https://www.tonyrobbins.com/mind-meaning/world-spinning-control/">World spinning out of control?</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">How to take charge of your internal reaction to external forces</p>
                  </div>
                </div>
              </div>

                          
                            
              <div class="col-md-3 blog-item LeadershipampImpact">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/leadership-impact/power-dream-bucket/'">
                  <a href="https://www.tonyrobbins.com/leadership-impact/power-dream-bucket/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2017/01/12150041/dream-bucket_successful-woman_blogheade1280_credit_shutterstock-Dirima-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/leadership-impact/" rel="category tag">Leadership &amp; Impact</a>                    <h4><a href="https://www.tonyrobbins.com/leadership-impact/power-dream-bucket/">The power of a ‘dream bucket’</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">How one woman’s dream bucket raised over $200,000 to save children</p>
                  </div>
                </div>
              </div>

                          
                            
              <div class="col-md-3 blog-item LeadershipampImpact">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/leadership-impact/build-team-works/'">
                  <a href="https://www.tonyrobbins.com/leadership-impact/build-team-works/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2016/01/07205007/disc-profile-525x525.jpg" alt="DISC">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/leadership-impact/" rel="category tag">Leadership &amp; Impact</a>                    <h4><a href="https://www.tonyrobbins.com/leadership-impact/build-team-works/">How to build a team that works</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">It all starts with understanding people's true nature</p>
                  </div>
                </div>
              </div>

                          
                            
              <div class="col-md-3 blog-item CareerampBusiness">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/career-business/shouldnt-quit-day-job/'">
                  <a href="https://www.tonyrobbins.com/career-business/shouldnt-quit-day-job/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2017/01/11141641/quit-day-job_entrepreneur-girl-working_blog-header_credit-shutterstock-uber-images-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/career-business/" rel="category tag">Career &amp; Business</a>                    <h4><a href="https://www.tonyrobbins.com/career-business/shouldnt-quit-day-job/">Why you shouldn’t quit your day job</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">Keep your side venture on the side – until it’s time to scale up</p>
                  </div>
                </div>
              </div>

                          
                            
              <div class="col-md-3 blog-item Masterpiece">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/masterpiece/adopt-abundance-mindset/'">
                  <a href="https://www.tonyrobbins.com/masterpiece/adopt-abundance-mindset/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2016/12/22120533/wol-abundant-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/masterpiece/" rel="category tag">Masterpiece</a>                    <h4><a href="https://www.tonyrobbins.com/masterpiece/adopt-abundance-mindset/">Adopt an abundance mindset</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">What happens when you choose gratitude & appreciation?</p>
                  </div>
                </div>
              </div>

                          
                            
              <div class="col-md-3 blog-item Masterpiece">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/masterpiece/feed-your-mind/'">
                  <a href="https://www.tonyrobbins.com/masterpiece/feed-your-mind/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2016/12/22120548/wol-feedmind-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/masterpiece/" rel="category tag">Masterpiece</a>                    <h4><a href="https://www.tonyrobbins.com/masterpiece/feed-your-mind/">Feed your mind</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">You are in control of what enters your head – stand guard! </p>
                  </div>
                </div>
              </div>

                          
                            
              <div class="col-md-3 blog-item Masterpiece">
                <div class="box box-sm" onclick="document.location='https://www.tonyrobbins.com/masterpiece/be-gentle-with-your-partner/'">
                  <a href="https://www.tonyrobbins.com/masterpiece/be-gentle-with-your-partner/"></a>
                                      <img onload="titlePadding()" src="https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2016/12/22120553/wol-gentle-525x525.jpg" alt="">
                                    <div class="box-content">
                    <!--<span class="box-type"><i class="fa fa-fire fa-fw"></i> hot</span>-->
                    <a href="https://www.tonyrobbins.com/masterpiece/" rel="category tag">Masterpiece</a>                    <h4><a href="https://www.tonyrobbins.com/masterpiece/be-gentle-with-your-partner/">Be gentle with your partner</a></h4>
                    <div class="blog-line"> </div>
                    <p class="subtitle">3 things you can do now to create a new level of intimacy</p>
                  </div>
                </div>
              </div>

                                  </div>
      </div>
    </div>
  </section>
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
  <!-- hero form pop up -->
<div id="form-hero-cta" class="overlay hidden"> <a class="overlay-close" href="#"><i class="fa fa-times-circle fa-lg"></i></a>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center center">
        <h2></h2>
                <div class="embedded-marketo-form col-xs-10 center">
          test                  </div>
      </div>
    </div>
  </div>
</div>

<!-- product cta form pop up -->
<div id="form-product-cta" class="overlay hidden"> <a class="overlay-close" href="#"><i class="fa fa-times-circle fa-lg"></i></a>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center center">
        <h2>Breakthrough University Mobile App</h2>
        Sign up below to get access to Breakthrough University.        <div class="embedded-marketo-form col-xs-10 center">
          <form id="mktoForm_1365"></form>
<script>MktoForms2.loadForm("//app-sj03.marketo.com", "299-KII-331", 1365);</script>        </div>
      </div>
    </div>
  </div>
</div>

<!-- announcement section -->


<!--
Old annoucnment code, commented out
  -->


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://www.tonyrobbins.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.tonyrobbins.com/search/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
  <div id="footer-wrapper">
    <footer id="sub-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 center">

            <article class="col-md-3">
              <div class="widget">
                <div class="address">
                  <div class="schema" itemscope="" itemtype="http://schema.org/Organization">
                    <span itemprop="name"><h4>ROBBINS RESEARCH<br>INTERNATIONAL, INC.</h4></span>

                    <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                      <span itemprop="streetAddress">6160 Cornerstone Court East<br><span>Ste. 200</span></span>
                      <span itemprop="addressLocality">San Diego</span>, <span itemprop="addressRegion">CA</span> <span
                          itemprop="postalCode">92121</span></div>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h4>Connect With Tony</h4>
                <ul class="socialmedia">
                  <li><a href="https://www.facebook.com/TonyRobbins/" target="_blank"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="https://twitter.com/tonyrobbins" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/ajrobbins" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li><a href="https://plus.google.com/+TonyRobbins/posts" target="_blank"><i
                          class="fa fa-google-plus"></i></a></li>
                  <li><a href="https://www.youtube.com/user/TonyRobbinsLive" target="_blank"><i
                          class="fa fa-youtube"></i></a></li>
                  <li><a href="/feed" target="_blank"><i class="fa fa-rss-square"></i></a></li>
                </ul>
              </div>
            </article>

            <article class="col-md-4 col-md-offset-1">
              <div class="widget">
                <ul id="menu-footer" class=""><li id="menu-item-3390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3390"><a title="Sitemap" href="https://www.tonyrobbins.com/sitemap/">Sitemap</a></li>
<li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a title="Careers" href="https://www.tonyrobbins.com/employment-opportunities/">Careers</a></li>
<li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a title="Terms" href="https://www.tonyrobbins.com/terms-of-use/">Terms</a></li>
<li id="menu-item-7908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7908"><a title="Policies" href="https://www.tonyrobbins.com/privacy-policy/">Policies</a></li>
<li id="menu-item-9153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9153"><a title="Return Policy" href="https://www.tonyrobbins.com/return-policy/">Return Policy</a></li>
<li id="menu-item-11272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11272"><a title="Affiliates" href="https://www.tonyrobbins.com/tony-robbins-affiliate-program/">Affiliates</a></li>
<li id="menu-item-16212" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16212"><a title="DISC ASSESSMENT" href="https://www.tonyrobbins.com/disc/">DISC ASSESSMENT</a></li>
<li id="menu-item-16512" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16512"><a title="Firewalk" href="http://www.tonyrobbinsfirewalk.com/">Firewalk</a></li>
</ul>              </div>
            </article>

            <article class="col-md-3 col-md-offset-1">
                <div class="widget">
                
                  <h4><a href="https://www.tonyrobbins.com/media-inquiries/">Media Inquiries</a></h4>
                  <p>Robbins Research International, Inc. has a dedicated media department. Members of the press are welcome to contact us regard...</p>

                              </div>

              <div class="widget">
                
                  <h4><a href="https://www.tonyrobbins.com/contact-us/">Customer Support</a></h4>
                  <p>We’re here to help! Our Customer Service Team is available to assist you Monday – Friday, 8:00AM to 5:00PM</p>

                              </div>
            </article>

          </div>
        </div>
      </div>
    </footer>

    <div class="footer-bar clearfix">
        <p class="left">&copy; 2017 Robbins Research International, Inc. All rights reserved.</p>
    </div>
  </div>

</body>
</html>
<?php get_footer(); // подключаем footer.php ?>