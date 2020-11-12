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
		
		$query_text = "SELECT * FROM items order by publish_date desc";
		$q = mysql_query($query_text);

		echo '
            <div class="overflow-auto">
                <div class="jumbotron jumbotron-fluid rounded">
                    <div class="container">
                        <h1 class="display-4">News from our site</h1>
                        <p class="lead">Selected articles from our authors</p>
                        <hr class="my-4">
		';

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

        echo '
                    </div>
                </div>
            </div>
		';
	}
?>