<?php

namespace Models;

class Cliente
{
    public static function adicionarCliente($nome,$cpf,$contato, $cep, $logradouro, $bairro, $localidade, $uf, $ibge, $numero)
    {
        $mysql = new \MySql();
        $verificaArray = [' ','/','.',','];
        $nomeVerifica = str_replace($verificaArray,'',$nome);
        $contatoVerifica = str_replace($verificaArray,'',$contato);

        if($nomeVerifica != '' && $contatoVerifica != ''){
            $mysql->Insert('clientes',['nome','CPF','contato','CEP','logradouro','bairro','localidade','uf','ibge','numeroCasa'],
            [$nome,$cpf,$contato,$cep,$logradouro,$bairro,$localidade,$uf,$ibge,$numero]);
        }
        else{
            echo '<script> alert("preencha todos os campos"); </script>';
        }
    }

    public static function pegarClientes() {
        $mysql = new \MySql();
        return $mysql->Select('clientes','*','','');
    }
    
    public static function pegarCliente($id) {
        $mysql = new \MySql();
        return $mysql->Select('clientes','*','id',$id);
    }

    

    
}
