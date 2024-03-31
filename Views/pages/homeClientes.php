<a href="<?php echo INCLUDE_PATH; ?>/Clientes?add">adicionar cliente</a>
<?php
$info = \Models\Cliente::pegarClientes();
?>

<section class="flex flex-col justify-center items-center">
    <div class="font-semibold mb-12 text-3xl border-b-2 border-zinc-400">
        Clientes
    </div>
    <div class="flex flex-row gap-6 justify-center">
        <?php
        foreach ($info as $key => $value) {
            ?>
            <div class="pl-10 bg-[#ECDDBF] p-6 pt-2 rounded-md">
                <div class="flex flex-row items-center justify-start gap-4 font-bold">
                    <img src="./assets/images/clienteProf.png">
                    <div class="border-b-2 border-zinc-400">
                        <?php echo $value['nome']; ?>
                    </div>
                </div>
                <div class="grid grid-cols-2 mt-2">
                    <div class="col-span-1 flex flex-row justify-center items-center">
                        <span class="font-semibold pr-2">CPF:</span>
                        <?php echo $value['CPF'] ?>
                    </div>
                    <div class="col-span-1 flex flex-row justify-center items-center gap-2">
                        <img src="<?php echo INCLUDE_PATH ?>/assets/images/whats.png" class="w-4 h-4">
                        <div>
                            <?php echo $value['contato']; ?>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center gap-2 mt-2">
                    <img src="<?php echo INCLUDE_PATH ?>/assets/images/pin.png" class="w-4 h-4 col-span-1">
                    <div class="col-span-1">
                        <?php echo $value['logradouro'] . ', ' . $value['numeroCasa'] . ' ' . $value['bairro']; ?>
                    </div>
                </div>
                <div>
                    <?php echo $value['complemento']; ?>
                </div>
                <div class="flex gap-3 flex-row items-center justify-end">
                    <button class="flex justify-center items-center rounded-md px-2 py-1 bg-red-500 hover:bg-red-400">Deletar</button>
                    <button class="flex justify-center items-center rounded-md bg-green-500 hover:bg-green-400 px-2 py-1">Atualizar</button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>