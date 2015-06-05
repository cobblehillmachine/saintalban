$(window).load(function(){
	if ($(window).width() > 1100) {
// 		divEqualizer();
	}
	
	homepageSlider();
// 	tableCellWidth()
})

$(window).resize(function() {
// 	tableCellWidth()
	if ($(window).width() > 1100) {
// 		divEqualizer();
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

function mapMath() {
	var height = $('.map-wrapper img').height();
	var left = $('.left-cont').height() - $('.shop-hours.row').height() - $('.menu-cta-wrapper.row').height();
	console.log(left)
}