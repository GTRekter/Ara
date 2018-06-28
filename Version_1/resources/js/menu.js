function open_mobile_menu() {
	$('.mobile-navigation').css('display', 'block');
	$('.site-wrap').animate({left: "-75%"}, 230, function() {
		$(this).addClass('opened');
		$('.top-wrapper-fixed').animate({left: "-75%"}, 30, function() { });
	});
}

function close_mobile_menu() {
	$('.top-wrapper-fixed').animate({left: "0px"}, 30, function() {
		$('.site-wrap').animate({left: "0px"}, 260, function() {
			$(this).removeClass('opened');
			$('.mobile-navigation').css('display', 'none');
		});
	});
}

$(document).ready(function() {
	//var menuHeight = $('#menu-mobile').height();
	
	$('.mobile-menu-button').toggle(function() {
		open_mobile_menu();
		$(this).find('i').removeClass('icon-menu');
		$(this).find('i').addClass('icon-cross');
	}, function() {
		close_mobile_menu();
		$(this).find('i').removeClass('icon-cross');
		$(this).find('i').addClass('icon-menu');
	});
	
});