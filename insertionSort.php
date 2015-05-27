<?php

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function insertionSort($array)
{$n = count($array);
  for($i = 1; $i<$n; $i++)
  {
    $temp = $array[$i];
    for($j=$i-1; $j>=0; $j--)
    {
      if($temp<$array[$j])
      {
        $array[$j+1]=$array[$j];
      }
      else
      {
        break;
      }
    }
    $array[$j+1] = $temp;
  }
  return $array;
}

$test = array();

for($k=0; $k<100; $k++)
{
  array_push($test,rand(0,10000));
}

$time_start = microtime_float();
var_dump (insertionSort($test));
$time_end = microtime_float();

$time = $time_end - $time_start;
echo "It took ". $time. " seconds";

?>