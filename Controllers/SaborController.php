<?php

namespace Controllers;

class SaborController
{
  private $view;

  public function __construct()
  {
    $this->view = new \Views\MainView('sabor');
  }

  public function executar()
  {
    if (isset($_POST['addSabor'])) {
      \Models\Sabor::adicionarSabor($_POST['nome'], $_POST['preco']);
      header('location: ' . INCLUDE_PATH . '/Config');
    }
    $this->view->render(['titulo' => 'AddSabor']);
  }
}