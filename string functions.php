Problem statement
Perform string function
Source code
<html>
<body>
<?php
 $str="Hello world!";
 echo count_chars($str,3);
 echo "<br>";
 print_r(str_split("Hello"));
 echo "<br>";
 echo str_repeat("Wow",13);
 echo "<br>";
 echo str_replace("World","Peter","Hello World !");
 echo "<br>";
 echo strcmp("Hello world !","Hello World !");
 echo "<br>";
 echo strlen("Hello");
 echo "<br>";
 echo strncmp("Hello World !","Hello earth!",6);
 echo "<br>";
 echo strrev("Hello world !");
 echo "<br>";
 echo strripos("I Love php, I Love php tool", "PHP");
 echo "<br>";
 echo strpos("my love php , i love php tool","PHP");
 echo "<br>";
Web development using PHP PHP198922
Information technology Engineering Department, S. B. M. Polytechnic, Mumbai
18 | P a g e
 echo strtolower("HELLO WORLD");
 echo "<br>";
 echo strtoupper("hello world");
 echo "<br>";
 echo substr("Hello world",6);
 echo "<br>";
 echo substr_count("Hello world. The world is nice","world");
 echo "<br>";
 echo substr_compare("Hello world","Hello world",0);
 echo "<br>";
 echo substr_replace("Hello","world",0);
 echo "<br>";
 $str="Hello World!";
 echo $str."<br>";
 echo "<br>";
 echo trim($str,"Hed!");
 echo "<br>";
 echo ucfirst("hello world!");
 echo "<br>";
?>
</body>
</htm