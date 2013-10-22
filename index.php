<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/buscarCEP.js"></script>
        <script src="js/cadastrarImovel.js"></script>
        <style type="text/css">
            /* classe CSS quando tem erro na validacao do formulario */
            label.error {
                color: red;
                font-style: italic;
            }
        </style>
    </head>

    <body>
        <form id="frmBuscarCEP" method="post" action="">
            <fieldset>
                <legend> Buscar CEP</legend>
                <label for="txtCEP"> Informe o CEP: </label>
                <input type="text" name="txtCEP" id="txtCEP" size="10"/>  <br>
                <input type="submit" value="Buscar Endere&ccedil;o" />
                <div id="divStatus"></div>
            </fieldset>
        </form>

        <form id="frmImovel" method="post"> 
            <div id="divResultado"> 
                <fieldset>
                    <legend> Resultado </legend>
                    <label for="txtEstado">Estado: </label> <input type="text" name="txtEstado" id="txtEstado" readonly="true" /><br />
                    <label for="txtCidade">Cidade: </label> <input type="text" name="txtCidade" id="txtCidade" readonly="true"/><br />	
                    <label for="txtBairro">Bairro: </label> <input type="text" name="txtBairro" id="txtBairro" readonly="true"/><br />
                    <label for="txtLogradouro">Logradouro: </label> <input type="text" name="txtLogradouro" id="txtLogradouro" readonly="true" size = 50/><br />
                    <label for="txtComplemento">Complemento: </label> <input type="text" name="txtComplemento" id="txtComplemento" size="50"/><br />
                    <label for="txtNumero">N&uacute;mero: </label> <input type="text" name="txtNumero" id="txtNumero" size="8"/><br />
                    <input type="hidden" name="hdnCEP" id="hdnCEP" />
                    <input type="hidden" name="hdnTipoLogradouro" id="hdnTipoLogradouro" />
                    <input type="hidden" name="hdnLogradouro" id="hdnLogradouro" />
                    <input type="submit"  value="Cadastrar" />
                </fieldset>	
            </div>
        </form>

    </body>
</html>