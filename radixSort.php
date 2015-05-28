<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
// Works well with strings or fixed numbers like SSN or phone numbers

function radixSort($array)
{
  $n = count($array);
  $indexDigits = strlen($array[0]);
  for ($index = $indexDigits-1; $index >=0; $index--) { 
    for($j=0;$j<$n; $j++)
    {
      $min = $j;
      for($k=$j+1; $k<$n; $k++)
      {
        if (substr($array[$k],$index,$index+1)<substr($array[$min],$index,$index+1))
        {
          $min = $k;
        }
      }
      $temp = $array[$j];
      $array[$j] = $array[$min];
      $array[$min] = $temp;
    }
    

  }
  return $array;
}



$test = array();
for($k=0; $k<100; $k++)
{
array_push($test,rand(100,999));
}

$time_start = microtime_float();
var_dump(radixSort($test));
$time_end = microtime_float();

$time = $time_end - $time_start;
echo "It took ". $time. " seconds";

?>