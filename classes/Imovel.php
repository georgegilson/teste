<?php

class Imovel {

    private $cep;
    private $estado;
    private $cidade;
    private $bairro;
    private $tipo_logradouro;
    private $logradouro;
    private $complemento;
    private $numero;

    public function getCep() {
        return $this->cep;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getTipo_logradouro() {
        return $this->tipo_logradouro;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setTipo_logradouro($tipo_logradouro) {
        $this->tipo_logradouro = $tipo_logradouro;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

}
