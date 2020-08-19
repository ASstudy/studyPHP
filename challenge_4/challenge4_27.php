<?php
    echo "整数を加算します。\n";
    echo "何個加算しますか：";
    $loop = (int)trim(fgets(STDIN, 4096));

    $sum = 0;
    $ave = 0;
    for($i = 0; $i < $loop; $i++){
        echo "整数：";
        $num =  (int)trim(fgets(STDIN, 4096));
        $sum += $num;
        if($sum > 1000){
            echo "合計が1,000を超えました。\n";
            echo "最後の数値は無視します。";
            $sum -= $num;
            break;
        }
        
    }
      
    echo "合計は".$sum."です。\n";
    if($i !== 0){
        $ave = $sum / $i;
        echo "平均は".$ave."です。";
    }
   

    //わざわざ引かなくても判定をsum + numにすればいいのか
    //平均doubleになってるけどこれはいいかなぁ
