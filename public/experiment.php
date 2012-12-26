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
	}else{
		// we have a failures
		$latestCourse = "CourseA";
	}
	//
	mysql_close();
	//
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>The Context Experiment</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body style="background: url(images/background.jpg) no-repeat center center fixed; 	-webkit-background-size: cover;	-moz-background-size: cover; -o-background-size: cover; background-size: cover;">>

  <div class="row">
	<div class="twelve columns">
		<div class="panel radius">
			<h3>welcome, john doe</h3>
			<div align="center"><a href="<?php echo $latestCourse; ?>.html"><img src="images/course_titler.png"></a></div>
			<br/><br/>
		</div>
	</div>
  </div>

  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 
  
</body>
</html>
