<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Lista 2 - Exercício 01</title>
  </head>
  <body>
  
  <h1>
    <?php 
    $vetor = [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3,
        4 => 4
    ];
    var_dump($vetor);
    echo "<br>";
    echo "O valor da posição [valor1] é {$vetor["valor1"]}";
    $vetor["valor2"] = 25;
    echo "o valor da posição [valor2] agora é ".$vetor["valor2"];
    $vetor[5] = 10;
    echo "Posição 5: ".$vetor[5];
    unset($vetor[5]);
    //unset($vetor);

    foreach($vetor as $posicao){
        echo "<br> Valores do Vetor: $posicao";
    }
    foreach($vetor as $chave => $valor){
        echo "<br> Posição $chave tem o valor $valor";
    }
    ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>