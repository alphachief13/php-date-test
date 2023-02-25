<?php 

function multiplica(int $a, int $b): int 
{
    return $a * $b;
}

function saudacao()
{
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date("H");
    $horas = date("h:i:s");

    if($hora >= 0 && $hora <=5){
        echo "São: $horas, Boa Madrugada!";
    } elseif($hora >= 6 && $hora <= 11){
        echo "São: $horas, Bom dia!";
    } elseif($hora >= 12 && $hora <= 17){
        echo "São: $horas, Boa tarde!";
    } elseif($hora >= 18 && $hora <= 23){
        echo "São: $horas, Boa noite!";
    }
}

?>