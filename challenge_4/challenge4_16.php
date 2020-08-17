<?php
    echo "何cmから：";
    $min = (int)trim(fgets(STDIN, 4096));
    echo "何cmまで：";
    $max = (int)trim(fgets(STDIN, 4096));
    echo "何cmごと：";
    $space = (int)trim(fgets(STDIN, 4096));
    echo "身長　標準体重\n-----------------\n";

    $weight = 0;
    $height = 0;
    for($height = $min; $height <= $max; $height += $space){
        (double)$weight = ($height - 100) * 0.9;
        echo $height." ".$weight."\n";
    }

    //丸まってはしまいますが……動かないと思ったらスペルのミスだったという