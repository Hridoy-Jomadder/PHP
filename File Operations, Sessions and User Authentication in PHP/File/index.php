<?php 
/*
echo"Hi, Hridoy";
echo"<br/>";
echo"Todays date is ".date('d-m-y');

//Output
Hi, Hridoy
Todays date is 16-10-23
*/
/*===================================================*/
// $newName = "Tuba";
// file_put_contents("./data.txt", $newName);

// $data = file_get_contents("./data.txt");
// echo nl2br($data);

/*===================================================*/
$data = file_get_contents("./data.txt");
//$data = file_get_contents("http://localhost:8000/index.php");
echo nl2br($data);