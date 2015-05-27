<?php

// microtime()
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}


function selectionSort($array)
{ $arrLength = count($array);
  for($i=0; $i<($arrLength)/2; $i++)
  {
    $min = $i;
    $max = $arrLength-1-$i;
    for($j=($i+1); $j<count($array); $j++)
    {
      if($array[$j]<$array[$min])
      {
        $min = $j;
      }
      if($array[$j]>$array[$max])
      {
        $max = $j;
      }
    }
    $temp = $array[$i];
    $array[$i] = $array[$min];
    $array[$min] = $temp;
    $temp1 = $array[$arrLength-1-$i];
    $array[$arrLength-1-$i] = $array[$max];
    $array[$max] = $temp1;

  }
  return $array;
}


$test = array();

for($k=0; $k<100; $k++)
{
  array_push($test,rand(0,10000));
}

$time_start = microtime_float();
var_dump (selectionSort($test));

$time_end = microtime_float();
$time = $time_end - $time_start;
echo "It took ". $time. "seconds";
?>