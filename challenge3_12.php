<?php
    echo "実数a：";
    $a = null;
    $a = trim(fgets(STDIN, 4096));
    echo "実数b：";
    $b = null;
    $b = trim(fgets(STDIN, 4096));

    // $max = null;
    // if($a > $b){
    //     $max = $a;
    // } else {
    //     $max = $b;
    // }

    // echo "大きいほうの値は".$max."です。";

    //値が同じだった場合が気持ち悪いかなぁと思ったんですけど、最大値が表示されていることには変わりがないのでいいのですかね
    //条件演算子がきちんと使えるかがあやしいので練習がてら

    $max = null;
    if($a > $b){
        $max = $a;
    } else {
        $max = $b;
    }
    //a>bがtrueならaが代入。falseならbが代入。
    $max = $a > $b ? $a : $b;

    echo "大きいほうの値は".$max."です。";