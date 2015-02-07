<?php

session_start();

if (!$_SESSION['check']){

	$_SESSION = array();

	session_destroy();

	$redirect = "http://web.engr.oregonstate.edu/~jurczakn/login.php";

	header("Location:{$redirect}", false);

}

echo '<a href="http://web.engr.oregonstate.edu/~jurczakn/content1.php">Content2</a>';

?>