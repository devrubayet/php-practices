<?php

function greet($name,$time ="Morning") {
    echo"Good $time $name\n";
}

greet("Jhon",);
greet("Jane","afternoon");
greet("Doe","evening");
greet("Jhon");
