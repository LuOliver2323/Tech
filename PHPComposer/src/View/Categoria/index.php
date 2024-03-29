<?php
    require '../src/View/cabecalho.php';
?>
        <table class="table table-striped table-hover" id="tabela">
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
                    <th><?= $c["id"] ?></th>
                    <td><?= $c["descricao"] ?></td>
                    <td>
                        <a href="/categoria/alterar/<?= $c["id"] ?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/categoria/excluir/<?= $c["id"] ?>" class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                    <?php } ?>
                
            </tbody>
            </table>

<?php

    if (isset($_SESSION['gravar'])){
        if ($_SESSION['gravar'])
            echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
                    Registro Gravado com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

        else 
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Erro ao inserir o registro!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

    unset($_SESSION['gravar']);
    }

    if (isset($_SESSION['editar'])){
        if ($_SESSION['editar'])
            echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
                    Registro alterado com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

        else 
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Erro ao alterar o registro!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

    unset($_SESSION['editar']);
    }

    if (isset($_SESSION['deletar'])){
        if ($_SESSION['deletar'])
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    Registro excluído com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

        else 
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Erro ao excluir o registro!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

    unset($_SESSION['deletar']);
    }
?>

<?php
require '../src/View/rodape.php';   