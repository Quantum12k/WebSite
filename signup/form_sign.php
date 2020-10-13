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
				<div class="container">
					New user registration
					<div class="float-right">
						<div class="row">
							<a href="http://localhost/WebSite/index.php" class="text-light"> Back to main page </a>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-lg rounded mx-auto" style="width: 95%;">
				<div class="container">
					<form name="sign" action="welcome.php" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">@</span>
								</div>
								<input type="text" class="form-control" name="username">
							</div>
						</div>
						<div class="form-group">
							<label for="user_email">Email address</label>
							<input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" name="user_email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="pass1">Password</label>
							<input type="password" class="form-control" id="pass1" name="pass1">
						</div>
						<div class="form-group">
							<label for="pass2">Confirm password</label>
							<input type="password" class="form-control" id="pass2" name="pass2">
						</div>
						
						<br></br>
						<label>Personal information</label>
						<br></br>
						<div class="form-row">
							<div class="col">
								<input type="text" class="form-control" placeholder="First name" id="first_name" name="first_name">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="Last name" id="second_name" name="second_name">
							</div>
						</div>
						<br></br>
						<div class="form-group row">
							<label for="inputDate" class="col-sm-2 col-form-label">Birth date</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="date_input_field">🕑</span>
									</div>
									<input type="date" class="form-control" name="date">
								</div>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="inputDate" class="col-sm-2 col-form-label">Gender</label>
							<div class="form-group col-md-4">
								<select id="gender" class="form-control" name="gender">
									<option selected>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
						<button type="submit" class="btn btn-primary" name="submit" value="Submit Data">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>