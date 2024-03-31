<?php
namespace Models;
    class Pedidos{

        public static function cadastrarPedidos($tamanho, $extras, $sabor, $cliente, $tipo)
        {
            function calcularPreco($tamanhoId,$saborId,$extraId){
                $mysql = new \MySql();
     
                $tamanhoPreco = $mysql->Select('tamanhos','preco','id',$tamanhoId)[0]['preco'];
                $saborPreco = $mysql->Select('sabores','preco','id', $saborId)[0]['preco'];
     
                $extraPreco = $mysql->Select('extras','preco','id', $extraId)[0]['preco'];
     
                $precoTotal= $tamanhoPreco + $saborPreco + $extraPreco;
     
                return $precoTotal;
            }
            $mysql = new \MySql();
            $mysql->Insert('pizzas',['idSabores','idExtras','idTamanhos'],[$sabor,$extras,$tamanho]);
            $idPizza = $mysql->Sql('SELECT LAST_INSERT_ID();')[0][0];
            $preco = calcularPreco($tamanho,$sabor,$extras);
            $mysql->Insert('pedidos',['idPizza','idCliente','preco','tipo','pronta'],[$idPizza, $cliente, $preco, $tipo, false]);
            
            
        }
        public static function pegarPedidos(){
            $mysql = new \MySql();
            
            return $mysql -> Select('pedidos','*','','');
        }
        
        public static function pegarPedidosPendentes(){
            $mysql = new \MySql();
            return $mysql -> Select('pedidos','*','pronta','0');
        }

        public static function pegarPedido($id){
            $mysql = new \MySql();
            return $mysql -> Select('pedidos','*','id', $id);
        }
        public static function editarPedidos($valores = [], $id){
            $mysql = new \MySql();
            $colunas = ['tamanho','extra','sabor','preco'];
            foreach ($valores as $key => $value) {
                $mysql->Update('pedidos',$colunas[$key],$value,$id);
            }

        }

        public static function finalizarPedido($id) {
            $mysql = new \MySql();
            $mysql->Update('pedidos','pronta',true,$id);
        }

       
    }

/*
CREATE TABLE IF NOT EXISTS pizzas(
                id int primary key not null AUTO_INCREMENT,
                idSabores int not null,
                idExtras int not null,
                idTamanhos int not null,
                FOREIGN KEY (idSabores) REFERENCES sabores(id),
                FOREIGN KEY (idExtras) REFERENCES extras(id),
                FOREIGN KEY (idTamanhos) REFERENCES tamanhos(id)
            );

CREATE TABLE IF NOT EXISTS pedidos(
                id int primary key not null AUTO_INCREMENT,
                idPizza int not null,
                idCliente int not null,
                preco decimal(6,2) not null,
                tipo char(1) not null,
                pronta boolean not null, 
                FOREIGN KEY (idPizza) REFERENCES pizzas(id),
                FOREIGN KEY (idCliente) REFERENCES clientes(id)                
            );
 CREATE TABLE IF NOT EXISTS sabores(
                id int primary key not null AUTO_INCREMENT,
                sabor varchar(100) not null UNIQUE,
                preco decimal(6,2) not null
            );
 CREATE TABLE IF NOT EXISTS extras(
                id int primary key not null AUTO_INCREMENT,
                extra varchar(100) not null UNIQUE,
                preco decimal(6,2) not null
            );
            
            CREATE TABLE IF NOT EXISTS tamanhos(
                id int primary key not null AUTO_INCREMENT,
                tamanho varchar(100) not null UNIQUE,
                preco decimal(6,2) not null 
            );

*/

