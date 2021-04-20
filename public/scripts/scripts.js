$(document).ready(function() {
    $('.form-validate').submit(function(event) {
        let json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                console.log(result)
                json = JSON.parse(result);
                console.log(json)
                if (json.url) {
                    window.location.href = '/' + json.url;
                } else {
                    $('.result').html(json)
                }
            },
        });
    });
    $('')
});