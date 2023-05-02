<?php	

function obterImc (float $peso, float $altura): float{
    $imc = $peso/($altura**2);
    return $imc;
}
function grauImc (float $imc){
    if($imc<18)
        $grau = 'Baixo peso';
    elseif($imc<25.0)
        $grau = 'Peso adequado';
    elseif($imc<30.0)
        $grau = 'Sobrepeso';
    elseif($imc<35.0)
        $grau = 'Obesidade grau I';
    elseif($imc<40)
        $grau = 'Obesidade grau II';
    else
        $grau = 'Obesidade grau III';
    return $grau;
}