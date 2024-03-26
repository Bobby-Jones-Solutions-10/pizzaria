<?php

namespace Controllers;

class PedidosController
{
    private $view;

  public function __construct()
  {
    $this->view = new \Views\MainView('pedidos');
  }

  public function executar()
  {
    
    $this->view->render(['titulo' => 'Pedidos']);
  }
}
