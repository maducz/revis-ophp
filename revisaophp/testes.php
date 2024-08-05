<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="Revisão PHP" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP</title>
</head>
<body>
    <H1>Revisão PHP</H1>
    <a href="index.html">Home</a>
    <?php 
    echo "Esta linha é um php <br>";

    $revisao="<p> Olá mundo </p>";
    echo $revisao;

    $x=3;
    $x=1;
    $result="x+y";
    echo "O resultado da soma é: $result </p>";

    echo"<p>A variavel x é do tipo:</p>";
    var_dump($x);
    echo "<p> A variavel revisão é do tipo:</p>";
    var_dump($revisao);

    ?>
</body>
</html>