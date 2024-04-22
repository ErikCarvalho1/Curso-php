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
    <H1>Gerador de numeros</H1>
    <?php 
    $numeroa_leatorio = mt_rand(1, 100);
    echo "<p>Greando numero entre 1 e 100... <br>Seu numero gerado foi $numeroa_leatorio </p> ";
    
    ?>
      <button onclick="javascript:document.location.reload()">gerar novo</button>
      <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
       
</body>
</html>