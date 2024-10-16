<?php

function printStar($starCount){
    for ($i=1; $i <= $starCount; $i++) {
        echo"*";
    }
    echo"\n";
}
printStar(5);
printStar(100);
