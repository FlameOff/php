<?php
$i = 1;
$j = 1;
$r;

    do{
        echo "Tabuada de $i<br>";
        do{
            $r = $j * $i;
            echo "$j x $i = $r";
            echo "";
            $i++;
        }while($j<11);
        $j++;
        echo "<br>";
    }while($i<11);

    ?>