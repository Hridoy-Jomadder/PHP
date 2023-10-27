<?php
$fp = fopen("./data.txt", "r");
// while($line = fgets($fp)){
//     echo $line;
// echo"<br/>";
// }

$data = fgets($fp,5);
echo $data;