<?php
    echo "何月ですか：";
    $month = trim(fgets(STDIN, 4096));

//if文
    // if($month>=1 && $month <= 12){
    //     if($month == 12 || ($month >= 1 && $month < 3)){
    //         echo "冬";
    //     } elseif($month >= 3 && $month < 6){
    //         echo "春";
    //     } elseif($month >= 6 && $month < 9){
    //         echo "夏";
    //     } elseif($month >= 9 && $month <= 11){
    //         echo "秋";
    //     }
    // } else {
    //    echo "そんな月はありません。";
    // }

//switch
    switch ($month){
        case 1: echo "冬"; break;
        case 2: echo "冬"; break;
        case 3: echo "春"; break;
        case 4: echo "春"; break;
        case 5: echo "春"; break;
        case 6: echo "夏"; break;
        case 7: echo "夏"; break;
        case 8: echo "夏"; break;
        case 9: echo "秋"; break;
        case 10: echo "秋"; break;
        case 11: echo "秋"; break;
        case 12: echo "冬"; break;
        default: echo "そんな月はありません。"; break;
    }