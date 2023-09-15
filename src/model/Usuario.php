<?php

namespace App\model;

class Usuario {
     private $nome;
     private $idade;
     private $funcao;

     function __construct($nome,$idade,$funcao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->funcao = $funcao;
     }

     public function getName() {
        return $this->nome;
     }

     public function getAge() {
        return $this->idade;
     }

     public function getFunc() {
        return $this->funcao;
     }
}


?>