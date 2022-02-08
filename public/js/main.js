jQuery(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $('.sendlink').on('click', function () {
        let link = $("input[name='link']").val();
        if (link == "") {
            $("input[name='link']").css('border-color', 'red');
            return false;
        }
        $.ajax({
            type: 'POST',
            url: "/sendlink",
            data: {
                link: link,
            },
            error: function (data) {
                var errors = data.responseJSON;
                $.notify("Произошла ошибка попробуйте ещё раз", {type:"danger", align:"right",});
            },
            success: function(data) {

                $.notify("Спасибо! Данные успешно отправлены!", {type:"success", align:"right",});
                $("#link-table").load(" #link-table");
                $(".needs-validation").trigger('reset');
            }
        });
    });
});
