<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
    <title>Lista 3 - Resposta Exercício 06</title>
  </head>   
  <body>

  <div class="container mt-5">        
    
  <?php
        $produtos = array();

        for ($i=1;$i<=2;$i++) {
            $nomeProduto = $_POST['nomeProduto' . $i];
            $precoProduto = $_POST['precoProduto' . $i];
            $produtos[] = array("nome" => $nomeProduto, "preco" => $precoProduto);
        }

        $produtosInferiores50 = 0;
        $produtosEntre50e100 = array();
        $totalPrecosSuperior100 = 0;
        $contagemPrecosSuperior100 = 0;

        foreach ($produtos as $produto) {
            if ($produto["preco"] < 50) {
                $produtosInferiores50++;
            } elseif ($produto["preco"] >= 50 && $produto["preco"] <= 100) {
                $produtosEntre50e100[] = $produto["nome"];
            } else {
                $totalPrecosSuperior100 += $produto["preco"];
                $contagemPrecosSuperior100++;
            }
        }

        $mediaPrecosSuperior100 = $totalPrecosSuperior100 / $contagemPrecosSuperior100;

        echo '<p>Quantidade de produtos com preço inferior a R$50,00: ' . $produtosInferiores50 . '</p>';
        echo '<p>Nomes dos produtos com preço entre R$50,00 e R$100,00:</p>';
        echo '<ul>';
        foreach ($produtosEntre50e100 as $produtoEntre50e100) {
            echo "<li>$produtoEntre50e100</li>";
        }
        echo '</ul>';
        echo '<p>Média dos preços dos produtos com preço superior a R$100,00: R$' . round($mediaPrecosSuperior100, 2) . '</p>';
        ?>
  </div>

  <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>