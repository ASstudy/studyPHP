<?php
    echo "暗算力トレーニング！！\n";
    do{
        $x = mt_rand(100 ,999);
        $y = mt_rand(100 ,999);
        $z = mt_rand(100 ,999);
        $rand = mt_rand(0,3);
        
        switch ($rand) {
            
            case 0: $ans = $x + $y + $z;
                break;
            case 1: $ans = $x + $y - $z;
                break;
            case 2: $ans = $x - $y + $z;
                break;
            case 3: $ans = $x - $y - $z;
                break;
        }
        do{
            quiz($x, $y, $z, $rand);
            $cal = (int)trim(fgets(STDIN, 4096));
            if($ans !== $cal){
                echo "違いますよ！！\n";
            }
        } while ($ans !== $cal);
        
        do{
            echo "もう一度？<Yes…1 / No…0>";
            $loop = (int)trim(fgets(STDIN, 4096));
        } while ($loop !== 0 && $loop !== 1);

    } while ($loop === 1);

    function quiz($x, $y, $z, $rand){
        switch ($rand) {
            case '0':
               echo $x." + ".$y." + ".$z." = ";
                break;
            case '1':
               echo $x." + ".$y." - ".$z." = ";
                break;
            case '2':
               echo $x." - ".$y." + ".$z." = ";
                break;
            case '3':
               echo $x." - ".$y." - ".$z." = ";
                break;
        }

    }

    //摸解のほうがかなりシンプルな書き方してた……ごり押ししすぎたな……