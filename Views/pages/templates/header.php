<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $arr['titulo']; ?></title>
</head>


<nav style="display: flex;align-items: center;gap: 10px">
<img src="<?php echo INCLUDE_PATH ?>/assets/images/logoMealTime.png" alt="" style="max-width: 100px;" >
  <a href="<?php echo INCLUDE_PATH ?>/Dashboard">DASHBOARD</a>
  <a href="<?php echo INCLUDE_PATH ?>/Funcionario">FUNCIONÁRIOS</a>
  <a href="<?php echo INCLUDE_PATH ?>/cozinha">COZINHA</a>
  <a href="<?php echo INCLUDE_PATH ?>/Pedido">PEDIDOS</a>
  <a href="<?php echo INCLUDE_PATH ?>/Cliente">CLIENTES</a>
  
</nav>


