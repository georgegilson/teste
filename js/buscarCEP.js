$(document).ready(function() {

    $("#txtCEP").mask("99.999-999"); //mascaras

    $('#frmBuscarCEP').validate({
        rules: {
            txtCEP: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            txtCEP: {
                required: "O campo CEP &eacute; obrigat&oacute;rio.",
                minlength: "Prencha o CEP corretamente. Exemplo: 66.000-000"
            }
        },
        submitHandler: function() {
            $.ajax({
                url: "resultadoCEP.php",
                dataType: "json",
                type: "POST",
                data: {
                    cep: $('#txtCEP').val()
                },
                beforeSend: function() {
                    $('#divStatus').html("...processando...");
                    $('#divResultado').find('input[type=text]').each(function() {
                        $(this).val("");
                    }); //limpa os campos do formulario
                    $('#divResultado').find('label[class=error]').remove();
                },
                success: function(resposta) {
                    if (resposta.resultado == 0) {
                        $('#divStatus').html("CEP N&atilde;o Encontrado");
                    } else {
                        $('#divStatus').html("CEP Encontrado");
                        $('#txtEstado').val(resposta.uf);
                        $('#txtCidade').val(resposta.cidade);
                        $('#txtBairro').val(resposta.bairro);
                        $('#txtLogradouro').val(resposta.tipo_logradouro + ' ' + resposta.logradouro);
                        $('#hdnCEP').val($('#txtCEP').val());
                        $('#hdnTipoLogradouro').val(resposta.tipo_logradouro);
                        $('#hdnLogradouro').val(resposta.logradouro);
                    }
                }
            })
            return false;
        }
    });
});
