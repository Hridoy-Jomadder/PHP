<?php

//read the file in array
$lines = file("./data.txt");

echo"<pre>";
print_r($lines);
echo"</pre>";
//https://www.php.net/manual/en/function.fopen.php