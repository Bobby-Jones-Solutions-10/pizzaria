<section>
    <form action="" method="post">
        <input type="submit" name="Gerar" value="Gerar relatório">
    </form>
    <?php 
    $info = \Models\Relatorio::pegarRelatorio();
    foreach ($info as $key => $value) { ?>
        <a href="<?php echo INCLUDE_PATH ?>assets/pdf/<?php echo $value['nome'] ?>.pdf"><?php echo $value['nome'];?></a>
    <?php }
    
    
    ?>
</section>