<style>
    th{
        padding: 10px;
        border: #000 solid 1px;
    }
</style>

<section>
    <table>
        <thead>
            <tr>
                <th>sabor</th>
                <th>tamanho</th>
                <th>nome</th>
                <th>tipo</th>
                <th>preço</th>
                <th>pronto?</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $info = \Models\Pedidos::pegarPedidosPendentes();
                $mysql = new \MySql();
                
                foreach ($info as $key => $value) {
                    $pizza = $mysql->Select('pizzas','*','id',$value['idPizza']);
                    $tamanho = $mysql->Select('tamanhos','tamanho','id',$pizza[0]['idTamanhos'])[0]['tamanho'];
                    $sabor = $mysql->Select('sabores','sabor','id',$pizza[0]['idSabores'])[0]['sabor'];
                    $extra = $mysql->Select('extras','extra','id', $pizza[0]['idExtras'])[0]['extra'];
                    $cliente = \Models\Cliente::pegarCliente($value['idCliente']);
                ?>
                <tr>
                    <th><?php echo $sabor?></th>
                    <th><?php echo $tamanho?></th>
                    <th><?php echo $cliente[0]['nome']?></th>
                    <th><?php echo $sabor?></th>
                    <th><?php echo $value['preco']?></th>
                    <th><a href="<?php echo INCLUDE_PATH; ?>/cozinha?concluir=<?php echo $value['id'] ?>">pronto</a></th>
                </tr>
                
                <?php }?>
           
        </tbody>
    </table>
</section>
<?php 
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

?>