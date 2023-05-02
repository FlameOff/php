<?php
include("funcoes.php");
 if(isset($_POST["nome"]) && isset ($_POST["nota1"]) && isset($_POST["nota2"])){
     $nome = $_POST["nome"];
     $nota1 = floatval($_POST["nota1"]);
     $nota2 = floatval($_POST["nota2"]);
     $grau = "";

     $media = obterMedia($nota1,$nota2);
     preencherGrau($media,$grau);

     echo "<h3>RESULTADO:</h3><br><hr> 
        <h1> Nome: {$nome} </h1>
        <h1>Nota 1: {$nota1}</h1>
        <h1>Nota 2: {$nota2}</h1>
        <hr>
        <h1> Média: {$media} </h1>
        <h1> Grau: {$grau} </h1>
     ";
 }
?>