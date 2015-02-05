<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PHP Demo</title>
</head>
<body>

<?php

$minMd;
$maxMd;
$minMr;
$maxMr;
$set = true;

if(isset($_GET['min-multiplicand'])){

	$minMd = $_GET['min-multiplicand'];

}

else{

	echo "Missing parameter min-multiplicand<br>";

	$set = false;

}

if(isset($_GET['max-multiplicand'])){

	$maxMd = $_GET['max-multiplicand'];

}

else{

	echo "Missing parameter max-multiplicand<br>";

	$set = false;

}


if(isset($_GET['min-multiplier'])){

	$minMr = $_GET['min-multiplier'];

}

else{

	echo "Missing parameter min-multiplier<br>";

	$set = false;

}

if(isset($_GET['max-multiplier'])){

	$maxMr = $_GET['max-multiplier'];

}

else{

	echo "Missing parameter max-multiplier<br>";

	$set = false;

}


if (!is_numeric($minMd)){

	echo "min-multiplicand must be an integer<br>";

	$set = false;

}

if (!is_numeric($maxMd)){

	echo "max-multiplicand must be an integer<br>";

	$set = false;

}

if (!is_numeric($minMr)){

	echo "min-multiplier must be an integer<br>";

	$set = false;

}

if (!is_numeric($maxMr)){

	echo "max-multiplier must be an integer<br>";

	$set = false;

}

if ($minMr > $maxMr){

	echo "Minimum multiplier larger than maximum.<br>";

	$set = false;

}

if ($minMd > $maxMd){

	echo "Minimum multiplicand larger than maximum.<br>";

	$set = false;

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>multtable</title>
  </head>
  <body>
    <section>

<?php

if($set){

    echo "<table border = 1px solid black>
     		<caption>Multiplication Table</caption>
     		<thead>
		<tr> <th>";


	for ($i = $minMr; $i < $maxMr + 1; $i++){

	 	echo "<th> $i";

	}

	for ($i = $minMd; $i < $maxMd + 1; $i++){

		echo "<tr> <th> $i ";

		for ($k = $minMr; $k < $maxMr + 1; $k++){
		
			$j = $i * $k;	
	
			echo "<td> $j";

		}
	}
}
?>

      </table>
    </section>
  </body>
</html>
