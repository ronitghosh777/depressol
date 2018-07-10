$(document).ready(function() {

$('.option1').on('click', function (event) {
        var flagL = 0;
        var flagD = 0;
        event.preventDefault();

        var postIdl = $(this).data("idl");
        postIdl = postIdl.substr(1);
        var postId2 = 'dc' + postIdl;
        var postId1 = 'lc' + postIdl;

        if ($('.' + postId2).hasClass('active')) {
            flagD = 1;
        }
        if ($('.' + postId1).hasClass('active')) {
            flagL = 1;
        }
        $('.' + postId2).removeClass('active');
        $.ajax({
            method: 'POST',
            url: urlLike,
            data: {postIdl: postIdl, _token: token, flagL: flagL, flagD: flagD}
        });

    });

    $('.optionx').on('click', function (event) {
        var flagL = 0;
        var flagD = 0;
        event.preventDefault();

        var postIdd = $(this).data("idd");
        postIdd = postIdd.substr(1);
        var postId1 = 'lc' + postIdd;
        var postId2 = 'dc' + postIdd;

        if ($('.' + postId2).hasClass('active')) {
            flagD = 1;
        }
        if ($('.' + postId1).hasClass('active')) {
            flagL = 1;
        }

        $.ajax({
            method: 'POST',
            url: urlDislike,
            data: {postIdd: postIdd, _token: token, flagL: flagL, flagD: flagD}
        });

        $('.' + postId1).removeClass('active');

    });





});