﻿<?php
	//
	include "ns_include.php";
	// we must insert our new project accordingly
	$table = "behaviors";
	//
	$p_useremail = $_SESSION['loggedinEmail'];
	// let's get the latest course
	$query = "SELECT useremail FROM ".$table." WHERE useremail='$p_useremail' AND behavior='course finished'";
	//
	$result = mysql_query($query);
	//
	$courseDone = false;
	//
	if ($row = mysql_fetch_array($result)){
		header('Location: alreadyParticipated.html');
	}
	//
	mysql_close();
	//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>CourseA</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css" media="screen">
		html, body { height:100%; background-color: #ffffff;}
		body { margin:0; padding:0; overflow:hidden; }
		#flashContent { width:100%; height:100%; }
		</style>
	</head>
	<body>
		<div align="center">
			<div id="flashContent">
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="995" height="658" id="CourseA" align="middle">
					<param name="movie" value="CourseA.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="always" />
					<!--[if !IE]>-->
					<object type="application/x-shockwave-flash" data="CourseA.swf" width="995" height="658">
						<param name="movie" value="CourseA.swf" />
						<param name="quality" value="high" />
						<param name="bgcolor" value="#ffffff" />
						<param name="play" value="true" />
						<param name="loop" value="true" />
						<param name="wmode" value="window" />
						<param name="scale" value="showall" />
						<param name="menu" value="true" />
						<param name="devicefont" value="false" />
						<param name="salign" value="" />
						<param name="allowScriptAccess" value="always" />
					<!--<![endif]-->
						<a href="http://www.adobe.com/go/getflash">
							<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
						</a>
					<!--[if !IE]>-->
					</object>
					<!--<![endif]-->
				</object>
			</div>
		</div>
	</body>
</html>
