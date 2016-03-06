$(document).ready(function(){
    $(window).scroll(function(){
        toTheTop = $(document).scrollTop();
        if(toTheTop >=120)
            $('#toTheTop').fadeIn(400);
        else
            $('#toTheTop').fadeOut(200);
    });
});