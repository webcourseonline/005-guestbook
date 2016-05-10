$(document).ready(function() {

    $(".editMessage").click(function(){
        $.ajax({
            type : 'POST',
            url : "http://127.0.0.1:8080/index.php/",
            data: {
                edit: true,
                id: $(this).parents(".data").children().children(".message").attr("id"),
                message: $(this).parents(".data").children().children(".message").html()
            },
            success : function( data ) {
                alert(data);
                $(this).parents(".data").children().children(".message").html(data);
                $(this).parents(".data").children().css("background-color","blue");
            }
        });
    })
});