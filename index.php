<?php

class numbers 
{
    public $count;
    public $fileName;
    public $max;
    public $min;
    public $average;
    
    public function __construct(string $file)
    {
        $this->fileName = $file;
        $this->count = count($this->getArrayOfNumbers());
    }

    public function maxValue()
    {
        $numbers = $this->getArrayOfNumbers();
        $max = $numbers[$this->count -1];
        //var_dump($this->numbers);
        for ($i=$this->count-1;  $i>0; $i--)
        {
            if ($numbers[$i] > $max)
            {
                $max = $numbers[$i];
                //var_dump($max);
            }
        }
       
        return $this->max = $max;
    }

    public function minValue()
    {
        $numbers = $this->getArrayOfNumbers();
        $min = $numbers[$this->count -1];

        for ($i=$this->count-1;  $i>0; $i--)
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
        $sum = 0;
        $count = $this->count;

        for ($i=$count-1; $i>0; $i--)
        {  
            $sum += $numbers[$i];
        }
        $average = $sum / $count;
        return $this->average = $average;
    }

    public function setAllValues()
    {
        $numbers = $this->getArrayOfNumbers();
        
        $lastNumber = $numbers[$this->count - 10];
        $max = $lastNumber;
        $min = $lastNumber;
        $sum = 0;
        $count = $this->count;
        
        for ($i=$this->count-1;  $i>0; $i--)
        {
            if ($numbers[$i] > $max)
            {
                $max = $numbers[$i];
            }

            if ($numbers[$i] < $min)
            {
                $min = $numbers[$i];
            }
            if (is_numeric($numbers[$i]))
            {
                $sum += $numbers[$i];
            }
           
            
        }
        $average = $sum / $count;

        $this->max = $max;
        $this->min = $min;
        $this->average = $average;
        return $this;
    }

    private function getArrayOfNumbers()
    {
        $numbers = explode(" ", file_get_contents("numbers.txt"));
        return $numbers;
    }
}

// $totalTime = 0;
// for ($i=0; $i<10; $i++)
// {
//     $start = microtime(true); 
//     $numbers = new numbers('numbers.txt');
//     $numbers->averageValue();
//     $numbers->minValue();
//     $numbers->maxValue();
//     $time = microtime(true) - $start;
//     $totalTime += $time;
// }
// $averageTime = $totalTime / 10;
// echo '<br>' . 'Середній час виконання для хренового методу: '.$averageTime.' сек.';


//$totalTime = 0;
// for ($i=0; $i<10; $i++)
// {
    $start = microtime(true); 
    $numbers = new numbers('numbers.txt');
    $numbers->setAllValues();
    $time = microtime(true) - $start;
   // $totalTime += $time;
// }
$averageTime = $totalTime / 10;
echo '<br>' . 'Середній час виконання для ахрєнєнного методу: '.$time.' сек.' . '<br>';
var_dump($numbers);






// $numbers = new numbers('numbers.txt');
// $numbers->averageValue();
// $numbers->minValue();
// $numbers->maxValue();
// var_dump($numbers);
