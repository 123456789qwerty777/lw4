<?php
function mostRecent(string $text):string
{
    $text = strtolower($text);
    $words = explode(' ', $text);
    $wordCount = array_count_values($words);
    $mostFrequentWord = '';
    $maxCount = 0;
    foreach ($wordCount as $word => $count) {
        if ($count > $maxCount) {
            $maxCount = $count;
            $mostFrequentWord = $word;
        }
    }
    return $mostFrequentWord;
}
$text = readline("Введите текст: ");
echo mostRecent($text);
