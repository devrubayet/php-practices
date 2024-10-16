<?php

$choice = readline("Type 'C' to convert from Celsius to Fahrenheit, or 'F' to convert from Fahrenheit to Celsius: ");
$temperature = readline("Enter the temperature: ");

switch (strtoupper($choice)) {
    case 'C':
        $fahrenheit = ($temperature * 9/5) + 32;
        echo "{$temperature}°C is equal to {$fahrenheit}°F.";
        break;
    case 'F':
        $celsius = ($temperature - 32) * 5/9;
        echo "{$temperature}°F is equal to {$celsius}°C.";
        break;
    default:
        echo "Invalid choice!";
        break;
}
