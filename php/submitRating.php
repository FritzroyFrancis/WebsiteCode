<?php
	$ratingChange = $_POST['ratingChange'];
	$title = $_POST['posttitle'];
	$up = $down = 0;	
	
	$link = mysql_connect('mymanflycom.fatcowmysql.com', 'mymanfly', '********'); 
	if (!$link)
	{ 
	  	die('Could not connect'); 
	}						
	mysql_select_db("mymanfly_posts");

	$query = mysql_query("SELECT * FROM posts WHERE Title='" . $title . "'",$link);	
	while($row = mysql_fetch_array($query))
	{	
		$down = $row['thumbsdown'];
		$up = $row['thumbsup'];
	
		if ($ratingChange < 0) $down += 1;
		else $up += 1;
	}		
	
	$rating = $down * ($down / ($down + $up));	
	$query2 = mysql_query("UPDATE posts SET thumbsup=" . $up . ", thumbsdown=" . $down . ", rating=" . $rating . " WHERE Title='" . $title . "'",$link);		
	$text = "Ups: " . $up . ", Downs: " . $down . ", Rating: " . $rating;	
	echo $text;
?>