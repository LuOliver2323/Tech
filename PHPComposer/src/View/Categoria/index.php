<?php
    require '../src/View/cabecalho.php';
?>

        <table class="table table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>            
            <tbody>

            <?php
                while($c = $resultado->fetch(PDO::FETCH_ASSOC)){

                    ?>
                <tr>
                    <th scope="row"><?= $c["id"] ?></th>
                    <td><?= $c["descricao"] ?></td>
                    <td>
                        <a href="/categoria/alterar/<?= $c["id"] ?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/categoria/excluir/<?= $c["id"] ?>" class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <?php } ?>
                   
            </tbody>
            </table>

<?php

    if (isset($_SESSION['gravar'])){
        if ($_SESSION['gravar'])
            echo "Registro gravado com sucesso!";
        else 
            echo "Erro ao salvar o registro!";
    unset($_SESSION['gravar']);
    }
?>



<?php
require '../src/View/rodape.php';   