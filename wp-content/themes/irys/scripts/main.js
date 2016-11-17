jQuery(document).ready(function ($) {
    console.log(ajaxurl);

    $(".btn p").on("click", function (e) {
        e.preventDefault();
        var param = $(this).attr("data-id");


        jQuery.post(
            ajaxurl,
            {
                'action': 'displayNextEvent',
                'param': param,
            },
            function (response) {
                //content.html(response);
                $('.content').append(response);
                $(".btn").hide();
            }
        );

    });
});

