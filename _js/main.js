$(function(){
	
	// Gallery
	$('.gallery .thumbnails a').addClass('success').click(function(){
		if(!$('#gallery-overlay').html()){
			$('body').append('<div id="gallery-overlay"></div>');
			$('#gallery-overlay').click(function(){
				$('#gallery-overlay').hide();
			});
		}
		var imgSrc = $(this).attr('href');
		$('#gallery-overlay').show().html('<img src="'+imgSrc+'" />')
		console.log(imgSrc);
		return false;
	});
	
	// Metapixel GUI
	var spanID, spanVal;
	$('.metapixel input[type=text]').keyup(function(){
		spanID = $(this).attr('target');
		spanVal = $(this).val();
		$('#'+spanID).html(spanVal);
	});
	$('.metapixel input[type=checkbox]').click(function(){
		spanID = $(this).attr('target')
		if($(this).is(':checked')){
			spanVal = $(this).val();
		}else{
			spanVal = "";
		}
		$('#'+spanID).html(spanVal);
	});
});