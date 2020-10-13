<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>News site: sign up</title>
		<link href="css/style_reg.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom shadow-sm rounded">
				<div class="container" style="text-align: center;">
					Thanks for signing on our site!
				</div>
			</div>
			<div class="d-flex flex-row flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-lg rounded mx-auto" style="width: 95%;">
				
				<form style="width: 100%">
					<div class="form-group">
						<label for="username">Your username was</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>
							<input type="text" class="form-control" name="username" placeholder="<?php echo $_POST['username'];	?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="user_email">Email address was</label>
						<input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" placeholder="<?php echo $_POST['user_email'];	?>" disabled="">
					</div>
					<div class="form-group">
						<label for="pass1">Password was</label>
						<input type="text" class="form-control" id="pass1" placeholder="<?php echo $_POST['pass1'];	?>" disabled>
					</div>
					<div class="form-group">
						<label for="pass2">Confirmed password was</label>
						<input type="text" class="form-control" id="pass2" placeholder="<?php echo $_POST['pass2'];	?>" disabled>
					</div>
					
					<br></br>
					<label>Personal information</label>
					<br></br>
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" placeholder="<?php echo $_POST['first_name'];	?>" id="first_name" disabled>
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="<?php echo $_POST['second_name'];	?>" id="second_name" disabled>
						</div>
					</div>
					<br></br>
					<div class="form-group row">
						<label for="inputDate" class="col-sm-2 col-form-label">Birth date</label>
						<div class="col">
							<input type="text" class="form-control" placeholder="<?php echo $_POST['date'];	?>" disabled>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="inputDate" class="col-sm-2 col-form-label">Gender</label>
						<div class="col">
							<input type="text" class="form-control" placeholder="<?php echo $_POST['gender'];?>" disabled>
						</div>
					</div>
					<div class="container" style="text-align: center;">
						<a href="http://localhost/WebSite/index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to main page</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>