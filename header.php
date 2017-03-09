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
                <ul>
                    <?php if($theme_options['kdv_email_header'] != ''){ ?> 
                    <li>
                        <a href="mailto:<?php echo $theme_options['kdv_email_header']; ?>" target="_blank">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <?php } if($theme_options['kdv_insta_header'] != ''){ ?> 
                    <li>
                        <a href="<?php echo $theme_options['kdv_insta_header']; ?>" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <?php } if($theme_options['kdv_periscope_header'] != ''){ ?> 
                    <li>
                        <a href="<?php echo $theme_options['kdv_periscope_header']; ?>" target="_blank">
                            <img src="<?php bloginfo( 'template_url' ); ?>/img/periscope.png" style="margin: -4px 0 0 0; width: 14px;">
                        </a>
                    </li>
                    <?php } if($theme_options['kdv_youtube_header'] != ''){ ?>
                    <li>
                        <a href="<?php echo $theme_options['kdv_youtube_header']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                    </li>
                	<?php } if($theme_options['kdv_facebook_header'] != ''){ ?> 
                    <li>
                        <a href="<?php echo $theme_options['kdv_facebook_header']; ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
					<?php } if($theme_options['kdv_vk_header'] != ''){ ?> 
                    <li>
                        <a href="<?php echo $theme_options['kdv_vk_header']; ?>" target="_blank">
                            <i class="fa fa-vk"></i>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div><!-- /.socials -->

            <div class="nav-utilities">
                <ul>
                <?php if($theme_options['kdv_email_header'] != ''){ ?> 
                    <li>
                        <a href="mailto:<?php echo $theme_options['kdv_email_header']; ?>" target="_blank">
                            <?php echo $theme_options['kdv_email_header']; ?>
                        </a>
                    </li>
                    <?php } ?>
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
                <li><a href="<?php bloginfo( 'wpurl' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.jpg"
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
            <h3>Поис по сайту</h3>
            <form id="search-bar" method="get" action="<?php echo home_url( '/' ); ?>">
  <label class="screen-reader-text" for="s"></label>
  <input type="search" name="s" id="s" placeholder="Поиск..." value="<?php echo get_search_query() ?>" >
  <button class="btn" type="submit" id="searchsubmit" value="Искать"><i class="fa fa-search"></i></button>
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

        <form role="search" id="search-bar" method="get" action="<?php echo home_url( '/' ); ?>">
  <label class="screen-reader-text" for="s"></label>
  <input type="search" name="s" id="s" placeholder="Поиск..." value="<?php echo get_search_query() ?>" >
  <button class="btn" type="submit" id="searchsubmit" value="Искать"><i class="fa fa-search"></i></button>
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
<?php if( is_front_page() ) { ?>
   
    <section id="hero">

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h1>Приготовься</h1>
          <p class="sub-text">Стать лучше</p>
          <p>
            <a id="header-cta-button" class="btn btn-lg" href="">Читать полезные материалы</a>
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
          <p><span>Новый подробный чек-лист</span> Как не попасть в бан инстаграмм?</p>
          <a id="subnav-cta-button" class="opt-in-form btn btn-md" href="#">Скачать</a> </div>
      </div>
    </div>
  </section>

  <section id="new-products">
        <div id="product-carousel" class="carousel slide">

    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="center-slide">
            <article class="content-right">
              <h2>Новый видео урок по торгентинговой рекламе</h2>
              <p>Пошаговая видеоинструкция по настройке, подготовке к запуску самого эффективного на данный момент способа продвижения инстаграм. Теперь и вам доступен инструмент профессионалов рекламы.</p>
                              <a href="" class="btn">Смотреть <i class="fa fa-double-angle-right"></i></a>
                          </article>
            <img src="<?php bloginfo( 'template_url' ); ?>/img/bg-phone.png" alt="...">
          </div>
        </div>

      
      </div>

        </div> <!-- Carousel -->
  </section>
  <?php } ?>