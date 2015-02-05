
<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

?>

<?php

$object;

if (!empty($_POST)){

	$object["Type"] = "POST";

	foreach($_POST as $key => $value){

		$object["parameters"][$key] = $value;

	}


}

else if(!empty($_GET)){

	$object["Type"] = "GET";

	foreach($_GET as $key => $value){

		$object["parameters"][$key] = $value;

	}

}

echo json_encode($object);

?>