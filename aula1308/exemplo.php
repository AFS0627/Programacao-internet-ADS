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

    ?>

</body>

</html>