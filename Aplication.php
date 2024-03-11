<?php
define('INCLUDE_PATH','http://localhost/www/');
class Aplication
{
    public function executar(){
        $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Login';
        $url = ucfirst($url);
        $url.="Controller";
        if(file_exists('Controllers/'.$url.'.php')){
            $className = 'Controllers\\'.$url;
            $controller = new $className();
            $controller->executar();
        }
        else{
            die("não existe controlador");
        }
    }
}

