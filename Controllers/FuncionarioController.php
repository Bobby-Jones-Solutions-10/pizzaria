<?php

namespace Controllers;

class FuncionarioController
{
    private $view;

    public function __construct()
    {
      $this->view = new \Views\MainView('funcionario');
    }
  
    public function executar()
    {
      if(isset($_POST['cadastrar'])){
        \Models\Funcionario::Cadastrar($_POST['nome'],$_POST['cargo'],$_POST['endereco'],$_POST['numero']);
      }
      $this->view->render(['titulo' => 'Funcionarios']);
    }
}
