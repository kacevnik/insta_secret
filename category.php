<?php
/**
 * Шаблон рубрики (category.php)
 */
get_header(); // подключаем header.php ?>
<section id="hero-general">
    <div id="background" style="background-color: #000000;"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1><?php single_cat_title(); // название категории ?></h1>
        </div>
      </div>
    </div>
</section>
<section class="lead-magnet" style="margin-bottom: 40px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center center">
          <p><span>Новый подробный чек-лист</span> Как не попасть в бан инстаграмм?</p>
          <a id="subnav-cta-button" class="opt-in-form btn btn-md" href="#">Скачать</a> </div>
      </div>
    </div>
</section>
<section>
	<div class="container">
		<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>
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
<?php get_footer(); // подключаем footer.php ?>