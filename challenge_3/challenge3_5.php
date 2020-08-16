<?php
    echo "整数値：";
    $input = null;
    $input = (int)trim(fgets(STDIN, 4096));

    if($input > 0){
        echo "その値は正です。";
    } elseif ($input < 0){
        echo "その値は負です。";
    } else {
        echo "その値は０です。";
    }
