<?php 

$file = fopen("numbers.txt", "a");
$size = 10000000;
for ($i=0; $i<$size; $i++)
{
    $number = rand(-1000, 10000);
    fwrite($file,$number);
    if ($i != $size)
    {
        fwrite($file, " ");
    }
}
fclose($file);
echo 'done';