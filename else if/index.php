<?php

$marks=30;

if($marks <=100 && $marks >=80 ){
    echo "A+";
}
else if($marks<80 && $marks>=70){
    echo "A-";
}
else if($marks<60 && $marks>=50){
    echo "A";
}
else if($marks<49 && $marks>=40){
    echo "B";
}
else if($marks<39 && $marks>=33){
    echo "B";
}
else {
    echo "F";
}