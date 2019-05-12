$('form.reserve').on('submit', function() {
    $(this).unbind();
    var that = $(this),
        data = {};

    that.find('[name]').each(function(index, value){
        var form = $(this),
            name = form.attr('name');
            value = form.val();
        data[name] = value;
        console.log(data);
    });
    $.ajax({
        type: 'POST',
        url: 'php/sendmail.php',
        data: data,
        success: function (response) {
            console.log(response);
            //window.location.href = "php/sendmail.php";

            //alertify.success('Successfully Added');
        },
        error: function (response) {
            //alertify.error('Something went wrong, Please try again later');
        }
    });
});