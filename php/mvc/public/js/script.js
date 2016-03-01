/**
 * Created by Wrex on 01/03/2016.
 */
$(function () {
    $('.headerIcon').click(function () {
        $('.menu').fadeIn();
        $('.headerIcon').css({display: 'none'});
    });

    $('.headerIcon').click(function () {
        $('.menu').fadeOut();
        $('.headerIcon').css({display: 'inline-block'});
    });
});
