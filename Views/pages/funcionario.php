<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <section class="flex h-screen w-screen">
        <div class="w-[300px] h-full flex justify-start items-start flex-col space-y-2 bg-[#BFCCB5]">
            <div class="w-[250px] mt-2 flex justify-center items-center">
                <a href="<?php echo INCLUDE_PATH ?>Funcionario"
                    class="border-b-1 h-[40px] w-[100px] p-4 justify-center items-center flex bg-[#209E2C] w-8/12 rounded-lg text-3xl">
                    +
                </a>
            </div>
            <?php
            $info = \Models\Funcionario::pegarFuncionarios();
            foreach ($info as $key => $value) {
                ?>
                <a href="?id=<?php echo $value['id']; ?>" class="ml-4 border-b-1 p-4 bg-blue-300 rounded-lg">
                    <?php echo $value['nome']; ?>
                </a>
                <?php
            }
            ?>
        </div>
        <?php
        $info = null;
        if (isset ($_GET["id"])) {
            $info = \Models\Funcionario::pegarFuncionario($_GET["id"]);
        }
        ?>
        <form action="" method="post">
            <input type="text" name="nome" placeholder="Nome"
                value="<?php echo ($info != null) ? $info[0]['nome'] : null ?>" />
            <input type="text" name="endereco" placeholder="Endereco"
                value="<?php echo ($info != null) ? $info[0]['endereco'] : null ?>" />
            <input type="text" name="numero" placeholder="Numero"
                value="<?php echo ($info != null) ? $info[0]['contato'] : null ?>" />
            <select name="cargo" id="">
                <option value="balconista" <?php echo ($info != null && $info[0]['cargo'] == 'balconista') ? 'selected="selected"' : null ?>>Balconista</option>
                <option value="cozinheiro" <?php echo ($info != null && $info[0]['cargo'] == 'cozinheiro') ? 'selected="selected"' : null ?>>Cozinheiro</option>
                <option value="auxiliarCozinha" <?php echo ($info != null && $info[0]['cargo'] == 'auxiliarCozinha') ? 'selected="selected"' : null ?>>Auxiliar de Cozinha</option>
                <option value="auxiliarLimpeza" <?php echo ($info != null && $info[0]['cargo'] == 'auxiliarLimpeza') ? 'selected="selected"' : null ?>>Zelador(a)</option>
                <option value="caixa">Caixa</option>
            </select>
            <button type="submit" name="<?php echo ($info != null) ? 'atualizar' : 'cadastrar' ?>"><?php echo ($info != null) ? 'Atualizar' : 'Cadastrar' ?></button>
        </form>
    </section>
</body>

</html>