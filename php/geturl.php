<?php
	$title = $_POST['posttitle'];
	$link = mysql_connect('mymanflycom.fatcowmysql.com', 'mymanfly', '********'); 
	if (!$link)
	{ 
	  	die('Could not connect'); 
	}						
	mysql_select_db("mymanfly_posts");
	
	$query = mysql_query("SELECT * FROM posts WHERE Title='" . $title . "'",$link);
		
	while($row = mysql_fetch_array($query))
	{
		echo $row['url'];
	}	
?>