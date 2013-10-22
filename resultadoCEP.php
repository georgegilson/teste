<?php

$cepConsulta = $_POST['cep']; //buscar a variavel vinda do formulario em AJAX
$cepConsulta = str_replace('.', '', str_replace('-', '', $cepConsulta)); //retira o ponto e traco
$retorno = buscaCep($cepConsulta); // utilizar o metodo com o CEP a ser buscado
//$codificado = array_map('htmlentities',$retorno);//transcodifica para mostrar a acentuacao em HTML como vai ser em um campo de formulario nao precisa
echo json_encode($retorno); //printa o resultado no formato JSON

function buscaCep($cepConsulta) { //funcao para buscar o Endereco
    $resultado = file_get_contents("http://republicavirtual.com.br/web_cep.php?cep=$cepConsulta&formato=query_string"); //webservice que retorna os dados do endere�o
    $resultado = utf8_encode(urldecode($resultado)); //faz a conversao de urlcoding para utf8
    parse_str($resultado, $retorno); //armazear o resultado em uma string $retorno
    return $retorno; //retorna o resultado da pesquisa CEP
}

?>