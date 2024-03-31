<?php
$name = $_POST["name"];
$email = $_POST["email"];
$memo = $_POST["memo"];
$c = ",";
$str = $name.$c.$email.$c.$memo;
$file =fopen("data.csv","a");
fwrite($file,$str."\n");
fclose($file);

header("Location: index.php");
exit;

?>
