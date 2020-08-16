<?php
    echo "整数値：";
    $input = null;
    $input = trim(fgets(STDIN, 4096));

    if($input<0){
        $abs = $input * -1;
    } else {
        $abs = $input;
    }
    echo "その絶対値は".$abs."です。";