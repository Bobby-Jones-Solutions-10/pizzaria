
<?php

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $arr['titulo']; ?></title>
</head>

<body class="w-screen h-screen items-center justify-start flex flex-col bg-[#F9EFDB]">
  <img src="./assets/images/logoMealTime.png" alt="Isso e uma logo" class="w-56 h-56">
  <div class="w-[700px] flex flex-wrap gap-16 justify-center items-center">
    <a href="<?php echo INCLUDE_PATH ?>Funcionario" class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="./assets/images/chefeCozinha.png" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">FUNCIONÁRIOS</p>
    </a>
    <a href="#" class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="./assets/images/chapeu.png" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">COZINHA</p>
    </a>
    <a href="#" class="bg-[#EBD9B4] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="./assets/images/entrega.png" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">PEDIDOS</p>
    </a>
    <a href="#" class="bg-[#BFCCB5] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="./assets/images/cliente.png" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">CLIENTES</p>
    </a>
    <a href="#" class="bg-[#BFCCB5] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="./assets/images/relatorio.png" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">RELATÓRIOS</p>
    </a>
    <a href="#" class="bg-[#BFCCB5] w-[180px] flex justify-center items-center flex-col rounded-lg p-4">
      <img src="./assets/images/engrenagem.png" class="w-16 h-16">
      <p class="text-black font-semibold pt-2">CONFIGURAÇÕES</p>
    </a>
  </div>
</body>

</html>