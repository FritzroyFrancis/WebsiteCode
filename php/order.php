<?php
	$cut = $_POST['title'];
	$link = mysql_connect('mymanflycom.fatcowmysql.com', 'mymanfly', '********'); 
	if (!$link)
	{ 
	   	die('Could not connect: ' . mysql_error()); 
	}
						
	mysql_select_db("mymanfly_posts");
	$search = "SELECT * FROM posts ORDER by " . $cut;
	$query = mysql_query($search,$link);
	
	/*echo "<ul id='BlogList'>";*/					
	while($row = mysql_fetch_array($query))
	{
		echo "<li><a>" . $row['Title'] . "</a></li>";
	}
	/*echo "</ul>";*/
	
	mysql_close($link);
?>