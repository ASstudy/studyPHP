<?php
    echo "変数a：";
    $a = null;
    $a = (int)trim(fgets(STDIN, 4096));
    echo "変数b：";
    $b = null;
    $b = (int)trim(fgets(STDIN, 4096));

    if($a > $b){
        echo "aのほうが大きいです。";
    } elseif ($a < $b){
        echo "bのほうが大きいです。";
    } else {
        echo "aとbは同じ値です。";
    }
   