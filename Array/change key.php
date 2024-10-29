Perform array_change_key_case()
Sample source code
<!DOCTYPE html>
<html>
<body>
<?php
echo"array_change_key_case() function<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
?>
</body>
</html>