<?php
    $j=0;
    while($j<11)
    {
        echo "<p>|Tabuada de $j|</p>";
        $i=1;
        while($i<10)
        {
            $i++;
            echo ($j * $i)."&nbsp";
        }
        $i = 1;
        $j++;

    }
?>