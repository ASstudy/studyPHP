<?php
    echo "整数値：";
    $input = null;
    $input = (int)trim(fgets(STDIN, 4096));

    if($input <= 0){
        echo "正でない値が入力されました。";
    } elseif ($input % 10 === 0){
        echo "その値は10の倍数です。";
    } else {
        echo "その値は10の倍数ではありません。";
    } 
   