(function($){
	var $twTitle = $("#secondary #text-2 .widget-title");
	var itemBaseHt = $('#site-navigation li').css('height');

	/* Sub-Menu rollover */
	$('#site-navigation .menu-item-has-children').hover(
		function(){
			var $item = $(this);

			if ( !isMobile && $(window).width() > 777 ) {
				$item.stop().animate({
					height: 200
				});
			}
		},
		function(){
			var $item = $(this);
			//$item.children('.sub-menu').invisible();

			$item.stop().animate({
				height: itemBaseHt
			});
		});

	$twTitle.prepend('<img src="' + wp_data.img_dir + '/twitter.png" alt="Twitter" class="tweeticon">').wrap('<a class="widget-title-link" href="//twitter.com/zoe_samuel"></a>');


	/* Mobile Nav clickage */
	if ( isMobile ) {
		$(".menu-item-has-children > a").click(function(e){
			e.preventDefault();
			$(this).siblings(".sub-menu").slideToggle();
		});
	}



})(jQuery);