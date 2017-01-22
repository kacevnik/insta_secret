$( document ).ready(function() {

	$('.item_hide').hover(function(){
		$('.item_hide').not(this).slideDown(400);
		$(this).slideUp(400);
	});

	$('.container').hover(function(){
		$('.item_hide').slideDown(400);
	});
});