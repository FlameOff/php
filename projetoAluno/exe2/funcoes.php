<?php
function tabuada(&$r): void{
    for($i=1;$i<=11;$i++){
        echo "<br>";
        for($j=1;$j<11;$j++)
        {
            $r = $j * $i;
            echo "<br>";
            echo "$j X $i = $r";
        }
    } 
}
?>