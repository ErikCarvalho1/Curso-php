<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
        <h1>CONVERSOR DE MOEDAS</h1>
        <?php 
        
        $cotaçao = 5.17;
        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real /  $cotaçao;
         
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD ");
       ?>
         <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
       
</body>
</html>