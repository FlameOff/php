<?php
    echo "<h1>FOR:</h1><br>";
    echo "<p>Contador normal</p>";
    for($j=2;$j<=28;$j+=2)
    {
        if($j>8 && $j<18)
        continue;
        if($j>22 && $j<28)
        continue;
        echo "$j &nbsp";
    }
    echo "<hr><p>Contador até o 20</p>";
    for($j=2;$j<=20;$j+=2)
    {
        if($j>8 && $j<18)
        continue;
        echo "$j &nbsp";
    }
    echo "<br><h1>WHILE:</h1><br>";
    $i=2;
    while($i<28)
    {
        if($i>8 && $i<18)
        $i+=2;
        continue;
        if($i>22 && $i<28)
        continue;
    }
?>