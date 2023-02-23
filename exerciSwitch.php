<?php

    $a = 5;
    $b = 7;
    $soma = 0;
    $sub = 0;
    $multi = 0;
    $divi = 0;
    
    switch (2){
    
        case 0:
            $soma = $a + $b;
            echo " a soma é $soma ";
            break;
        case 1:
            $sub = $a - $b;
            echo " a subtração é $sub ";
            break;
        case 2:
            $multi = $a * $b;
            echo " a multiplicação é $multi ";
            break;
        case 3:
            $divi = $a / $b;
            echo " a divisão é $divi ";
            break;
    }
    
?>
