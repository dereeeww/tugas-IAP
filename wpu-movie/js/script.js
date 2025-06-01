$('#search-button').on('click', function () {
    $.ajax({
        url: 'https://omdbapi.com/',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '237728ed',
            's': $('#search-input').val()
        },
        success: function (result) {
            console.log(result);
        }
    });
});
