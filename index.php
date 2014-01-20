<!DOCTYPE HTML>

<head>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<title>Music Organizer</title>
</head>

<body>

<?php

	//get our db connection script
	require '../../dbconnect.php';
	

?>


<div id = "container">

	<form id="searchForm">
		<input type = "text" id = "search">
		<input type = "submit" id = "submit">
	</form>

<?php

	//sanitizing goes here
	

	//create the query
	$query = "SELECT songName, composer FROM Songs WHERE songName=?"


	//run the query
?>


</div>

</body>

</html>
