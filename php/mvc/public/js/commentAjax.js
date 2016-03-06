$(document).ready(function () {

    recupComment();

    $('formulaire').submit(function () {

        var user = $('#user').val();
        var comment = $('#comment').val();
        var date = $('#date').val();

        var year = date.getFullYear();
        var month = ('0' + date.getMonth() + 1).slice(-2);
        var day = ('0' + date.getDate()).slice(-2);
        var hour = ('0' + date.getHours()).slice(-2);
        var minute = ('0' + date.getMinutes()).slice(-2);
        var second = ('0' + date.getSeconds()).slice(-2);

        alert("le " + day + "/" + month + "/" + year + " à " + hour + ":" + minute + ":" + second);

        $.post('controllerComment.php', {user: user, comment: comment, date: date}, function (data) {
            $('#return').html(data).slideDown();
            $('#user').val('');
            $('#comment').val('');
            recupComment();
        });
        return false;
    });

    function recupComment() {
        $.post('.php', function (contentComment) {
            $('.showComment').html(contentComment);
        });
    }

    setInterval(recupComment, 500);
});