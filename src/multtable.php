<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PHP Demo</title>
</head>
<body>

<?php
echo "hello world <br>";
foreach($_GET as $key => $value){

	echo "$key is $value <br>";

}

$minMd;
$maxMd;
$minMr;
$maxMr;

if(isset($_GET['min-multiplicand'])){

	$minMd = $_GET['min-multiplicand'];

}

if(isset($_GET['max-multiplicand'])){

	$maxMd = $_GET['max-multiplicand'];

}


if(isset($_GET['min-multiplier'])){

	$minMr = $_GET['min-multiplier'];

}

if(isset($_GET['max-multiplier'])){

	$maxMr = $_GET['max-multiplier'];

}

echo "$minMd <br>";

echo "$maxMd <br>";

echo "$minMr <br>";

echo "$maxMr <br>";

?>