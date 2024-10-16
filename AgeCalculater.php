<?php

    $age = 18;
    switch (true) {
        case ($age < 18):
            echo"Child";
            break;
        case ($age >= 18 && $age <= 65):

            echo "Audlt";
            break;
        case ($age > 65):
            echo "Senior";
            # code...
            break;

        default:
            echo "Invalid age";
            break;
    }
