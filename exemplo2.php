<?php 
    $nome1 = "Fernando";
    $sobrenome = " Alves Figueiredo";

    $nomeCompleto = $nome1 ." ". $sobrenome;
    
    echo $nome1; 
    echo "<br/>";

    echo $nomeCompleto;

    unset($nome1); // unset limpa a variavel
    if(isset($nome1)){ //isset verifica se a variavel existe
        echo $nome1;
    }
?>