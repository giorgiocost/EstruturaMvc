<?php

class postsController extends controller{
    
    /*  Esse é controller
    *   http://localhost/mvc/index.php/teste
    */
    public function index(){
      echo 'Lista das postagens';
    }
    
    /*  Esse é action
    *   http://localhost/mvc/index.php/teste/foi
    */
    public function ver($nome, $sobrenome) {
        echo $nome;
        echo $sobrenome;
    }
}

