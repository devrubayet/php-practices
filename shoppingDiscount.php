<?php

    $amount = readline("Enter Total Shopping amount: ");
    $discount = 0;

    if ($amount >1000) {
        $discount = 20;
        # code...
    }elseif ($amount>500) {
        $discount = 10;

    }
    else{
        $discount = 0;
    }

    $final_price = $amount-($amount *$discount /100);


    echo "You got {$discount}% of {$amount} total price is : {$final_price} taka.";
