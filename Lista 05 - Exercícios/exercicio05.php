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
        <h2>Preencha com suas informações pessoais</h2>

        <i class="bi bi-basket2-fill"></i>

        <div class="row">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Informe o nome..." id="nome" name="nome">                
            </div>

            <div class="col-3">    
            <label for="nome" class="form-label">CPF</label>
                <input type="text" class="form-control" placeholder="Informe o cpf..." id="cpf" name="nome">
            </div>

            <div class="col-4">    
            <label for="Datetime" class="form-label">Data de Nascimento</label>
                <input type="datetime-local" class="form-control" id="Datetime">
            </div>

            <div class="col-5">
                
            <label for="Datetime" class="form-label">Sexo</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Feminino</label>
                </div>
            </div>

            <div class="col-3">    
            <label for="nome" class="form-label">Estado Civil</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Viuvo</option>
                </select>
            </div>

            <div class="col-6">    
            <label for="renda" class="form-label">Renda Mensal</label>
                <input type="text" class="form-control" placeholder="0,00" id="renda" name="name">
            </div>

            <div class="col-6">    
            <label for="Logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" id="Logradouro" name="nome">
            </div>          

            <div class="col-6">    
            <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" placeholder="Nº" id="numero" name="nome">
            </div>

            <div class="col-3">    
            <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" placeholder="Complemento" id="complemento" name="nome">
            </div>

            <div class="col-3">    
            <label for="nome" class="form-label">Estado</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">Acre</option>
                    <option value="2">Paraná</option>
                    <option value="3">São Paulo</option>
                </select>
            </div>

            <div class="col-3">    
            <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade" id="cidade" name="nome">
            </div>

        </div>

        <div class="row margin-top">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style= "margin-top: 5%">
                <button class="btn btn-success" type="button">Cadastrar</button>
            </div>
        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>