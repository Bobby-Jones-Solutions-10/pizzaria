<section>

    <form action="" method="post" >
        <select name="tamanho" id="">
            <option value="1">Pequena</option>
            <option value="2">Média</option>
            <option value="3">Grande</option>
            <option value="4">Gigante</option>
        </select>
        <select name="sabor" id="">
            <?php
            $info = \Models\Sabor::pegarSabores();

            foreach ($info as $key => $value) {
                ?>
                <option value="<?php echo $value['id']; ?>">
                    <?php echo $value["sabor"] ?>
                </option>
            <?php } ?>
        </select>
        <select name="extras" id="">
            <?php
            $info = \Models\Extra::pegarExtras();

            foreach ($info as $key => $value) {
                ?>
                <option value="<?php echo $value['id']; ?>">
                    <?php echo $value["extra"] ?>
                </option>
            <?php } ?>
        </select>
        <input type="text" id="clienteSerch">
        <select name="cliente" id="cliente">
            <?php
            $infoCliente = \Models\Cliente::pegarClientes();

            foreach ($infoCliente as $key => $value) {
                ?>
                <option value="<?php echo $value['id']; ?>">
                    <?php echo $value["nome"] ?>
                </option>
            <?php } ?>
        </select>
        <select name="formaPagamento" id="">
            <option value="dinheiro">Dinheiro</option>
            <option value="Pix">Pix</option>
            <option value="credito">Crédito</option>
            <option value="debito">Débito</option>
        </select>
        <select name="retirada" id="">
            <option value="e">Entrega</option>
            <option value="b">Balcao</option>
        </select>
        <button type="submit" name="adicionar"
         class="bg-[#209E2C] rounded-full p-2 text-md font-bold text-white">Adicionar</button>
    </form>
    

</section>

<?php

$cliente = '';
$clienteID = '';
foreach ($infoCliente as $key => $value) {
    if($key != 0){
        $cliente .= ',';
        $clienteID .= ',';
    }
    $cliente .= '"'.$value['nome'].'"';
    $clienteID .= '"'.$value['id'].'"';
}


?>
<script>
    document.getElementById("clienteSerch").addEventListener("keypress", e => {
        pesquisa();
    });

    function pesquisa() {
        let output = document.getElementById("cliente");
        const clienteList = [<?php echo $cliente; ?>]
        const clienteIDList = [<?php echo $clienteID; ?>]
        let found = []
        let foundID = []
        let serch = document.getElementById("clienteSerch").value;
        output.innerHTML = ""
        for (let i = 0; i < clienteList.length; i++)
            //alert(examesList[i].includes(serch))
            if (clienteList[i].toLowerCase().includes(serch.toLowerCase())) {
                found = found.concat(clienteList[i]);
                foundID = foundID.concat(clienteIDList[i]);
            }
        if (found.length > 0) {
            for (let i = 0; i < found.length; i++) {
                let opt = document.createElement("option");
                opt.value = foundID[i];
                opt.innerHTML = found[i]; 
                output.appendChild(opt);
            }
        }
        else {
            output.innerHTML = "nenhum cliente encontrado";
        }
    }
</script>