<?php
$marks=33;

if($marks>=100 && $marks<=80){
    echo "A+";
}else{
    if($marks>79 && $marks<=70){
        echo "A-";
    }else{
        if($marks>69 && $marks<=60){
            echo "A";
        }else{
            if($marks>59 && $marks<=50){
                echo "B";
            }else{
                if($marks>49 && $marks<=40){
                    echo "c";
                }else{
                    if($marks>39 && $marks<=33){
                        echo "D";
                    }else{
                        echo "F";
                    }
                }
            }
        }
    }
}