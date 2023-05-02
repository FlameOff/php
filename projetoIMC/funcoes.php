<?php

    function obterImc (float $p, float $a): float{
        $imc = $p / ($a**2);
        return $imc;    
    }
    function classImc (float $imce, string &$class): void{
        if($imce<18.5)
            $class = "Abaixo do peso normal";
        elseif($imce<24.9)
            $class = "Peso normal";
        elseif($imce<29.9)
            $class = "Excesso de peso";
        elseif($imce<34.9)
            $class = "Obesidade classe I";
        elseif($imce<39.9)
            $class = "Obesidade classe II";
        else
            $class = "Obesidade classe III";
    }    
?>