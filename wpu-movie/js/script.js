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
            if (result.Response == "True") {
             let movie = result.Search;
             console.log(movie);

            } else {
                $('#movie-list').html(`
                    <div class="col">
                        <h1 class="text-center">` + result.Error + `</h1>
                    </div>
                `);
            }
        }
    });
});
