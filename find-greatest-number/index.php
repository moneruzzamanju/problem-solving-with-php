<?php

$num1 = 10;
$num2 = 100;
$num3 = 1000;

if(($num1 > $num2) && ($num1 > $num3)){
    echo "Number1 is greatest.";
}elseif(($num2 > $num1) && ($num2 > $num3)){
    echo "Number2 is greatest.";
}else{
    echo "Number3 is greatest.";

}
