function searchMovie() {
    $.ajax({
        url: 'https://www.omdbapi.com/',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '237728ed',
            's': $('#search-input').val().trim()
        },
        success: function (result) {
            if (result.Response === "True") {
                let movie = result.Search;
                $('#movie-list').html('');

                $.each(movie, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="${data.Poster}" class="card-img-top" alt="${data.Title}">
                                <div class="card-body">
                                    <h5 class="card-title">${data.Title}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">${data.Year}</h6>
                                    <a href="#" class="btn btn-primary see-detail" data-id="${data.imdbID}" data-toggle="modal" data-target="#exampleModal">See Details</a>
                                </div>
                            </div>
                        </div>
                    `);
                });

                $('#search-input').val('');

            } else {
                $('#movie-list').html(`
                    <div class="col">
                        <h1 class="text-center">${result.Error}</h1>
                    </div>
                `);
            }
        },
        error: function () {
            $('#movie-list').html(`
                <div class="col">
                    <h1 class="text-center text-danger">Terjadi kesalahan saat memuat data</h1>
                </div>
            `);
        }
    });
}

$('#search-button').on('click', function () {
    searchMovie();
});

$('#search-input').on('keyup', function (e) {
    if (e.keyCode === 13) {
        searchMovie();
    }
});
