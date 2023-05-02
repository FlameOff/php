<?php
include_once("funcoes.php");
if(isset($_POST["nome"]) && isset($_POST["nota1"]) && isset($_POST["nota2"]))
    
    $nome = $_POST["nome"];
    //Aqui embaixo nas variaveis das notas 1 e 2 nós usamos o floatval 
    //para transformar as variaveis $_POST["nota1"] e $_POST["nota2"] em float
    $nota1 = floatval($_POST["nota1"]);
    $nota2 = floatval($_POST["nota2"]);
    //e armazenar em : $nota1 = floatval($_POST["nota1"]) / $nota2 = floatval($_POST["nota2"])
    $grau = "";

    $media = mediaAluno($nota1, $nota2);
    // Como o $grau faz parte de uma variavel da função, onde ela passa por referencia
    // então não necessita de pedir para ela retornar, pois ela é clonada de acordo com a variavel
    // de funcoes.php grauAluno
    grauAluno($media, $grau);

    echo "NOTA TRIMESTRAL";
    echo "<br>";
    echo "<br>";
    echo "Nome: $nome";
    echo "<br>";
    echo "Nota 1: $nota1";
    echo "<br>";
    echo "Nota 2: $nota2";
    echo "<br>";
    echo "<br>";
    echo "Media: $media";
    echo "<br>";
    echo "Grau: $grau";