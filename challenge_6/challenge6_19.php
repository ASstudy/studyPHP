<?php
    echo "6人の国語・数学の点数を入力せよ。\n";
    $total = array(0, 0);
    for($i = 0; $i < 6; $i++){
        echo ($i+1)."番目…国語：";
        $score[$i][0] = (int)trim(fgets(STDIN, 4096)); 
        echo "　　　数学：";
        $score[$i][1] = (int)trim(fgets(STDIN, 4096));

        $totalS[$i] = $score[$i][0] + $score[$i][1];
        $total[0] += $score[$i][0];
        $total[1] += $score[$i][1];
    }

    echo "No.  国語　数学　平均\n";
    for($i = 0; $i < 6; $i++){
        echo " ".($i+1)."　 ".$score[$i][0]."　 ".$score[$i][1]."　 ".($totalS[$i]/2)."\n";
    }
    echo "平均　".number_format($total[0]/6, 2)."  ".number_format($total[1]/6, 2);

    //何に対sy￥手に次元配列を使うべきか否かが……