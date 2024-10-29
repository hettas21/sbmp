<html>
<body>
<?php
echo "<br> Difference between two array;<br>";
$a1=array("a"=>"A1","b"=>"A2","c"=>"A3","d"=>"A4");
$a2=array("e"=>"A1","f"=>"A4","g"=>"A3");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br> Combining two arrays:<br>";
$fname=array("Rocha","Ashley","Basin");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);
?>
</body>