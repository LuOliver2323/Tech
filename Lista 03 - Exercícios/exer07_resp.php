<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
    <title>Lista 3 - Resposta Exercício 07</title>
  </head>   
  <body>

  <div class="container mt-5">        
  <?php
        $alunos = array();

        for ($i=1;$i<=4;$i++) {
            $aluno = $_POST['aluno' . $i];
            $nota1 = $_POST['nota1' . $i];
            $nota2 = $_POST['nota2' . $i];
            $mediaAluno = ($nota1 + $nota2) / 2;
            $alunos[$aluno] = array("nota1" => $nota1, "nota2" => $nota2, "media" => $mediaAluno);
        }

        echo '<h3>Aprovados:</h3>';
        echo '<ul>';
        foreach ($alunos as $nome => $dados) {
            if ($dados["media"] >= 7) {
                echo "<li>$nome - Média: " . round($dados["media"], 2) . "</li>";
            }
        }
        echo '</ul>';

        echo '<h3>Reprovados:</h3>';
        echo '<ul>';
        foreach ($alunos as $nome => $dados) {
            if ($dados["media"] < 7) {
                echo "<li>$nome</li>";
            }
        }
        echo '</ul>';
        ?>
    </div>

  <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>