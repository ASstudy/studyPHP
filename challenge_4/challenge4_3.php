<?php
    $num = mt_rand(10, 99);
    echo "数当てゲーム開始!!\n10~99の数を当ててください。\n";
    do {
        echo "いくつかな：";
        $ans = (int)trim(fgets(STDIN, 4096));
        if($num > $ans){
            echo "もっと大きな数だよ。";
        } else if($num < $ans){
            echo "もっと小さな数だよ。";
        }
    } while ($num !== $ans);

    echo "正解です。";

    //countとか入れたら回数も表示できるんだろうなぁ