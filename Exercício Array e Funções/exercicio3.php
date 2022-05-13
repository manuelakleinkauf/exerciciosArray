<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 3 </h1>
    <p>Criar uma função que receba o intervalo entre dois números, retornando um array com os números impares divisíveis por 7, encontrados no intervalo informado.</p>
    <?php

    function intervalo($a,$b){
        $impares=[];
        for($impares = $a; $impares<$b; $impares++){
            if($impares%7 == 0 && $impares %2 == 1){
                echo " ".$impares;  
            } 
        }
        return $impares;
    }
    intervalo(0,55);

    ?>
</body>
</html>