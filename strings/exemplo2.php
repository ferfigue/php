<?php
$nome = "fernando alves";

$nome = strtoupper($nome); //Deixa o nome todo em maiusculo

echo $nome;

$nome = strtolower($nome); // deixa o nome todo em minusculo
echo"<hr>";
echo "<br/> $nome";

$nome = ucwords($nome); //deixa a primeira letra de cada palavra em maiuscula
echo"<hr>";
echo "<br/> $nome";


$nome = ucfirst($nome);
echo"<hr>";
echo "<br/> $nome";

?>