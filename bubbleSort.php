<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function bubbleSort($array)
{
  $n = count($array);
  $swap = true;
  while($swap)
  {$swap= false;

    for ($i=0; $i<$n-1; $i++)
    {
      if ($array[$i+1]<$array[$i])
      {
        $temp = $array[$i];
        $array[$i]=$array[$i+1];
        $array[$i+1] = $temp;
        $swap=true;
      }
    }
  }
  return $array;
}


$test = array();

for($k=0; $k<100; $k++)
{
  array_push($test,rand(0,10000));
}

$time_start = microtime_float();
var_dump (bubbleSort($test));
$time_end = microtime_float();

$time = $time_end - $time_start;
echo "It took ". $time. " seconds";

?>