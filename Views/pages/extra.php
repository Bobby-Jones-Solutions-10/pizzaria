

<section>
    <a href="<?php echo INCLUDE_PATH; ?>/Extra">Adicionar</a>
    <?php
    $info = \Models\Extra::pegarExtras();
    $info2 = null;
    foreach ($info as $key => $value) {
        if(isset($_GET["id"]) && $_GET["id"] == $value['id']){
            $info2 = $value;
        }
        ?>
         <a href="<?php echo INCLUDE_PATH; ?>/Extra?id=<?php echo $value['id']; ?>" ><?php echo $value['extra']; ?></a>
        <?php
    }

 
    ?>

    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo ($info2 != null)? $info2['extra'] : null ?>"/>
        R$<input type="number" step="0.01" name="preco" placeholder="Preço" min="0.01" value="<?php echo ($info2 != null)? $info2['preco'] : null ?>"/>    
        <input type="submit" name="addExtra">   
    </form>
</section>
