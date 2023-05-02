<?php

    do{
        echo "Tabuada de $i<br>";
        do{
            $r = $j * $i;
            echo "$j x $i";
            echo "   ";
            $i++;
        }while($j<10);
        echo "<br>";
        $j++;
    }while($i<10);

    ?>