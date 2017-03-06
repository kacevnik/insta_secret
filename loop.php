<?php
/**
 * Запись в цикле (loop.php)
 */ 
?>
<div  class="col-md-3 blog-item CareerampBusiness" <?php post_class(); ?>>
    <div class="box box-sm"  style="cursor:pointer;"  onclick="document.location='<?php the_permalink(); ?>'">
        <a href="<?php the_permalink(); ?>"></a>
        <img onload="titlePadding()"  src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="box-content">
	        <a href="https://www.tonyrobbins.com/career-business/" rel="category tag"><?php the_category(',') ?></a><h4 class="promotion"><?php the_title(); ?></h4>
	        <div class="blog-line"></div>
	        <p class="subtitle"><?php echo get_the_excerpt(the_ID()); ?></p>
        </div>
    </div>
</div>
