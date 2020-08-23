<?php
//先頭から探す
    // echo "要素数：";
    // $n = (int)trim(fgets(STDIN, 4096));
    // for($i = 0; $i < $n; $i++){
    //     echo "a[".$i."] = ";
    //     $val = (int)trim(fgets(STDIN, 4096));
    //     $a[$i] = $val;
    // }
    // echo "探す数値：";
    // $search = (int)trim(fgets(STDIN, 4096));

    // for($i = 0; $i < $n; $i++){
    //     if($a[$i] === $search){
    //         break;
    //     }
        
    // }

    // if($i < $n){
    //     echo "それはa[".$i."]にあります。";
    // } else {
    //     echo "それはありません。";
    // }

    //後方から探す
    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ";
        $val = (int)trim(fgets(STDIN, 4096));
        $a[$i] = $val;
    }
    echo "探す数値：";
    $search = (int)trim(fgets(STDIN, 4096));

    for($i = $n-1; $i >= 0; $i--){
        if($a[$i] === $search){
            break;
        }
        
    }

    if($i >= 0){
        echo "それはa[".$i."]にあります。";
    } else {
        echo "それはありません。";
    }