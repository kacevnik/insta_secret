<?php
/**
 * Шаблон отдельной записи (single.php)
 */
get_header(); // подключаем header.php ?>
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
	'numberposts' => 6,
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
<?php get_footer(); // подключаем footer.php ?>
