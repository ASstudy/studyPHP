<?php
    echo "整数値：";
    $input = null;
    $input = trim(fgets(STDIN, 4096));

    if($input<0){
        echo "その値は負です。";
    }