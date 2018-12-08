/************************************************
  
    Site Name: 
	Description: common script
	Version: 1.0
	Author: 
	Last Modified :
	
************************************************/
$(function() {

	/*Images over*/
	var targetImgs = $('img');

	targetImgs.each(function() {
		if (this.src.match('_off')) {
			this.rollOverImg = new Image();
			this.rollOverImg.src = this.getAttribute("src").replace("_off", "_on");
			$(this.rollOverImg).css({
				position: 'absolute',
				opacity: 0
			});
			$(this).before(this.rollOverImg);

			$(this.rollOverImg).mousedown(function() {
				$(this).stop().animate({
					opacity: 0
				}, {
					duration: 0,
					queue: false
				});
			});

			$(this.rollOverImg).hover(function() {
					$(this).animate({
						opacity: 1
					}, {
						duration: 400,
						queue: false
					});
				},
				function() {
					$(this).animate({
						opacity: 0
					}, {
						duration: 400,
						queue: false
					});
				});

		}
	});
	/*親要素リンク*/
	//class="box"をクリックでイベント発火
	$('.boxlink').click(function() {
		//a要素からhref属性を探して中身を取得し、そのURLに飛ばす。別窓なら('href'), '_blank'とすればOK
		window.location = $(this).find('a').attr('href');
		return false;
	});


	/* scrool to Top */
	$('.scrollup').click(function() {
		$("html, body").animate({
			scrollTop: 10
		}, 500);
		return false;
	});
	/* scrool to id */
	$('.scrollto').click(function() {
		var el = $(this).attr('href');
		var elWrapped = $(el);
		scrollToDiv(elWrapped, 100);
		return false;
	});

	function scrollToDiv(element) {
		var offset = element.offset();
		var offsetTop = offset.top;
		var totalScroll = offsetTop;
		$('body,html').animate({
			scrollTop: totalScroll
		}, 500);
	}
/* Pagetop Button scroll down when scroll to header */	
	var topBtn = $('.backtotop');
	$(window).load(function() {
	if ($(window).scrollTop() > 100) {
			topBtn.css('bottom', 10 + 'px');
		} else {
			topBtn.css('bottom', -100 + 'px');
		}
	});
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			topBtn.css('bottom', 10 + 'px');
		} else {
			topBtn.css('bottom', -100 + 'px');
		}
	});
	topBtn.click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});

