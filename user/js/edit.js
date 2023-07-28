$(document).ready(function() {
    $('.edit').click(function() {
        var id = $(this).val();
        $.ajax({
            url: 'edit.php',
            type: 'POST',
            data: { id_info_imovel: id },
            dataType: 'json',
            success: function(response) {
                var id_info_imovel = response.id_info_imovel;
                var info_imovel = response.info_imovel;
                var referencia_info = response.referencia_info;
                
                $('#id_info_imovel').val(id_info_imovel);
                $('#info_imovel').val(info_imovel);
                $('#referencia_info').val(referencia_info);

                $('#add_info').html('Editar');
                $('#add_info').val('edit_info');
                $('#add_info').attr('name','edit_info');

            }
        });
    });
});