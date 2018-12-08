	/* submit btn of contact form  */
$(window).load(function () {
	if ($('.agreedcheck').is(':visible')) {  
	 	if ($('.agreedcheck').is(':checked')) {   
    		$('.submit_btn').removeAttr('disabled').css('opacity', 1); 
			$('.submit_btn').addClass('mupcheck');
		} else {
    		$('.submit_btn').attr('disabled', true).css('opacity', 0.5); 
			$('.submit_btn').removeClass('mupcheck');
		}
		$('.agreedcheck').click(function () {
   			if ($(this).is(':checked')) {   
        		$('.submit_btn').removeAttr('disabled').css('opacity', 1); 
				$('.submit_btn').addClass('mupcheck');
    		} else {
        		$('.submit_btn').attr('disabled', true).css('opacity', 0.5); 
				$('.submit_btn').removeClass('mupcheck');
    		}
		});
	}
	else { 
		$('.submit_btn').removeAttr('disabled').css('opacity', 1); 
		$('.submit_btn').addClass('mupcheck');
	}
		
});