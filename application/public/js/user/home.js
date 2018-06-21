$(document).ready(function() {
	//an form login va signup
	$('.form_login').hide();
	$('.form_signup').hide();

	$('.profile').click(function(event) {
		$('.form_login').show();
	});

    // an form khi click vao vi tri bat ki khong phai form
	// $(document).mouseup(function(e) {
	// 	var container = $('.form_login');
	// 	if (!container.is(e.target) && container.has(e.target).length === 0) {
	// 	container.hide();
	// 	}
	// });
	// $(document).mouseup(function(e) {
	// 	var container = $('.form_signup');
	// 	if (!container.is(e.target) && container.has(e.target).length === 0) {
	// 	container.hide();
	// 	}
	// });

	$(".signupbutton").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		$('.form_login').hide();
		$('.form_signup').show();
	});
	$(".loginbutton").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		$('.form_signup').hide();
		$('.form_login').show();
	});

	$('.title button').click(function(event) {
		var vitri = $('.tour').offset().top-90;
		event.preventDefault();
		$('body,html').animate({scrollTop:vitri},500);
	});
    
    //hide form khi click x
	$(".close").click(function(event) {
		event.preventDefault();
		$(".form_signup").hide();
		$(".form_login").hide();
	});

    $(document).on("click","#login",function(e){
        e.preventDefault();
        var form = $("form.login");
        var url = form.attr("url-login");
        $.ajax({
            url     : url,
            data    : form.serialize(),
            type    : "POST",
            dataType: "json",
            success : function (result) {
                console.log(result);
                if (result.status == 1) {
                    window.location.reload();
                } else {
                    console.log(result.msg);
                    $(".form_login .warning").html(result.msg);
                }
            }
        });
    });

	//signup
	$(document).on("click","#signup",function(e){
		e.preventDefault();
		var form = $("form.signup");
		var url = form.attr("url-signup");
		$.ajax({
            url     : url,
            data    : form.serialize(),
            type    : "POST",
            dataType: "json",
            success : function (result) {
            	console.log(result);
                if (result.status == 1) {
                    window.location.reload();
                } else {
                	console.log(result.msg);
                    $(".form_signup .warning").html(result.msg);
                }
            }
        });
	});

	//khi click logout
	$(document).on("click",".header button.logout",function (e) {
		e.preventDefault();
		var url = "http://localhost/doan1/index.php/user/Home/logout"
        $.ajax({
            url     : url,
            type    : "POST",
            success : function () {
                window.location.reload();
            }
        });
    })

});
