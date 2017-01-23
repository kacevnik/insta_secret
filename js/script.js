$( document ).ready(function() {

	$('.item_hide').hover(function(){
		$('.item_hide').not(this).slideDown(400);
		$(this).slideUp(400);
	});

	$('.container').hover(function(){
		$('.item_hide').slideDown(400);
	});

	$('.menu_tap').click(function(){
		$(this).hide();
		$('.close_tap').show();
		$('.hide_search').slideUp('slow');
		$('.hide_menu').slideDown('slow');
	});

	$('.close_tap').click(function(){
		$(this).hide();
		$('.menu_tap').show();
		$('.hide_menu').slideUp('slow');
	});

	$('.search_tap').click(function(){
		if($('.hide_search').css('display') == 'block'){
			$('.hide_search').slideUp('slow');
		}else{
			$('.menu_tap').show();
			$('.close_tap').hide();
			$('.hide_menu').slideUp('slow');
			$('.hide_search').slideDown('slow');
		}
	});
});