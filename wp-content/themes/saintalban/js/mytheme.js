$(window).load(function(){
	if ($(window).width() > 1100) {
		divEqualizer();
	}
	
	homepageSlider();
})

$(window).resize(function() {
	if ($(window).width() > 1100) {
		divEqualizer();
	}
})

function homepageSlider() {
	$('.flexslider').flexslider({
		directionNav: false,
		controlnav: true
	})
}

function divEqualizer() {
	var height = $('.left-cont').height();
	$('.bottom-cont').css('height', height);
}
