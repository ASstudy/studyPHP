<?php
    echo "整数値：";
    $input = null;
    $input = (int)trim(fgets(STDIN, 4096));

    if($input > 0){
        echo "その値は正です。";
    } elseif ($input < 0){
        echo "その値は負です。";
    } elseif ($input === 0) {
        echo "その値は０です。";
    }
    // var_dump($input);

    //===で比較すると0判定にならないらしい。そのほかに分岐されてしまった。
    //string型で入力されているのでint型の0と厳密に比較したら合わないということなのだろう
    //$inputを変換してやれば厳密比較でも問題なさそう