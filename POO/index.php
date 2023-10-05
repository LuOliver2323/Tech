<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <form action="resposta.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" placeholder="Informe o nome" class="form-control" name="nome"/>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <input type="text" placeholder="Informe o endereco" class="form-control" name="endereco"/>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <input type="number" placeholder="Informe a idade" class="form-control" name="idade"/>
            </div>
        </div>

        <div class="row margin-top">
            <div class="d-grid d-md-flex" style="margin-top: 15% align-right">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>