<?php

class homeController extends controller{
    public function index(){
        $u = new Usuario();
        $u->setNome("Giorgio Costa");
        
        $dados = array(
            'nome' => $u->getName()
        );
        
        $this->loadView('home',$dados);
      
    }
}