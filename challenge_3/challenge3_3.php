<?php
    echo "変数A：";
    $A = null;
    $A = trim(fgets(STDIN, 4096));
    echo "変数B：";
    $B = null;
    $B = trim(fgets(STDIN, 4096));

    if($A % $B === 0){
        echo "BはAの約数です。";
    } else 
    {
        echo "BはAの約数ではありません。";
    }