<?php
    do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $x[$i] = trim(fgets(STDIN,4096));
    }
    echo "探査する値：";
    $search = trim(fgets(STDIN,4096));
    $idx = arraySrchIdx($x, $search);
    var_dump($idx);
    echo "一致する要素のインデックス\n";
    for($i = 0; $i < count($idx); $i++){
        echo $idx[$i]."\n";
    }


    function arraySrchIdx($x, $search){
        $count = 0;
        for($i = 0; $i < count($x); $i++){
            if($x[$i] == $search){
                $count++;
            }
        }
        var_dump($count);
        //ここのループが悪さしてるっぽい。具体的には０以下の値でもずっと止まらず回ってる
        //誤植！許すまじ！
        for($i = (count($x)-1); $i >= 0; $i--){
            if($x[$i] == $search){
                $c[($count--)-1] = $i;
            }
        }
        return $c;
    }

    //Javaの説明文のfor文誤植じゃん……そりゃループ止まらんわ……