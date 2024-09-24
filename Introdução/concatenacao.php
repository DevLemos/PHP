<?php
    # Método 1
    $dia = 14;
    $mes = "abril";
    $ano = 1912;
    $anocompleto= $dia . " de " . $mes . " de " . $ano;
    echo "$anocompleto<br>";

    # Método 2
    $anocompleto = 14;
    $anocompleto .= " de abril de ";
    $anocompleto .= 1912;
    echo $anocompleto;
?>