$(document).ready(function() {
	$('.form_login').hide();
	$('.profile').click(function(event) {
		$('.form_login').show()
	});
	$(document).mouseup(function(e) {
		var container = $('.form_login');
		if (!container.is(e.target) && container.has(e.target).length === 0) {
		container.hide();
		}
	});

	$('.title button').click(function(event) {
		var vitri = $('.tour').offset().top-90;
		event.preventDefault();
		$('body,html').animate({scrollTop:vitri},500);
	});
});
