<?php
    $hand = mt_rand(0, 2);
    // if ($hand == 0){
    //     $hand = "グー";
    // } elseif ($hand == 1){
    //     $hand = "チョキ";
    // } else {
    //     $hand = "パー";
    // }

    // echo "コンピュータが生成した手：".$hand;

    //swich を使うべきところだったらしい
    switch($hand){
        case 0: $hand = "グー"; break;
        case 1: $hand ="チョキ"; break;
        case 2: $hand ="パー"; break;
    } 
    echo "コンピュータが生成した手：".$hand;
    