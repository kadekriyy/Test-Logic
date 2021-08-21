<?php
$n1 = 0;
$n2 = 1;
$next;

$num = [17, 4, 3];

$sumNum = array_sum($num);
$febonaci = [0, 1];

for ($i=0; $i < $sumNum*2; $i++) { 
    $next = $n1 + $n2;
    array_push($febonaci,$next);
    $n1 = $n2;
    $n2 = $next;
}


// $febonaci = [0, 1, 1, 2, 3, 5, 8, 13, 21];
$closet = $febonaci[0];

for ($i = 0; $i < count($febonaci); $i++) {
    if (abs($febonaci[$i] - array_sum($num)) < abs($closet - array_sum($num))) {
        $closet = $febonaci[$i];
    }
}

print_r($closet);