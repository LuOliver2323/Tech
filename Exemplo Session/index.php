<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    
<main class="container col-md-9">
    <h1>Formulário de Acesso</h1>

    <?php if ((isset($_GET['acesso'])) && ($_GET['acesso'] == 'negado')) {?>
    <div class="alert alert-error" role="alert">
        Você não possui permissão para acessar a página!
        Informe o nome de usuário e senha corretamente!
    </div>
    <?php } ?>
    
    <form action="acessar.php" method="POST">
        <div class="row">
            <div class="col-6">
                <label class="form-label">Informe o nome de usuário: </label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="col-6">
                <label class="form-label">Informe a senha:</label>
                <input type="password" name="senha" class="form-control"/>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </div>
            </div>
        </div>
    </form>
</main>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>