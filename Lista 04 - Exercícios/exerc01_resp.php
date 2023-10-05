<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
    <title>Lista 4 - Resposta Exercício 01</title>
  </head>

  <body class="container mt-5">

  <?php
      function validarData($data) {
          $dataInfo = date_parse($data);
          return ($dataInfo["error_count"] === 0 && checkdate($dataInfo["month"], $dataInfo["day"], $dataInfo["year"]));
      }

      function obterDiaDaSemana($data) {
          return date('l', strtotime($data));
      }
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];

        if (validarData($data)) {
            $diaSemana = obterDiaDaSemana($data);
            echo "<p>A data $data é válida e corresponde a um(a) $diaSemana.</p>";
        } else {        
          
      echo "<p>A data $data é inválida. Por favor, insira uma data válida.</p>";
        }
    }
  ?>    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>