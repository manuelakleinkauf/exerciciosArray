<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 1 </h1>
    <p>criar um array contendo os numeros pares encontrados no intervalo 0 a 10</p>
    <?php
    $pares=[]; 
    for($pares=0; $pares<10; $pares++){
        if($pares%2 == 0){
            echo " ".$pares;  
        }    
    }
    ?>
</body>
</html>