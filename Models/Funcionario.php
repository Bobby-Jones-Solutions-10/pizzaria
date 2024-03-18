<?php

namespace Models;

class Funcionario
{
    public static function Cadastrar($nome,$cargo,$endereco,$contato){
        $mysql = new \MySql();
        $verificaArray = [' ','/','.',','];
        $nomeVerifica = str_replace($verificaArray,'',$nome);
        $enderecoVerifica = str_replace($verificaArray,'',$endereco);
        $contatoVerifica = str_replace($verificaArray,'',$endereco);

        if($nomeVerifica != '' && $enderecoVerifica != '' && $contatoVerifica != ''){
            $mysql->Insert('funcionarios',['nome','cargo','endereco','contato'],[$nome,$cargo,$endereco,$contato]);
        }
        else{
            echo '<script> alert("preencha todos os campos"); </script>';
        }
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
