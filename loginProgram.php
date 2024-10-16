<?php
    $correct_username = "admin";
    $correct_password = "1234567890";

    $username = readline("Enter Your user Name: ");
    $password = readline("Enter Your Password: ");

    if ($username == $correct_username && $password == $correct_password) {
        echo "<h1 style='color:green;'>Login Successful</h1>";
    }
    else {
        echo "Login Denied";
    }
