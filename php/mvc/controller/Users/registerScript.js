/**
 * Created by Wrex on 05/03/2016.
 */
$(function () {
    $('.loginForm').submit(function () {
        $('.errorBlock').html("");
        $.ajax({
            method: "POST",
            url: '../controller/Users/registerController.php',
            data: $(this).serialize(),
            dataType: "json",
            success: function () {
                var toPrint = 'userpseudo : '+data.user.pseudo+'<br>';
                toPrint += 'firstname : '+data.user.firstName +'<br>';
                toPrint += 'lastname : '+data.user.lastName +'<br>';
                toPrint += 'email : '+data.user.email +'<br>';
                $('.successBlock').html('Vous étes inscrit'+'<br>'+toPrint);
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
