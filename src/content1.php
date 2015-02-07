<?php	
ob_start();

session_start();

if (isset($_GET['check']) && $_GET['check'] == 'true'){

	$_SESSION['check'] = true;

}

if ((isset($_GET['action']) && $_GET['action'] == 'logout') || !$_SESSION['check']){

	$_SESSION = array();

	session_destroy();

	$redirect = "http://web.engr.oregonstate.edu/~jurczakn/login.php";

	header("Location:{$redirect}", false);

}	

if ((!isset($_POST['username']) || $_POST['username'] == "") && !isset($_SESSION['username'])){

	echo "A username must be entered. Click ";

	echo '<a href="http://web.engr.oregonstate.edu/~jurczakn/login.php">here</a>';

	echo " to return to the login screen.";

}

else {

	if (!isset($_SESSION['username'])){

		$_SESSION['username'] = $_POST['username'];

	}


	if (!isset($_SESSION['visits'])){

		$_SESSION['visits'] = 0;

	}

	else $_SESSION['visits']++;

	echo "Hello $_POST[username] you have visited this page $_SESSION[visits] times before.  Click ";

	echo '<a href="http://web.engr.oregonstate.edu/~jurczakn/content1.php?action=logout">here</a>';

	echo " to logout.";

	echo '<br><a href="http://web.engr.oregonstate.edu/~jurczakn/content2.php">Content2</a>';

}	

?>