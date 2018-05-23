<?php 

$file = fopen("numbers.txt", "w");

for ($i=0; $i<10000; $i++)
{
    $number = rand(-10000, 10000);
    fwrite($file,$number);
    fwrite($file, " ");
     
}
fclose($file);
echo 'done';