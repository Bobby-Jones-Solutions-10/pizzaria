<?php

namespace Models;

class Funcionario
{
    public static function Cadastrar($nome,$cargo,$endereco,$contato){
        $mysql = new \MySql();
        if(strlen($nome) > 5  && strlen($endereco) > 5 && strlen($contato) > 5){
            $mysql->Insert('funcionarios',['nome','cargo','endereco','contato'],[$nome,$cargo,$endereco,$contato]);
        }
        else{
            echo '<script> alert("preencha todos os campos"); </script>';
        }
        $_POST['nome'] = '';
    }

    public static function pegarFuncionario($id){
        $mysql = new \MySql();
        try {
            return $mysql->Select('funcionarios','*','id',$id);
        } catch (\Throwable $th) {
            return [];
        }
    }

    public static function pegarFuncionarios(){
        $mysql = new \MySql();
        try {
            return $mysql->Select('funcionarios','*','','');
        } catch (\Throwable $th) {
            return [];
        }
    }
}
