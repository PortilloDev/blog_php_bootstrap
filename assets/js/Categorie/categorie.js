$(document).ready(function() {

    $('#submit_categorie').on('click', function() {
        var categorie = $('#new_categorie').val()

        $.ajax({
                type: 'POST',
                url: '../../../functions/categorieInsert.php',
                data: { 'categorie': categorie }
            })
            .done(function(result) {
                alert(result);
            })
            .fail(function() {
                console.log(Error);
                alert('Hubo un error al insertar la nueva categoria :(');
            })
    })
})