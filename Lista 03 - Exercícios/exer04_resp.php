<?php
      $meses = array(
        1 => 'Janeiro', 
        2 => 'Fevereiro', 
        3 => 'Março', 
        4 => 'Abril',
        5 => 'Maio', 
        6 => 'Junho', 
        7 => 'Julho', 
        8 => 'Agosto',
        9 => 'Setembro', 
        10 => 'Outubro', 
        11 => 'Novembro', 
        12 => 'Dezembro'
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        if ($numero >= 1 && $numero <= 12) {
            echo '<p>O mês correspondente é ' . $numero . ' é: ' . $meses[$numero] . '</p>';
        }
    }
  ?>