<?php
    $re;
    echo "<h1>TABUADA</h1>";
        for ($j=1;$j < 11;$j++){
            for ($i=1;$i < 11; $i++){
                $re = $j * $i;
                echo "<p>Tabuada de $j || $j * $i</p> $re;<br>";
            }
        }

?>