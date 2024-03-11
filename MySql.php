<?php
define('HOST', 'localhost');
define('DB', '');
define('USER', 'root');
define('PASS', '');


class MySql
{
    private $pdo;
    public function __construct() {
        $this->pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);
    }

    public function SetUp($query) {
        $sql = $this->pdo->prepare($query);
    }

    public function Insert($table,$key = [],$value = []) {

        if(count($key) != 0 && count($value) != 0){

            $query = "INSERT INTO $table(";
            for ($i=0; $i < count($key); $i++) { 
                $query .=  $key[$i];
                if($i < count($key) - 1){
                    $query .= ',';
                }
            }
    
            $query .= ") VALUES(";
    
            for ($i=0; $i < count($value); $i++) { 
                $query .= '?';
                if($i < count($value) - 1){
                    $query .= ',';
                }
            }
    
            $query .= ");";
    
            $sql = $this->pdo->prepare($query);
            $sql->execute($value);
        }
    }

    public function Select($table,$all = '*',$key,$value){
        if($key != null && $key != '' && $value != null && $value != ""){
            $query = "SELECT $all FROM $table WHERE $key = ?";
            $sql = $this->pdo->prepare($query);
            $sql->execute([$value]);
            return $sql->fetchAll();
        }

    }
}