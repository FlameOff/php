<?php
include("funcoes.php");
if(isset($_POST["peso"]) && isset($_POST["altura"]))
    $peso = (float) $_POST["peso"];
    $altura = (float) $_POST["altura"];

    $imc = obterImc ($peso, $altura);
    $grau = grauImc ($imc);

    echo "
    <hr>
    <p>IMC</p>
    <br>
    $imc
    <br><hr>
    <p>Grau de Obesidade</p>
    <br>
    $grau
    <br><br>
    <hr>
    "

?>