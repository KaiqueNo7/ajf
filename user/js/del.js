$(document).ready(function() {
    $('.del').click(function() {
        var id = $(this).val();
        $.ajax({
            url: 'del.php',
            type: 'POST',
            data: { id_info_imovel: id },
            success: function(response) {  
                console.log('Deletado com sucesso!');
            }
        });
    });

    $('.del_img').click(function() {
        var id = $(this).attr('id');
        var im = $(this).attr('im');
        $.ajax({
            url: 'del.php',
            type: 'POST',
            data: { 
                id_imagem: id,
                id_imovel: im
            },
            success: function(response) {  
                console.log('Deletado com sucesso!');
            }
        });
    });
});