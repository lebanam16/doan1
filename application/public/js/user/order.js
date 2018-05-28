$(document).ready(function() {
	//an tat ca noi dung
	$(".contain .slide").hide();

    //class va id active hien tai
	var currentActive = $(".intro .menu .active");
	var currentId = currentActive.attr('id');
	//chi hien thi id thuoc class duoc active
	$(".contain  #"+currentId).show();

	$(".intro .menu .index").click(function(event) {

		currentActive.removeClass("active");
		$(".contain  #"+currentId).hide();
		$(this).addClass('active');
		currentActive = $(this);
		currentId = currentActive.attr('id');
		$(".contain  #"+currentId).show();
	});

});