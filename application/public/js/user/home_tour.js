$(document).ready(function () {

    var url = "http://localhost/doan1/index.php/user/Home/ajax_tour";
    $.ajax({
        url     : url,
        data    : '',
        type    : "POST",
        success : function (result) {
            $("#ajax-tour").html(result);
            // for(var i=0;i<2;i++){
            //     $("#ajax-tour").append(result[i]);
            // }
        }
    });
});