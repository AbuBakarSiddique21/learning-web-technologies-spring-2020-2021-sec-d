<?php
$array=[[1,2,3,'A'],
[1,2,'B','C'],
[1,'D','E','F']];

for($i=0;$i<count($array);$i++)
{

for($j=0;$j<count($array)-$i;$j++)
{
  echo $array[$i][$j].' ';
}
echo '</br>';
}


$x=4;

for($i=0;$i<count($array);$i++)
{
$x-=1;
for($j=$x;$j<(count($array[$i]));$j++)
{
  echo $array[$i][$j].' ';
}
echo '</br>';
}
?>