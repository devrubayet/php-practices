<?php

    $num1 = readline("Enter your first number: " );
    $num2 = readline("Enter Your second number: ");
    $cal = readline("Enter your calculation operator ex: +, -, *, /: ");

    if ($cal == "+") {
        echo "your summation is: ". $num1+  $num2;
        }
    else if ($cal == "-") {
        echo "you substurction is: ". $num1- $num2;
    }
    else if ($cal == "*") {
        echo "Your multiplication is: ". $num1* $num2;
    }
    else if ($cal == "/") {
        echo "your divition is: ". $num1/ $num2;
    }
    else {
        echo "Invalid calculation";
    }
