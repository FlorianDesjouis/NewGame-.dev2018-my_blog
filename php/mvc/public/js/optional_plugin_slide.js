$(document).ready(function(){

    $(".slide").animate({"left": "-=2000px"}, 500);

    $(".slide a").click(function(){
        var url = $(this).attr("href");
        $(".slide").animate({"left": "-=2000px"}, 500, "linear", function(){window.location.href = url;} );
        return false;
    });

});