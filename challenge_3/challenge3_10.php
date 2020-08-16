<?php
    echo "整数値：";
    $input = null;
    $input = trim(fgets(STDIN, 4096));

    // if($input < 0){
    //     echo "正でない値が入力されました。";
    // } elseif ($input % 3 === 0) {
    //     echo "その値は3で割り切れます。";
    // } elseif ($input % 3 === 1) {
    //     echo "その値は3で割った余りは1です。";
    // } elseif ($input % 3 === 2) {
    //     echo "その値は3で割った余りは2です。";
    // }
    if($input >= 0){
        if($input % 3 === 0){
            echo "その値は3で割り切れます。";
        } elseif ($input % 3 === 1){
            echo "その値は3で割った余りは1です。";
        } elseif ($input % 3 === 2){
            echo "その値は3で割った余りは2です。";
        }
    } else {
        echo "正でない値が入力されました。";
    }