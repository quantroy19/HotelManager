$(function () {
    function readURL(input, selector) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function (e) {
                $(selector).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function () {
        $('#image_preview').css('display', 'block');
        readURL(this, '#image_preview');
    });

});
