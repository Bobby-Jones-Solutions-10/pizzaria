<?php

namespace Controllers;

class ClientesController
{
  private $view;

  public function __construct()
  {
    if(isset($_GET["add"])){
        $this->view = new \Views\MainView('cadastroCliente');    
    }
    else{
        $this->view = new \Views\MainView('homeClientes');
    }
  }

  public function executar()
  {
    if(isset($_POST["cadastrar"])){
      \Models\Cliente::adicionarCliente($_POST['nome'], $_POST['CPF'], $_POST['contato'], $_POST['cep'], $_POST['logradouro'], $_POST['bairro'], $_POST['localidade'], $_POST['uf'], $_POST['ibge'], $_POST['numero'],$_POST['complemento']);
    }

    $this->view->render();
    
  }
}