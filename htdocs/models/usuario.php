<?php

class Usuario{   
    
    private $nome;
    
    public function setNome($n){
        $this->nome = $n;
    }
    public function getName() {
        return $this->nome;
    }
}