<?php
class Pessoa {
    //atributos
    private $nome;
    private $idade;
    private $sexo;
    
    //métodos públicos
    public function fazerAniver() {
        $this->idade ++;
    }
    
    //métodos especiais
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


}
