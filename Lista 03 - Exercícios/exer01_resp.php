<?php
    if($_POST){
        for($i=1; $i<=2; $i++){
            $vetor[$_POST["aluno$i"]] = $_POST["nota$i"];
        }
        foreach($vetor as $chave => $valor){
            echo "<br> Nome do Aluno: $chave - Nota: $valor";
        }
    }
?>