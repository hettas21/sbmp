<?php
$numbers=array(2,11,22,1,3);
sort($numbers);
echo "Ascending order<br>";
$clength=count($numbers);
for($x=0;$x<$clength;$x++)
{
echo $numbers[$x];
echo "<br>";
}
echo "Descending order<br>";
$clength=count($numbers);
rsort($numbers);
for($x=0;$x<$clength;$x++)
{
echo $numbers[$x];
echo "<br>";
}