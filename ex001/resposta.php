<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>resultado final</h1>
        <p>
            <?php 
            $n = $_REQUEST["num"] ?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O antecessor descolhido foi <strong>$n</strong>";
            echo "<br>O seu <em>antecesor</em> é $a";
            echo "<br> o seu <em>sucesor</em> é $s";
            ?>

        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        
    </main>
</body>
</html>