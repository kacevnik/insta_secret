<?php
/**
 * Шаблон отдельной записи (single.php)
 */
get_header(); // подключаем header.php 
$theme_options = get_option('option_name');
?>
<section id="hero-general">
    <div id="background" style="background-color: #000000;"></div>    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1><?php the_title(); // заголовок поста ?></h1>
          <p class="sub-text"><?php echo get_the_excerpt(); ?></p>
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
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
                        <?php the_content(); // контент ?>
                    </article>
                <?php endwhile; // конец цикла ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
        <h3>Blog</h3>
        <?php 
        $args = array(
    'numberposts' => 4,
    'post_status' => 'publish',
); 

$result = wp_get_recent_posts($args);

foreach( $result as $p ){ 

$cat = get_the_category($p['ID']);
$cat_id =  $cat[0]->cat_ID;
$cat_data = get_option("category_$cat_id");  
$cat_data['cat_color'];
$new_class_cat = "cat_class_".$cat_id;
?>
<?php if($cat_data['cat_color'] != ""){ ?>
<style>
    .<?php echo $new_class_cat; ?>.blog-item:hover .box-content{
        background: none;
        opacity: 1;
        background-color: #<?php echo $cat_data['cat_color']; ?>;
    }

    .<?php echo $new_class_cat; ?> .blog-line {
        background-color: #<?php echo $cat_data['cat_color']; ?>;
    }
</style>
<?php } ?>
<div class="col-md-3 blog-item<?php echo " ".$new_class_cat; ?>">
    <div class="box box-sm"  style="cursor:pointer;"  onclick="document.location='<?php echo get_permalink($p['ID']); ?>'">
        <a href="<?php echo get_permalink($p['ID']); ?>"></a>
        <img onload="titlePadding()"  src="<?php echo get_the_post_thumbnail_url($p['ID']); ?>" alt="">
        <div class="box-content">
            <?php echo get_the_category_list(',', '', $p['ID']) ?>
            <h4 class="promotion"><?php echo $p['post_title']; ?></h4>
            <div class="blog-line"></div>
            <p class="subtitle"><?php echo get_the_excerpt($p['ID']); ?></p>
        </div>
    </div>
</div>

 <?php } ?>

        </div>
    </div>
</section>


</section>
<section>
    <div class="container">
        <div class="row">
        <h3>Интересное</h3>
        <?php 
        $args = array(
    'numberposts' => 4,
    'post_status' => 'publish',
    'post__in' => explode(',',$theme_options['kdv_posts_in_post']),
    'orderby' => 'rand'
); 

$result = wp_get_recent_posts($args);

foreach( $result as $p ){ 

$cat = get_the_category($p['ID']);
$cat_id =  $cat[0]->cat_ID;
$cat_data = get_option("category_$cat_id");  
$cat_data['cat_color'];
$new_class_cat = "cat_class_".$cat_id;
?>
<?php if($cat_data['cat_color'] != ""){ ?>
<style>
    .<?php echo $new_class_cat; ?>.blog-item:hover .box-content{
        background: none;
        opacity: 1;
        background-color: #<?php echo $cat_data['cat_color']; ?>;
    }

    .<?php echo $new_class_cat; ?> .blog-line {
        background-color: #<?php echo $cat_data['cat_color']; ?>;
    }
</style>
<?php } ?>
<div class="col-md-3 blog-item<?php echo " ".$new_class_cat; ?>">
    <div class="box box-sm"  style="cursor:pointer;"  onclick="document.location='<?php echo get_permalink($p['ID']); ?>'">
        <a href="<?php echo get_permalink($p['ID']); ?>"></a>
        <img onload="titlePadding()"  src="<?php echo get_the_post_thumbnail_url($p['ID']); ?>" alt="">
        <div class="box-content">
            <?php echo get_the_category_list(',', '', $p['ID']) ?>
            <h4 class="promotion"><?php echo $p['post_title']; ?></h4>
            <div class="blog-line"></div>
            <p class="subtitle"><?php echo get_the_excerpt($p['ID']); ?></p>
        </div>
    </div>
</div>

 <?php } ?>

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
