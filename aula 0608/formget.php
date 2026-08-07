<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="texto">
        <input type="submit">
    </form>

    <?php
        $texto = $_GET['texto'];
        echo "<p>Texto recebido a partir do envio do formulario: " . $texto . "</p>";
       
    ?>
</body>
</html>