<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Boa noite!</p>

    <?php
        echo "<p>Este trecho e em php no servidor<p>";
        $x = 10;
        $y = 15;
        $z = $x + $y;
        echo "<p>Este número " . $x . " com " . $y . " é " . $z . "</p>";

    ?>
</body>
</html>