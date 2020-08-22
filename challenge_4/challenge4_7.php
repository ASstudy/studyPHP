<?php
    echo "何個*を表示しますか：";
    $num = (int)trim(fgets(STDIN,4096));

    if($num > 0){
        $i = 0;
        while ($i < $num) {
             
            echo '*';
           $i++;
        }
    } 

    //''の文字リテラルの方が正しそう