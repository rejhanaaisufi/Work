<?php

function divisible($d){
    if(($d%2)==0){
        return "$d is divisible by 2";

    }
    else {
        return "$d is not divisible by 2";
    }
}

print_r (divisible(4)."<br>");

print_r (divisible(55));



?>