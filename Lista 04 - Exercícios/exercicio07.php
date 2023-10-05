<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
    <title>Lista 4 - Exercício 07</title>
  </head>

  <body class="container mt-5">
  <form action="exerc07_resp.php" method="POST">
  
  <h1><center>Exercício 07</center></h1>

  <div class="row">
        <div class="col">
            <label for="hora" class="form-label">Informe a Hora (0 até 23 horas): </label>
            <input type="number" name="hora" id="hora" class="form-control" min="0" max="23" required/> 
        </div>

        <div class="col">
            <label for="minutos>" class="form-label">Informe o minutos (0 até 59 minutos): </label>
            <input type="number" name="minutos" id="minutos" class="form-control" min="0" max="59" required/> 
        </div>
    </div>

    <div class="row"> 
        <div class="col">
            <button type="submit" class="btn btn-primary">Iniciar Conversão</button>
        </div>
    </div>   

  </form>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>