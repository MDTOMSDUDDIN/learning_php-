<?php
$marks=22;

switch(true){
    case($marks <=100 && $marks>=80):
        echo "A+";
    break;
    case($marks <79 && $marks>=70):
        echo "A-";
    break;
    case($marks <69 && $marks>=60):
        echo "A";
    break;
    case($marks <59 && $marks>=50):
        echo "B";
    break;
    case($marks <49 && $marks>=40):
        echo "C";
    break;
    case($marks <39 && $marks>=33):
        echo "D";
    break;
    
    default:
    echo "F" ;
}