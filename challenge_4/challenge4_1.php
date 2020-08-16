<?php

do {
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
    do {
        echo "もう一度？　1…Yes / 0…No：";
        $loop = (int)trim(fgets(STDIN, 4096));
    } while ($loop !== 0 && $loop !== 1); 
} while ($loop === 1);
     
//0/1じゃない値が入力されたときの表示が～と思っていたけどもう一か所do-whileを追加するらしい
//多重ループ

