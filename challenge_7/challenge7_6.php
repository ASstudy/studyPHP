<?php
    do{
        echo "何月ですか(1～12)：";
        $month = (int)trim(fgets(STDIN,4096));
    } while ($month < 1 || $month > 12);
    echo "その月の季節は".printSeason($month)."です。";

    function printSeason($m){
        //表示が下のコメントのようになってしまう……
        // switch ($m) {
        //     case 3: case 4: case 5:
        //         echo "春";
        //         break;
        //     case 6: case 7: case 8:
        //         echo "夏";
        //         break;
        //     case 9: case 10: case 11:
        //         echo  "秋";
        //         break;
        //     case 12: case 1: case 2:
        //         echo "冬";
        //         break;
        //     default:
        //         break;
        // }
        if($m === 3 || $m === 4 ||$m === 5){
            $season = "春";
        } elseif($m === 6 || $m === 7 ||$m === 8){
            $season = "夏";
        }
         elseif($m === 9 || $m === 10 ||$m === 11){
            $season = "秋";
        }
         elseif($m === 12 || $m === 1 ||$m === 2){
            $season = "冬";
        } 
        return $season;
    }

    //問題文のほうは「1～12以外の値の場合何も表示しないこと」と指示があるのに、回答では1～12以外が入力できないようになっている
    //いいの？
    //switch文使ったら表示がおかしい……「冬その月の季節はです。」と順序がおかしくなる
    //echo で返すのが悪いのかなぁ


    