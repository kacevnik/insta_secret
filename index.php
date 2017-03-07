<?php
/**
 * Главная страница (index.php)
 */
get_header(); // подключаем header.php 
$count = 0;
$theme_options = get_option('option_name');
if($theme_options['kdv_posts_main'] != ''){$per_page = $theme_options['kdv_posts_main'];}else{$per_page = 4;}
?> 

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
					<?php if($count == $per_page){break;}?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
					<?php $count++?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); // подключаем footer.php ?>