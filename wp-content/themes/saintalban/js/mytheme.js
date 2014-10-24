$(window).load(function(){
	var space = ($('.mainContainer').outerWidth()) - ($('.mainContainer').width());
	console.log(space)
	$('.bottom').css('height', space);
})
