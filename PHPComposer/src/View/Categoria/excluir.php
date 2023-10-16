<?php
    require '../src/View/cabecalho.php';
?>

<main class="container">

        <h1>Excluir Categoria</h1>
        <form method="post" action="/categoria/deletar/<?=$resultado['id']?>">
        
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Informe a descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao" value="<?=$resultado['descricao']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-danger">
                    Deseja realmente excluir o registro?
                </h5>
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
        </form>
    </main>

<?php
require '../src/View/rodape.php';   