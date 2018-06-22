$(document).ready(function() {
    $(document).on("click",".registration .send",function(e){
        e.preventDefault();
        var form = $("#form-regis");
        var url = form.attr("url-regis");
        $.ajax({
            url     : url,
            data    : form.serialize(),
            type    : "POST",
            dataType: "json",
            success : function (result) {
                console.log(result);
            }
        });
    });
});