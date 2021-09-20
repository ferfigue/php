<?php
    $nome = "Return System";
    $site = "www.returnsystem.com.br";
    
    $ano = 1998;
    $salario = 10500.00;
    $bloqueado = false;

    //////////////////////////////////

    $frutas = array("abacaxi", "laranja", "manga");
    echo $frutas[2];
    echo "<br/>";
    $nascimento = new DateTime();

    //var_dump($nascimento);

    //////////////////////////////////////////
    $arquivo = fopen("ola.php", "r");
    echo "<br/>";
    //var_dump($arquivo); #mostra o tipo do arquivo
    echo "<br/>";
    $nulo = NULL;
    echo $arquivo
?>  