<?php
namespace Controllers;
class LoginController
{
  private $view;

  public function __construct()
  {
    $this->view = new \Views\MainView('login');
  }

  public function executar()
  {
    if (isset($_POST['logar'])) {
        
    }
    $this->view->render(['titulo' => 'login']);
  }
}
