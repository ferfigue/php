<?php
$nome = "Ivan";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    echo "<br/>";
    $nome = "Elaine";
    echo $nome." Agora no teste 2"; }

teste();

teste2();

?>