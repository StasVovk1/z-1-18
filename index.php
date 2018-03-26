<?php 
$N = 220;
$M = 284;
$answer = 'недружелюбные';

echo 'Исходные данные N: '.$N.'; M:'.$M.';';
$divider_1 = numberOfDividers($N);
$divider_2 = numberOfDividers($M);
$summ_1 = $divider_1['summ'];
$summ_2 = $divider_2['summ'];

if (($summ_1 == $M) && ($summ_2 == $N)){
    $answer = 'дружелюбные';
}

echo '<br>Сумма делителей числа: '.$summ_1.'; Делители числа N: '.json_encode($divider_1['itog']);
echo '<br>Сумма делителей числа: '.$summ_2.'; Делители числа N: '.json_encode($divider_2['itog']);
echo '<br>Ответ: '.$answer;


// кол-во делителей числа
function numberOfDividers ($number){
    $answer = array(
        'summ'  => 0,
        'itog' => []
    );
    $summ = 0;
    $mass = [];
    for ($i = 1; $i < $number; $i++){
        if ($number % $i == 0){
            $mass[] = $i;
            $summ += $i;
        }
    }
    if ($mass){
        $answer['summ'] = $summ;
        $answer['itog'] = $mass;                
    }      
    return $answer;
}

function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}


?>