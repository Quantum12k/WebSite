<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>News site: published</title>
		<link href="css/style_reg.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom shadow-sm rounded">
				<div class="container" style="text-align: center;">
					Thanks for publishing your article on our site!
				</div>
			</div>
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
					publishArticle();
				}

				mysql_close($link);

				function publishArticle()
				{
					$db_name = "tables";
					if (!mysql_select_db($db_name))
					{
						echo 'unable to connect to database '.$db_name;
						return;
					}

					$cur_date = date('Y-m-d', time());
					$query_text = 'INSERT INTO items (name,author,publish_date,text_article) VALUES ("'.$_POST["name"].'","'.$_POST["author"].'","'.$cur_date.'","'.$_POST["text_article"].'")';
					$q = mysql_query($query_text);
				}

			?>

			<div class="container" style="text-align: center;">
				<a href="http://localhost/WebSite/index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to main page</a>
			</div>
				</form>
			</div>
		</div>
	</body>
</html>