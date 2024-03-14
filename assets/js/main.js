$(document).ready(function() {
    $('#pesquisa_titulo').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: 'search.php', // URL of your PHP script that performs the search
            type: 'GET',
            data: {query: query}, // Send the query to the server
            success: function(data) {
                // Update the DOM with the search results
                // This depends on how your search results are structured
                // For example, if your search results are a list of titles, you could do:
                $('#executa_pesquisa_titulo').html(data);
            }
        });
    });
    $('#pesquisa_autor').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: 'search.php', // URL of your PHP script that performs the search
            type: 'GET',
            data: {query: query}, // Send the query to the server
            success: function(data) {
                // Update the DOM with the search results
                // This depends on how your search results are structured
                // For example, if your search results are a list of titles, you could do:
                $('#executa_pesquisa_autor').html(data);
            }
        });
    });
    $('#pesquisa_editora').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: 'search.php', // URL of your PHP script that performs the search
            type: 'GET',
            data: {query: query}, // Send the query to the server
            success: function(data) {
                // Update the DOM with the search results
                // This depends on how your search results are structured
                // For example, if your search results are a list of titles, you could do:
                $('#executa_pesquisa_editora').html(data);
            }
        });
    });
    $('#pesquisa_ano').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: 'search.php', // URL of your PHP script that performs the search
            type: 'GET',
            data: {query: query}, // Send the query to the server
            success: function(data) {
                // Update the DOM with the search results
                // This depends on how your search results are structured
                // For example, if your search results are a list of titles, you could do:
                $('#executa_pesquisa_ano').html(data);
            }
        });
    });
    $('#pesquisa_id').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: 'search.php', // URL of your PHP script that performs the search
            type: 'GET',
            data: {query: query}, // Send the query to the server
            success: function(data) {
                // Update the DOM with the search results
                // This depends on how your search results are structured
                // For example, if your search results are a list of titles, you could do:
                $('#executa_pesquisa_id').html(data);
            }
        });
    });
});