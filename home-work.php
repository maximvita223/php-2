<?php

use function PHPSTORM_META\type;

function sum(int $num1, int $num2) {
    return $num1 + $num2;
}
function diff(int $num1, int $num2) {
    return $num1 - $num2;
}
function mult(int $num1, int $num2) {
    return $num1 * $num2;
}
function deci(int $num1, int $num2) {
    return $num1 / $num2;
}

function mathOperation(int $num1, int $num2, string $name){
    switch ($name) {
        case 'sum':
            return sum($num1, $num2);
            break;
        case 'diff':
            return diff($num1, $num2);
            break;
        case 'mult':
            return mult($num1, $num2);
            break;
        case 'deci':
            return deci($num1, $num2);
            break;
        
        default:
            # code...
            break;
    }
}


// echo mathOperation(4, 6, 'mult') . "\r\n"




// $regions = ["Московская область" => array('Москва','Не москва', 'Очень не Москва'),
// "Ленинградская область" => array('Санкт Петербург','Вологда','Очень Су')];
// echo count($regions);
// foreach ($regions as $region => $cities) {
//     echo "-{$region}:\n";
//     foreach ($cities as $city) {
//         echo "---{$city}\n";
//     }

// }



$rus = "а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я";
$rus1 = explode(' ', $rus);
// foreach ($rus1 as $value) {
//     echo "{$value}\n";
// }
$englik = "a b v g d e ye zh z i iy k l m n o p r s t u ph h ce ch sh shyi . iui <= ' ey yu ya";
$eng1 = explode(' ', $englik);

// foreach ($eng1 as $value) {
//     echo "{$value}\n";
// }
$result = [];
for ($i=0; $i < count($rus1); $i++) { 
    $result[$rus1[$i]] = $eng1[$i]; 
}
// foreach ($result as $value => $b) {
//     echo "{$value} {$b}\n";
// }


function power(int $num, int $pow){
    if ($pow == 0) {
        return 1;
    }else if($pow > 0){
        return $num * power($num, $pow - 1);
    }else{
        return 1 / power($num, -$pow); 
    }
}

echo power(2,5);
?>
// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php