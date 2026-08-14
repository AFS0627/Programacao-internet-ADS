<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arthur</h1>
    <p>este paragrafo é um html comum</p>

    <?php

    echo "<p>Este paragrafo foi gerado por php</p>";
    echo "<p>Hoje é " . date("d/m/Y") . "</p>";
    echo "<p>hora atual " . date("H:i") . "</p>";
    echo "<h2>Blumenau</h2>";

    ?>
    <p>e aqui html novamente</p>
    <br><hr>
    <?php 
    $nome = 'Arthur';
    $idade = 20;
    $nota = 8.5;
    $aprovado = True;

    echo "Nome: $nome<br>";
    echo "idade: $idade<br>";
    echo "nota: $nota<br>";
    
    echo "<hr>";
    echo "nome é " . gettype($nome) . "<br>";
    echo "idade é " . gettype($idade) . "<br>";
    echo "nota é " . gettype($nota) . "<br>";
    echo "aprovado é " . gettype($aprovado) . "<br>";
    ?><br><br><hr>

    <?php 
    
    $nome = 'Arthur';
    $cidade = 'Blumenau';
    $idade = 19;
    $preco = 25.90;
    $quantidade = 3;
    echo "<p>o total é " . $quantidade * $preco . ".</p>";
    $variavel1 = 5;
    $variavel2 = 7;
    echo "<p>soma: " . $variavel1 + $variavel2 . "</p>";

    echo "<p>subtração: " . $variavel1 - $variavel2 . "</p>";
    echo "<p>multiplicacao: " . $variavel1 * $variavel2 . "</p>";
    echo "<p>divisao: " . $variavel1 / $variavel2 . "</p>";

    echo 10 % 3;

    ?><br><br><hr>
 <?php 
    
    $nota = 7.5;

    if ($nota >= 9) {
        echo "consceito A - Excelente";
    }elseif ($nota >=7){
        echo "consceito B - bom";
    }elseif ($nota >=6){
        echo "consceito C - Suficiente";
    }else{
        echo "consceito D - Insuficiente";
    }

    ?><br><br><hr>

    <?php
    $numero = 4; 

if ($numero % 2 == 0) {
    echo "O número é par.";
} else {
    echo "O número é ímpar.";
}
$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade.";
} else {
    echo "Menor de idade.";
}
$nota = 7;    
$faltas = 10;  

if ($nota >= 6 && $faltas < 15) {
    echo "Aluno aprovado.";
} else {
    echo "Aluno reprovado.";
}


?><br><br><hr>
<?php 

$cursos = ["ADS", "Redes","informática"];

echo "Total: " . count($cursos) . " cursos<br>";
echo "O primeiro é: $cursos[0]<b><hr>";

foreach ($cursos as $curso) {
    echo "- $curso<br>";
}

echo "<hr>";

$aluno = [
    "nome" => "Bruno Lima",
    "curso" => "ADS",
    "nota" => 7.0
];
echo $aluno["nome"] . " está em " . $aluno["curso"] . "<br><hr>";
foreach ($aluno as $campo => $valor) {
echo "$campo: $valor<br>";
}


?>

<?php
$colegas = ["a", "b", "c", "d", "e"];

foreach ($colegas as $colega) {
    echo "- $colega";
}

$eu = [
    "nome" => "Arthur",
    "curso" => "ADS",
    "cidade" => "Gaspar",
    "idade" => 25
];

echo "Sobre mim:\n";
foreach ($eu as $chave => $valor) {
    echo ucfirst($chave) . ": $valor\n";
}

$notas = [8.5, 7.0, 9.5, 6.0, 8.0];

$soma = array_sum($notas);
$quantidade = count($notas);
$media = $soma / $quantidade;

$maiorNota = max($notas);
$menorNota = min($notas);

foreach ($notas as $nota) {
    echo "- $nota\n";
}

echo "\nMédia: $media\n";
echo "Maior nota: $maiorNota\n";
echo "Menor nota: $menorNota\n";
?>

<?php
function saudacao($nome) {
return "Olá, $nome!";
}
function conceito($nota) {
if ($nota >= 9) return "A";
if ($nota >= 7) return "B";
if ($nota >= 6) return "C";
return "D";
}
echo saudacao("Ana") . "<br>";
echo saudacao("Bruno") . "<br><hr>";
echo "Nota 9.5 = conceito " . conceito(9.5) . "<br>";
echo "Nota 7.0 = conceito " . conceito(7.0) . "<br>";
echo "Nota 4.0 = conceito " . conceito(4.0) . "<br>";
?>

</body>

</html>