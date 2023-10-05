<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
    <title>Lista 2 - Exercício 02</title>
  </head>
  <body>

    <main class="container">
    <form action="exerc2_resp.php" method="POST">
    
    <h1><center>Exercício 02</center></h1>

        <div class="row">

          <?php
          for($i=1; $i<=7; $i++){
            ?>
          
            <div class="col-md-12">
                <label for="valor" <?= $i ?> class="form-label">
                    Informe o <?= $i ?>º valor
                </label>

                <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>"
                 class="form-control"/>
            </div>

            <?php
            }
          ?>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger">Consultar</button>
            </div>
        </div>

    </form>
    </main>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>