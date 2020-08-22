<?php
    echo "整数を加算します。\n";

    $sum = 0;

    
    for($i = 1; $i <= 10; $i++){
        echo "■第".$i."グループ\n";
        
        for($j = 0; $j < 5; $j++){
            echo "整数：";
            $num =  (int)trim(fgets(STDIN, 4096));
            if($num === 99999){
                goto Outer;
            }else if($num === 88888){
                goto OutGroup;
            }
        $sum += $num;
        }
        OutGroup:
    }
    Outer:  
    echo "合計は".$sum."です。\n";

   

    //ラベル付き文……phpにはないようなのでgotoでどうにか
    //想定と違うって怒られますけど動くので……ここじゃないとだめだったし……
