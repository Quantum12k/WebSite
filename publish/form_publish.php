<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>News site: publishing</title>
		<link href="css/style_reg.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom shadow-sm rounded">
				<div class="container">
					Publish your article here
					<div class="float-right">
						<div class="row">
							<a href="http://localhost/WebSite/index.php" class="text-light"> Back to main page </a>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-lg rounded mx-auto" style="width: 95%;">
				<div class="container">
					<form name="sign" action="publish_created.php" method="post">
						<div class="form-group">
							<label for="username">Name</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="name" pattern="[A-Za-z\s]{1,25}" placeholder="From 1 to 25 symbols" required>
							</div>
						</div>
						<div class="form-group">
							<label for="username">Author</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="author" pattern="[A-Za-z\s]{1,25}" placeholder="From 1 to 25 symbols" required>
							</div>
						</div>
						<div class="form-group ">
							<label for="username">Text</label>
							<div class="input-group mb-3">
								<textarea class="form-control" style="height:250px" name="text_article" required></textarea>
							</div>
						</div>
						
						<?php 

							$date = date('m/d/Y h:i:s a', time());
							$_POST['publish_date'] = $date;

						?>

						<button type="submit" class="btn btn-primary" name="submit" value="Submit Data">Publish</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>