<?php

/**
 * Настройки темы
 */

add_action('admin_menu', 'add_plugin_page');
function add_plugin_page(){
	add_theme_page( 'Настройки темы', 'Настройки темы', 'edit_theme_options', 'theme-opttions', 'primer_options_page_output' );
}

function primer_options_page_output(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>

		<form action="options.php" method="POST">
			<?php
				settings_fields( 'option_group' );     // скрытые защитные поля
				do_settings_sections( 'primer_page' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
				submit_button();
			?>
		</form>
	</div>
	<?php
}

/**
 * Регистрируем настройки.
 * Настройки будут храниться в массиве, а не одна настройка = одна опция.
 */
add_action('admin_init', 'plugin_settings');
function plugin_settings(){
	// параметры: $option_group, $option_name, $sanitize_callback
	register_setting( 'option_group', 'option_name', 'sanitize_callback' );

	// параметры: $id, $title, $callback, $page
	add_settings_section( 'section_id', 'Основные настройки', '', 'primer_page' );  

	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('kdv_phone_header', 'Телефон в шапке сайта', 'fill_kdv_phone_header', 'primer_page', 'section_id' );
	add_settings_field('kdv_tvit_header', 'Твиттер', 'fill_kdv_tvit_header', 'primer_page', 'section_id' );
	add_settings_field('kdv_facebook_header', 'Facebook', 'fill_kdv_facebook_header', 'primer_page', 'section_id' );
    add_settings_field('kdv_linke_header', 'LinkeInn', 'fill_kdv_linke_header', 'primer_page', 'section_id' );
    add_settings_field('kdv_google_header', 'Google +', 'fill_kdv_google_header', 'primer_page', 'section_id' );
    add_settings_field('kdv_youtube_header', 'YouTube', 'fill_kdv_youtube_header', 'primer_page', 'section_id' );
    add_settings_field('kdv_rss_header', 'RSS', 'fill_kdv_rss_header', 'primer_page', 'section_id' );
    add_settings_field('kdv_posts_main', 'Количество постов на главной', 'fill_kdv_posts_main', 'primer_page', 'section_id' );

	add_settings_field('kdv_footer_info', 'Дополнительные скрипты в футер', 'fill_kdv_footer_info', 'primer_page', 'section_id' );
}

## Заполняем опцию 1

function fill_kdv_phone_header(){
	$val = get_option('option_name');
	$val = $val['kdv_phone_header'];
	?>
	<input type="text" name="option_name[kdv_phone_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_tvit_header(){
	$val = get_option('option_name');
	$val = $val['kdv_tvit_header'];
	?>
	<input type="text" name="option_name[kdv_tvit_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_facebook_header(){
	$val = get_option('option_name');
	$val = $val['kdv_facebook_header'];
	?>
	<input type="text" name="option_name[kdv_facebook_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_linke_header(){
	$val = get_option('option_name');
	$val = $val['kdv_linke_header'];
	?>
	<input type="text" name="option_name[kdv_linke_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_google_header(){
	$val = get_option('option_name');
	$val = $val['kdv_google_header'];
	?>
	<input type="text" name="option_name[kdv_google_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_youtube_header(){
	$val = get_option('option_name');
	$val = $val['kdv_youtube_header'];
	?>
	<input type="text" name="option_name[kdv_youtube_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_rss_header(){
	$val = get_option('option_name');
	$val = $val['kdv_rss_header'];
	?>
	<input type="text" name="option_name[kdv_rss_header]" style="width: 400px;" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function fill_kdv_posts_main(){
	$val = get_option('option_name');
	$val = $val['kdv_posts_main'];
	?>
	<input name="option_name[kdv_posts_main]" type="number" step="1" min="1" id="option_name[kdv_posts_main]" value="<?php echo esc_attr( $val ) ?>" class="small-text"> постов
	<?php
}

function fill_kdv_footer_info(){
	$val = get_option('option_name');
	$val = $val['kdv_footer_info'];
	?>
	<textarea name="option_name[kdv_footer_info]" style="width: 400px; height: 150px;"><?php echo esc_attr( $val ) ?></textarea>
	<?php
}

## Очистка данных
function sanitize_callback( $options ){ 
	// очищаем
	foreach( $options as $name => & $val ){
		//if( $name == 'kdv_slogan_header' )
			//$val = strip_tags( $val );

		if( $name == 'kdv_informer' )
			$val = intval( $val );
	}

	//die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

	return $options;
}