<?php

$numbers = file('numbers.txt');

$numbers = explode(" ", $numbers[0]);

//var_dump($numbers);


function maxValue($numbers)
{
    $min = $numbers[0];

    for ($i=1, $count=count($numbers); $i<$count; $i++)
    {
        if ($numbers[$i] > $max)
        {
            $max = $numbers[$i];
        }
    }
    return $max;
}

function minValue($numbers)
{
    $min = $numbers[0];

    for ($i=1, $count=count($numbers); $i<$count; $i++)
    {
        if ($numbers[$i] < $min)
        {
            $min = $numbers[$i];
        }
    }
    return $min;
}

function averageValue($numbers)
{
    $sum = NULL;
    $count = count($numbers);

    for ($i=0; $i<$count; $i++)
    {
        $sum += $numbers[$i];
    }
    $average = $sum / $count;
    return $average;
}



$max = maxValue($numbers);
$min = minValue($numbers);
$average = averageValue($numbers);

echo 'Максимальне: ' . $max . '<br>' .
     'Мінімальне: '  . $min . '<br>' .
     'Середнє: ' . $average ;