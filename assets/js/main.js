$(document).ready(function(){
	$('.btn-1').click(function()){

	});

	$('#submit').click(function()){

	});

	$( "[type='submit']" ).button();

	// $(".overlay").mouseenter(function(){
	//  $(this).fadeTo("fast",0.5);
	// });
	// $(".overlay").mouseleave(function(){
	//  $(this).fadeTo("slow",0);
	// });

// var social_networks = [
//     'wcd_facebook',
//     'wcd_youtube',
//     'wcd_twitter',
//     'wcd_vimeo',
//     'wcd_soundcloud',
//     'wcd_instagram'
// ];

});


-----------------------------------
$(document).ready(function () {
	$('#boton01').click(function(){
		if($('#menu').hasClass('open')){
			$('#menu').removeClass('open');
			$('#boton01').removeClass('open');
		}else{
			$('#menu').addClass('open');
			$('#boton01').addClass('open');
			$('#menu2').removeClass('open');
			$('#boton02').removeClass('open');
			$('#menu3').removeClass('open');
			$('#boton03').removeClass('open');
		}
	});
	$('#boton02').click(function(){
		if($('#menu2').hasClass('open')){
			$('#menu2').removeClass('open');
			$('#boton02').removeClass('open');
		}else{
			$('#menu2').addClass('open');
			$('#boton02').addClass('open');
			$('#menu').removeClass('open');
			$('#boton01').removeClass('open');
			$('#menu3').removeClass('open');
			$('#boton03').removeClass('open');
			
		}
	});
	$('#boton03').click(function(){
		if($('#menu3').hasClass('open')){
			$('#menu3').removeClass('open');
			$('#boton03').removeClass('open');
		}else{
			$('#menu3').addClass('open');
			$('#boton03').addClass('open');
			$('#menu').removeClass('open');
			$('#boton01').removeClass('open');
			$('#menu2').removeClass('open');
			$('#boton02').removeClass('open');
			
		}
	});
	$('.cerrar').click(function(){
		$('#menu, #menu2, #menu3').removeClass('open');
	});
});