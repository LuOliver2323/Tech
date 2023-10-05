<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 05 - Criação de formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

<main class="container col-md-9">
    <form method="post" enctype="multipart/form-data" action="lista05_resp.php">

        <h2>Preencha com suas informações pessoais</h2>

        <div class="row">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Informe o nome..." id="nome" name="nome">                
            </div>

            <div class="col-3">    
            <label for="cpf" class="form-label">CPF</label>
                <input type="decimal" class="form-control" placeholder="Informe o cpf..." id="cpf" name="cpf">
            </div>

            <div class="col-4">    
            <label for="Datetime" class="form-label">Data de Nascimento</label>
                <input type="datetime-local" class="form-control" id="Datetime" name="data_nascimento">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo_masculino"  value="Masculino">
                    <label class="form-check-label" for="sexo-masculino">Masculino</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo_feminino"  value="Feminino">
                    <label class="form-check-label" for="sexo-feminino">Feminino</label>
                </div>
            </div>

            <div class="col-6">    
            <label for="estado_civil" class="form-label">Estado Civil</label>
                <select class="form-select" aria-label="Default select example" name="estado_civil">
                    <option selected>---</option>
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Viuvo</option>
                </select>
            </div>

            <div class="col-6">    
            <label for="renda_mensal" class="form-label">Renda Mensal</label>
                <input type="text" class="form-control" placeholder="0,00" id="renda_mensal" name="renda_mensal">
            </div>

            <h2>Endereço</h2>

            <div class="col-6">    
            <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" id="logradouro" name="logradouro">
            </div>          

            <div class="col-3">    
            <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" placeholder="Nº" id="numero" name="numero">
            </div>

            <div class="col-3">    
            <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" placeholder="Complemento" id="complemento" name="complemento">
            </div>

            <div class="col-6">    
            <label for="estado" class="form-label">Estado</label>
                <select class="form-select" aria-label="Default select example" name="estado">
                    <option selected>---</option>
                    <option value="1">Acre</option>
                    <option value="2">Paraná</option>
                    <option value="3">São Paulo</option>
                </select>
            </div>

            <div class="col-6">    
            <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade" id="cidade" name="cidade">
            </div>

            <div class="mb-3">
                <label for="arquivo" class="form-label">Selecione o arquivo: </label>
                <input type="file" class="form-control" name="arquivo" id="arquivo"/>
            </div>

        </div>

        <div class="row margin-top">
            <div class="d-grid d-md-flex" style="margin-top: 15% align-right">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>