<?php
    echo "英語の曜日名を小文字で入力してください。\n";
    $week = ["日", "月", "火", "水", "木", "金", "土"];
    $test = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
    $last = -1;
    do{
        do{
            $day = mt_rand(1, 7);
        } while ($last === $day);
        $last = $day;
            do{
                echo $week[$day - 1]."曜日：";
                $ans = trim(fgets(STDIN, 4096));

                if($ans == $test[$day - 1]){
                    echo "正解です。\n";
                    break;
                } else {
                    echo "違います。\n";
                }
                do{
                    echo "どうしますか？1…再入力 / 0…正解を見る：";
                    $action = (int)trim(fgets(STDIN, 4096));
                } while ($action !== 0 && $action !== 1);
                if($action === 0){
                    echo $week[$day - 1]."曜日は".'"'.$test[$day - 1].'"'."です。\n";
                }
                
            }while ($action === 1);
        echo "もう一度？1…Yes / 0…No：";
        $loop = (int)trim(fgets(STDIN, 4096));
    } while ($loop === 1);

    //追加機能を何も考えずに見まねで追加するのはよくないですね……
    