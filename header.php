<?php
/**
 * Шаблон шапки (header.php)
 */
	$theme_options = get_option('option_name');
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
	<script type='text/javascript'>
/* <![CDATA[ */
var vlpp_vars = {"prettyPhoto_rel":"wp-video-lightbox","animation_speed":"fast","slideshow":"5000","autoplay_slideshow":"false","opacity":"0.80","show_title":"true","allow_resize":"true","allow_expand":"true","default_width":"640","default_height":"480","counter_separator_label":"\/","theme":"pp_default","horizontal_padding":"20","hideflash":"false","wmode":"opaque","autoplay":"false","modal":"false","deeplinking":"false","overlay_gallery":"true","overlay_gallery_max":"30","keyboard_shortcuts":"true","ie6_fallback":"true"};
/* ]]> */
</script>

<script type="text/javascript">
(function() {
var didInit = false;
function initMunchkin() {
if(didInit === false) {
didInit = true;
Munchkin.init('299-KII-331');
}
}
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = '//munchkin.marketo.net/munchkin.js';
s.onreadystatechange = function() {
if (this.readyState == 'complete' || this.readyState == 'loaded') {
initMunchkin();
}
};
s.onload = initMunchkin;
document.getElementsByTagName('head')[0].appendChild(s);
})();
</script>
    
<!-- Check if free trial page and gather datalayer -->
        
<!-- START segment.io script -->
<script type="text/javascript">
!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
analytics.load("XOc47w2WAUWMfVdKnw3G5fCS0nyPA1Mo");
analytics.page()
}}();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.login-trigger').click(function () {
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');

            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
    });
</script>

<script type='text/javascript'>
    (function (d, t) {
        var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
        bh.type = 'text/javascript';
        bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=xbfwxaj7qjczjktw5wyq1q';
        s.parentNode.insertBefore(bh, s);
    })(document, 'script');
</script>

<!-- og image logic -->

</head>
<body <?php body_class(); // все классы для body ?>>
    <div id="header-bar-desktop" class="header-bar">
        <div class="header-container">
            <div class="header-socials">
                <p class="phone">
                    <a href='<?php echo $theme_options['kdv_phone_header']; ?>' class='phonenumber'><span class='mm-phone-number'><?php echo $theme_options['kdv_phone_header']; ?></span><i class='fa fa-fw fa-lg fa-phone'></i></a>
                </p><!-- /.phone -->

                <ul>
                	<?php if($theme_options['kdv_facebook_header'] != ''){ ?> 
                    <li>
                        <a href="<?php echo $theme_options['kdv_facebook_header']; ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
					<?php } if($theme_options['kdv_tvit_header'] != ''){ ?> 
                    <li>
                        <a href="<?php echo $theme_options['kdv_tvit_header']; ?>" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div><!-- /.socials -->

            <div class="nav-utilities">
                <ul>
                    <li class="nav-item hidden-xs hidden-sm" id="login">
                        <a href="#" class="login-trigger" id="members-portal">Вход</a>

                        <div id="login-content">
                            <form name="loginForm" class="form-horizontal" id="loginForm" method="POST" action="/members/index.php">
                                <div class="form-group">
                                    <label >Email:</label>
                                    <div class="input-container">
                                        <input type="text" class="form-control" name="username" size="30" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password:</label>
                                    <div class="input-container">
                                        <input type="password" class="form-control" name="password" size="30" />
                                    </div>
                                </div>


                                <div class="form-group row log-in-container">
                                    <div class="col-sm-5">
                                        <div class="input-container">
                                            <button class="btn btn-main" name='submit' type='submit'>Login</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="input-container">
                                            <a href="#" class="forgot-password" onClick="javascript:nw=window.open('/inc/salesforce/email_password.php','EmailPassword','width=350,height=400,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no')">&raquo; Forgot your  password?</a>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </li>
                </ul>
            </div><!-- /.nav-utilities -->
        </div>
    </div>

    <nav id="desktop-nav" class="clearfix">
        <div class="header-container">

            <div class="mobile-nav nav-item hidden-md hidden-lg">
                <a href="#" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

            <ul class="nav-logo">
                <li><a href="/"><img src="https://www.tonyrobbins.com/wp-content/themes/tonyrobbins2016/images/tr-logo-blk-on-wht.svg"
                                     alt="..."></a></li>
            </ul>

            <div class="main-nav-wrapper">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
            </div>

            <div class="nav-right">
                <div class="nav-item hidden-xs hidden-sm left">
                    <a href="#" id="search"><i class="fa fa-fw fa-lg fa-search"></i></a>
                </div>

                <div class="menu-more">
                    <p>More</p>
                    <div class="right">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden-search">
            <h3>What can we help you find?</h3>
            <form id="search-bar" method="get" action="https://www.tonyrobbins.com/">
  <label class="screen-reader-text" for="s"></label>
  <input type="search" name="s" id="s" placeholder="Search for:" value="" >
  <button class="btn" type="submit" id="searchsubmit" value="Search"><i class="fa fa-search"></i></button>
</form>        </div>
    </nav>

    <div class="side-nav-overlay">
        <div id="side-nav">

            <span class="less">Less</span>

            <ul id="menu-more-nav" class=""><li id="menu-item-15986" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15986"><a title="News" href="/news/">News</a></li>
<li id="menu-item-15987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15987"><a title="About" href="/biography/">About</a></li>
<li id="menu-item-15988" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15988"><a title="Contact" href="/contact-us/">Contact</a></li>
<li id="menu-item-15989" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15989"><a title="Podcasts" href="/podcast/">Podcasts</a></li>
</ul>
            <div class="nav-sep"></div>

							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>       </div>
    </div>

    <div id="mobile-menu" class="overlay hidden">

        <div id="header-bar-mobile" class="header-bar">
            <div class="header-container">
                <div class="header-socials">
                    <p class="phone">
                        <a href='tel://1-800-488-6040' class='phonenumber'><span class='mm-phone-number'>1-800-488-6040</span><i class='fa fa-fw fa-lg fa-phone'></i></a>
                    </p><!-- /.phone -->

                    <ul>
                        <li>
                            <a href="https://www.facebook.com/TonyRobbins/" target="_blank">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://twitter.com/tonyrobbins" target="_blank">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.socials -->

                <div class="nav-utilities">
                    <ul>
                        <li>
                            <a href="/members/index.php">Login</a>
                        </li>
                    </ul>
                </div><!-- /.nav-utilities -->
            </div>
        </div>

        <form id="search-bar" method="get" action="https://www.tonyrobbins.com/">
  <label class="screen-reader-text" for="s"></label>
  <input type="search" name="s" id="s" placeholder="Search for:" value="" >
  <button class="btn" type="submit" id="searchsubmit" value="Search"><i class="fa fa-search"></i></button>
</form>
        <div class="mobile-nav-container">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>       </div>
    </div>
  </div>

    <section id="hero">

  
    <div class="preloader">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <div id="background" class="home-hero-image" style="background-image: url('https://s3.amazonaws.com/rri-tonyrobbins-com/wp-content/uploads/2016/03/01174040/Tony-In-Front-Power-Crowd-copy.jpg')"></div>
    <div id="video-background" class="home-video">
      <video preload="auto" autoplay loop muted volume="0">
        <source src="" type="video/mp4" />
      </video>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h1>Get Ready!</h1>
          <p class="sub-text">Your Breakthrough Awaits...</p>


                      <p>
            <a id="header-cta-button" class="btn btn-lg" href="/events/unleash-the-power-within">See Tony Robbins Live!</a>
            </p>
                            </div>
      </div>
    </div>

    </section>

   <!-- opt-in top section -->
    <section class="lead-magnet">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center center">
          <p><span>Your 30 Minutes to Thrive</span> Sign Up for a Complimentary Results Coaching Session Today!</p>
          <a id="subnav-cta-button" class="opt-in-form btn btn-md" href="#">Schedule Your Call</a> </div>
      </div>
    </div>
  </section>
  
  <!-- opt-in top form pop up -->
    <div id="form" class="overlay hidden"> <a class="overlay-close" href="#"><i class="fa fa-times-circle fa-lg"></i></a>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 text-center center">
          <h2>Results Coaching</h2>
          <p>Your 30 Minutes to Thrive</p>
          <div class="embedded-marketo-form col-xs-10 center">
            <script src="//app-sj03.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_1373"></form>
<script>MktoForms2.loadForm("//app-sj03.marketo.com", "299-KII-331", 1373);</script>
          </div>
        </div>
      </div>
    </div>
  </div>