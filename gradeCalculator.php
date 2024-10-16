<?php

$marks = readline("Enter your marks: ");

$result = null;

// Check if the input is valid (marks between 0 and 100)
if ($marks < 0 || $marks > 100) {
    $result = "Invalid Number. Marks should be between 0 and 100.";
} else {
    if ($marks >= 90) {
        $result = "A +";
    } elseif ($marks >= 80) {
        $result = "A";
    } elseif ($marks >= 70) {
        $result = "A -";
    } elseif ($marks >= 60) {
        $result = "B +";
    } elseif ($marks >= 50) {
        $result = "B";
    } elseif ($marks >= 40) {
        $result = "B -";
    } elseif ($marks >= 30) {
        $result = "C";
    } else {
        $result = "F";
    }
}

echo $result;
