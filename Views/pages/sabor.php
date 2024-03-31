<section>
    <a href="<?php echo INCLUDE_PATH; ?>/Sabor">Adicionar</a>
    <?php
    $info = \Models\Sabor::pegarSabores();
    $info2 = null;
    foreach ($info as $key => $value) {
        if(isset($_GET["id"]) && $_GET["id"] == $value['id']){
            $info2 = $value;
        }
        ?>
         <a href="<?php echo INCLUDE_PATH; ?>/Sabor?id=<?php echo $value['id']; ?>" ><?php echo $value['sabor']; ?></a>
        <?php
    }

 
    ?>

    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo ($info2 != null)? $info2['sabor'] : null ?>" />
        R$<input type="number" step="0.01" name="preco" placeholder="Preço" min="0.01"  value="<?php echo ($info2 != null)? $info2['preco'] : null ?>"/>
        <input type="submit" name="addSabor">
    </form>
   
</section>