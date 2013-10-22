<?php

#eh preciso fazer metodos auxiliares para:
# 1. previnir os ataques sqlinjection 
# 2. validacao de tipos de campos 
# 3. regras de negocios
# 
#temos q encontrar alguma forma de fazer esses includes dinamicamente

include_once 'classes/Imovel.php';
$imovel = new Imovel();
$imovel->setEstado($_POST['estado']);
$imovel->setCidade($_POST['cidade']);
$imovel->setBairro($_POST['bairro']);
$imovel->setTipo_logradouro($_POST['tipo_logradouro']);
$imovel->setLogradouro($_POST['logradouro']);
$imovel->setComplemento($_POST['complemento']);
$imovel->setNumero($_POST['numero']);
$imovel->setCep($_POST['cep']);


include_once 'Bean/ImovelBean.php';
$imovelBean = new ImovelBean();
$retorno = $imovelBean->cadastrarImovel($imovel); //retorna true    

if($retorno)
    echo json_encode(array("resultado"=>1)); 
else
    echo json_encode(array("resultado"=>0)); 
?>                 