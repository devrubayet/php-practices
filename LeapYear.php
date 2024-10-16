<?php

    $year = readline("Enter a Year: ");

    if ($year %4== 0 && $year %100 != 0 || $year %400== 0) {
        echo "{$year} is a leap year";
        # code...
    }else {
        echo "{$year} is a not leap year";
    }
