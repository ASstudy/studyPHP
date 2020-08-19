<?php
    $num = mt_rand(0, 99);
    echo "数当てゲーム開始!!\n0~99の数を当ててください。\n";

    $count = 0;
    for($i = 6; $i > 0; $i--){
        echo "残り".$i."回。いくつかな：";
        $ans = (int)trim(fgets(STDIN, 4096));
        if($num > $ans){
            $count++;
            echo "もっと大きな数だよ。\n";
        } else if($num < $ans){
            $count++;
            echo "もっと小さな数だよ。\n";
        } else {
            $count++;
            echo $count."回で当たりましたね。";
            break;
        }
    }
    if($i === 0){
        echo "残念。正解は".$num."でした。";
    }


    

    