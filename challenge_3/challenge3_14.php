<?php
    echo "整数A：";
    $a = null;
    $a = (int)trim(fgets(STDIN, 4096));
    echo "整数B：";
    $b = null;
    $b = (int)trim(fgets(STDIN, 4096));

    $diff = null;
    $diff = $a > $b ? $a - $b : $b - $a;

    if($diff <= 10){
        echo "それらの差は10以下です。";
    } else {
        echo "それらの差は11以上です。";
    }