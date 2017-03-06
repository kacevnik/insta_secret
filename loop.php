<?php
/**
 * Запись в цикле (loop.php)
 */ 
$cat = get_the_category(get_the_ID());
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
    <div class="box box-sm"  style="cursor:pointer;"  onclick="document.location='<?php the_permalink(); ?>'">
        <a href="<?php the_permalink(); ?>"></a>
        <img onload="titlePadding()"  src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="box-content">
	        <?php the_category(',') ?>
	        <h4 class="promotion"><?php the_title(); ?></h4>
	        <div class="blog-line"></div>
	        <p class="subtitle"><?php echo get_the_excerpt(); ?></p>
        </div>
    </div>
</div>
