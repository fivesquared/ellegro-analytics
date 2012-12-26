<?php
	//
	include "ns_include.php";
	// we must insert our new project accordingly
	$table = "courserandomizer";
	//
	// let's get the latest course
	$query = "SELECT latestrequestcourse FROM ".$table." WHERE id=1";
	//
	$result = mysql_query($query);
	//
	$latestCourse = "";
	//
	while ($row = mysql_fetch_array($result)){
		$latestCourse = $row['latestrequestcourse'];
	}
	if ($latestCourse == "CourseA"){
		$latestCourse = "CourseB";
	}else{
		$latestCourse = "CourseA";
	}
	// update the system and the time stamp
	$query = "UPDATE ".$table." SET latestrequestcourse='$latestCourse' WHERE id = 1";
	$result = mysql_query($query);
	//
	$numRows = mysql_affected_rows();
	if ($numRows == 1){
		// we have a success
		echo	$latestCourse;
	}else{
		// we have a failures
		echo	"-1: error!";
	}
	//
	mysql_close();
	//

?>