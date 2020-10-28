<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$link = @mysql_connect($host, $user, $pass);

	if (!$link)
	{
		echo 'unable to connect to db server';
	}
	else
	{
		generateMain();
	}

	mysql_close($link);


	function generateMain()
	{
		$db_name = "tables";
		if (!mysql_select_db($db_name))
		{
			echo 'unable to connect to database '.$db_name;
			return;
		}
		
		$query_text = "SELECT * FROM items";
		$q = mysql_query($query_text);

		for ($i=0; $i<mysql_num_rows($q); $i++)
		{	
			$f = mysql_fetch_assoc($q);

			echo '
			<div class="card">
			 	<div class="card-body">
				    <h5 class="card-title">'.$f['name'].' by '.$f['author'].' </h5>
				    <p class="card-text">'.$f['text_article'].'</p>
				    <p class="card-text"><small class="text-muted">Uploaded: '.$f['publish_date'].'</small></p>
			  	</div>
			</div>
			';
		}
	}
?>