$(document).ready(function() {
    $('#frmImovel').validate({
        rules: {
            txtEstado: {
                required: true
            },
            txtCidade: {
                required: true
            },
            txtBairro: {
                required: true
            },
            txtLogradouro: {
                required: true
            },
            txtComplemento: {
                required: true
            },
            txtNumero: {
                required: true
            }
        },
        submitHandler: function() {
            $.ajax({
                url: "cadastrarImovel.php",
                dataType: "json",
                type: "POST",
                data: {
                    estado: $('#txtEstado').val(),
                    cidade: $('#txtCidade').val(),
                    bairro: $('#txtBairro').val(),
                    tipo_logradouro: $('#hdnTipoLogradouro').val(),
                    logradouro: $('#hdnLogradouro').val(),
                    complemento: $('#txtComplemento').val(),
                    numero: $('#txtNumero').val(),
                    cep: $('#hdnCEP').val()              
                },
                beforeSend: function() {
                    $('#divStatus').html("...processando cadastro...");
                    $('#divResultado').find('input[type=text]').each(function() {
                        $(this).val("");
                    }); //limpa os campos do formulario
                },
                success: function(resposta) {
                    if (resposta.resultado == 1) {
                        $('#divStatus').html("Imovel Cadastrado Com Sucesso");
                    } else {
                        $('#divStatus').html("Erro ao Cadastrar. Tente novamente mais tarde");
                    }
                }
            });
            return false;
        }
    });
});
