<?php

class numbers 
{
    public $count;
    
    public function __construct(string $file)
    {
        $this->fileName = $file;
        $this->count = count($this->getArrayOfNumbers());
    }

    public function maxValue()
    {
        $numbers = $this->getArrayOfNumbers();
        $max = $numbers[0];
        //var_dump($this->numbers);
        for ($i=1, $count=count($numbers); $i<$count; $i++)
        {
            if ($numbers[$i] > $max)
            {
                $max = $numbers[$i];
                //var_dump($max);
            }
        }
        //var_dump($max);
       
        return $this->max = $max;
    }

    public function minValue()
    {
        $numbers = $this->getArrayOfNumbers();
        $min = $numbers[0];

        for ($i=1, $count=count($numbers); $i<$count; $i++)
        {
            if ($numbers[$i] < $min)
            {
                $min = $numbers[$i];
            }
        }
        return $this->min = $min;
    }

    public function averageValue()
    {
        $numbers = $this->getArrayOfNumbers();
        $sum = NULL;
        $count = count($numbers);

        for ($i=0; $i<$count; $i++)
        {
            $sum += $numbers[$i];
        }
        $average = $sum / $count;
        return $this->average = $average;
    }

    private function getArrayOfNumbers()
    {
        $numbers = explode(" ", file_get_contents("numbers.txt"));
        return $numbers;
    }
}


$numbers = new numbers('numbers.txt');
$numbers->averageValue();
$numbers->minValue();
$numbers->maxValue();
var_dump($numbers);

