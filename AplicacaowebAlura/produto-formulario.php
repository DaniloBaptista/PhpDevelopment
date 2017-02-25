<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

    $categorias = listaCategorias($conexao);

?>
                <h1>Formulario de produto</h1>
        <form action="adiciona_produto_php.php" method="post">
            <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Preco:</td>
                <td><input class="form-control" type="number" name="preco"><br/></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><textarea class="form-control" name="descricao"></textarea></td>
            <tr> 
            <tr>
                <td> Categorias</td>
                <td>
                    <?php foreach($categorias as $categoria) : ?>
                        <input type="radio" name = "categoria_id"
                                value="<?=$categoria['id']?>">
                                <?=$categoria['nome']?><br/>
                    <?php endforeach ?>    
                </td>   
            <tr>
                <td>       
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>            
        </table>    
    </form>    
<?php include("rodape.php")?>
