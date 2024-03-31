<?php

namespace Controllers;
class CozinhaController
{
  private $view;

  public function __construct()
  {
    $this->view = new \Views\MainView('cozinha');
  }

  public function executar()
  {
    if (isset($_GET["concluir"])) {
        \Models\Pedidos::finalizarPedido($_GET["concluir"]);
    }
    $this->view->render(['titulo' => 'cozinha']);
  }
}