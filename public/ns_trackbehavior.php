<?php
	//
	include "ns_include.php";
	// we must insert our new project accordingly
	$table = "behaviors";
	//
	//
	$p_email = $_SESSION['loggedinEmail'];
	$p_behavior = $_POST['beh'];
	$p_scope = $_POST['sco'];
	$p_value = $_POST['val'];
	$p_epoch = time();
	//
	//
	$query = "INSERT INTO ".$table." (useremail, behavior, scope, value, epoch) VALUES ('$p_email','$p_behavior','$p_scope','$p_value','$p_epoch')";
	$result = mysql_query($query);
	$numRows = mysql_affected_rows();
	if ($numRows == 1){
		// we have a success, let's echo the new page id! :)
		echo mysql_insert_id();
	}else{
		// we have a failure
		echo	"error";
	}
	//
	mysql_close();

?>