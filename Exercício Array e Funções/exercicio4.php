<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 4 </h1>
    <p>Criar uma função que retorna a data atual por extenso. Ex: 12 de Maio de 2020.</p>
    <?php

    function dataExtenso(){
        $data = date ('d/m/Y');
        $data = explode("/",$data);
        $mes = null;
        switch($data[1]){
            case '01':
                $mes = 'Janeiro';
                break;
            case '02':
                $mes = 'Fevereiro';
                break;   
            case '03':
                $mes = 'Março';
                break;
            case '04':
                $mes = 'Abril';
                break;
            case '05':
                $mes = 'Maio';
                break;
            case '06':
                $mes = 'Junho';
                break;
            case '07':
                $mes = 'Julho';
                break;
            case '08':
                 $mes = 'Agosto';
                break;   
            case '09':
                $mes = 'Setembro';
                break;
            case '10':
                $mes = 'Outubro';
                break;
            case '11':
                $mes = 'Novembro';
                break;
            case '12':
                $mes = 'Dezembro';
                break;
        }
        $dia = $data[0];
        $ano = $data[2];
        $dataCompleta = $dia." de ".$mes." de ".$ano;
        
        return $dataCompleta;

    }
    echo dataExtenso();
    
    
    ?>
</body>
</html>