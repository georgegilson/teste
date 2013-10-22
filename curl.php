<?php

    $CEP = 66640265;

    $post = 'CEP='.$CEP.'&Metodo=listaLogradouro&TipoConsulta=cep';
    
    $cURL = curl_init('http://www.buscacep.correios.com.br/servicos/dnec/consultaLogradouroAction.do');
    
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($cURL, CURLOPT_HEADER, 0);
    curl_setopt($cURL, CURLOPT_POST, 1);
    curl_setopt($cURL, CURLOPT_POSTFIELDS, $post);
    
    $saida = curl_exec($cURL);
    
    curl_close($cURL);
    
    $saida = utf8_encode($saida);
    
    preg_match_all('@<td (.*?)<\/td>@i', $saida, $resultado);
    
    echo "<pre>";
    print_r($resultado[0]);
    echo "</pre>";

?>