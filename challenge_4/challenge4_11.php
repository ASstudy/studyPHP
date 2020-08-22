<?php
    echo "何個*を表示しますか：";
    $num = (int)trim(fgets(STDIN,4096));

    if($num > 0){
        for($i=0; $i < $num; $i++){
            echo '*';
        }
    } 
