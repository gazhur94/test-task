<?php 

$file = fopen("numbers.txt", "w");

for ($i=0; $i<1000000; $i++)
{
    $number = rand(-1000, 10000);
    fwrite($file,$number);
    fwrite($file, " ");
     
}
fclose($file);
echo 'done';