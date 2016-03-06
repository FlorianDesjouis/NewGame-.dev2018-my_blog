/**
 * Created by Wrex on 09/02/2016.
 */
$(function () {
    $('.loginForm').submit(function () {
        $('.errorBlock').html("");
        $.ajax({
            method: "POST",
            url: '../controller/Users/loginController.php',
            data: $(this).serialize(),
            dataType: "json",
            success: function () {
                $('.successBlock').html("Vous étes connecté");
                window.location.replace('../../view/index_home.php');
            },
            error: function () {

                var toPrint = '';
                data = JSON.parse(data.responseText);
                toPrint += data.errors;
                $('.errorBlock').html(toPrint);
            }
        });
        return false;
    });
});