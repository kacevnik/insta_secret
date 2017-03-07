<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
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
<?php get_footer(); // подключаем footer.php ?>