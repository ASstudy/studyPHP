<?php
     do {
        echo "配列aの要素数：";
        $nA = (int)trim(fgets(STDIN,4096));
    } while ($nA <= 0);

    for($i = 0; $i < $nA; $i++){
        echo "a[".$i."]：";
        $a[$i] = trim(fgets(STDIN,4096));
    }

    do {
        echo "配列bの要素数：";
        $nB = (int)trim(fgets(STDIN,4096));
    } while ($nB <= 0);

    for($i = 0; $i < $nB; $i++){
        echo "a[".$i."]：";
        $b[$i] = trim(fgets(STDIN,4096));
    }
    
    list($a, $b) = aryExchng($a, $b);

    echo "配列aとbの全要素を交換しました。\n";
    for($i = 0; $i < $nA; $i++){
        echo "a[".$i."] =".$a[$i]."\n";
    }
    for($i = 0; $i < $nB; $i++){
        echo "b[".$i."] =".$b[$i]."\n";
    }



    function aryExchng($a, $b){
        $n = count($a) < count($b) ? count($a) : count($b);
        for($i = 0; $i < $n; $i++){
            $tmp[$i] = $a[$i];
            $a[$i] = $b[$i];
            $b[$i] = $tmp[$i];
            
        }
        return [$a, $b];
    }

    //list($a, $b) = $this->aryExchng($a, $b);みたいなことにしてたら引っかかった……クラス定義してないせいか？
    //その前にreturn使わないでどうにかしようとしてたんだけどうまくいかなくって……。来週質問する？