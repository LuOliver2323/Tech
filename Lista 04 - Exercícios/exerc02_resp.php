<?php
    $alunos = $_POST["alunos"];

    if (count($alunos) == 10) {
        sort($alunos);
        foreach ($alunos as $aluno) {
            echo "$aluno<br>";
        }
    } else {
        echo "Por favor, insira exatamente 10 nomes de alunos.";
    }
?>    