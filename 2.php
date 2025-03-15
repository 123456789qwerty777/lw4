<?php
function findPerfectNumbers(array $array):array
{
    $perfectNumbers = [];
    foreach ($array as $number) {
        if ($number > 0) {
            $sumOfDivisors = 0;
            for ($i = 1; $i <= $number / 2; $i++) {
                if ($number % $i == 0) {
                    $sumOfDivisors += $i;
                }
            }
            if ($sumOfDivisors === $number) {
                $perfectNumbers[] = $number;
            }
        }
    }
    return $perfectNumbers;
}
$array = [6, 28, 11, 496, 8128, 9, 42, 435, 632, 51, 5, 2, 5, 1, 33550336];
$perfectNumbers = findPerfectNumbers($array);
echo implode(", ", $perfectNumbers) . "\n";
