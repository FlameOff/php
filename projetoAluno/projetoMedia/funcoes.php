<?php
function mediaAluno(float $nota1, float $nota2): float{
    $media = ($nota1 + $nota2)/2;
    return $media;
}


function grauAluno(float $media, string &$g): void{
    if($media<2)
        $g = 'E';
    elseif($media<4)
        $g = 'D';
    elseif($media<6)
        $g = 'C';
    elseif($media<8)
        $g = 'B';
    else
        $g = 'A';        
}
?>