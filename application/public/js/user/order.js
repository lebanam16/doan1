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

// slide show

    var i=1;
	// dem so luong slide
	var mySlideCount = $(".tour-img").children('.mySlide').length;
	//show slide cp class active mac dinh
	$(".tour-img .active").show();
	var currentImg = $(".tour-img .active");

	var slides = document.getElementsByClassName("mySlide");

    //khi click nut right
	$(".content .tour-img i.right").click(function(event) {
		if(i<mySlideCount){
			$(".tour-img .active").removeClass('active').hide().next().addClass('active').show();
			i++;
		}
		else {
			return;
		}
	});

	//khi click nut left
	$(".content .tour-img i.left").click(function(event) {
		if(i>1){
			$(".tour-img .active").removeClass('active').hide().prev().addClass('active').show();
			i--;
		}
		else {
			return;
		}
	});

});

// slides[i].style.display = "none";
// dots[slideIndex-1].className += " active";

 // dots[i].className = dots[i].className.replace(" active", "");