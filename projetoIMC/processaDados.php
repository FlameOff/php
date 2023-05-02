<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:black;color:aliceblue;">
    <?php
    include("funcoes.php");
    if(isset ($_POST["peso"]) && isset($_POST["altura"])){
        $p = floatval($_POST["peso"]);
        $a = floatval($_POST["altura"]);
        $c = "";

        $imc = obterImc ($p, $a);
        classImc($imc, $c);

        echo "<h1>IMC Processa Dados</h1><hr><p>IMC : O seu Índice de Massa Corporal é igual a $imc</p><hr><p>Class : Sua classificação é $c</p>";
    }

    ?>
    <table border="2">
        <tr>
            <td>IMC</td>
            <td>Classificação</td>
        </tr>
        <tr>
            <td>18.5</td>
            <td>Abaixo do Peso Normal</td>
        </tr>
        <tr>
            <td>18.5 - 24.9</td>
            <td>Peso Normal</td>
        </tr>
        <tr>
            <td>25.0 - 29.9</td>
            <td>Excesso de peso</td>
        </tr>
        <tr>
            <td>30.0 - 34.9</td>
            <td>Obesidade Grau I</td>
        </tr>
        <tr>
            <td>35.0 - 39.9</td>
            <td>Obesidade Grau II</td>
        </tr>
        <tr>
            <td>40</td>
            <td>Obesidade Grau III</td>
        </tr>
    </table>    
</body>
</html>
