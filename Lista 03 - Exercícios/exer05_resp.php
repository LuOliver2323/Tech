<?php
        function isPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        $numeros = array();

        for ($i = 1; $i <= 20; $i++) {
            $numero = $_POST['numero' . $i];
            $numeros[] = $numero;
        }

        $numerosPrimos = array();

        foreach ($numeros as $numero) {
            if (isPrimo($numero)) {
                $numerosPrimos[] = $numero;
            }
        }

        echo '<p>Números Primos:</p>';
        echo '<ul>';
        foreach ($numerosPrimos as $numeroPrimo) {
            echo "<li>$numeroPrimo</li>";
        }
        echo '</ul>';
        ?>