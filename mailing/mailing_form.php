<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Mailing subscription</title>
		<link href="css/style_mail.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom shadow-sm rounded">
				<div class="container">
					Subscribing for some news?
					<div class="float-right">
						<div class="row">
							<a href="http://localhost/WebSite/index.php" class="text-light"> Back to main page </a>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-lg rounded mx-auto" style="width: 95%;">
				<div class="container">
					<form name="sign" action="sub_done.php" method="post">
						<div class="form-group">
							<label for="user_email">Email address</label>
							<input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" name="user_email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						
						<br></br>
						<label>Personal preferences</label>
						<br></br>
						
						<div class="form-group row">
							<label for="inputDate" class="col-sm-2 col-form-label">News recieve delay</label>
							<div class="form-group col-md-4">
								<select id="gender" class="form-control" name="delay">
									<option selected>Daily</option>
									<option>Weekly</option>
									<option>Monthly</option>
								</select>
							</div>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<div class="col">
										Kazan news
									</div>
									<input type="checkbox" name="kazan_box">
								</div>
								<div class="input-group-text">
									<div class="col">
										Tech news
									</div>
									<input type="checkbox" name="tech_box">
								</div>
								<div class="input-group-text">
									<div class="col">
										Sport news
									</div>
									<input type="checkbox" name="sport_box">
								</div>
								<div class="input-group-text">
									<div class="col">
										Science news
									</div>
									<input type="checkbox" name="science_box">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary" name="submit" value="Submit Data">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>