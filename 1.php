<?php
function alphabeticalOrder(string $str):string
{
    $length = strlen($str);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - 1 - $i; $j++) {
            if ($str[$j] > $str[$j + 1]) {
                $temp = $str[$j];
                $str[$j] = $str[$j + 1];
                $str[$j + 1] = $temp;
            }
        }
    }
    return $str;
}
$string = readline("Введите строку: ");
$editstring = alphabeticalOrder($string);
echo $editstring;
