<?php header('Refresh: 11; URL=http://localhost/WebSite/index.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Mailing sub done</title>
		<link href="css/style_mail.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom shadow-sm rounded">
				<div class="container">
					Thanks for subscribing!
					<div class="float-right">
						<div class="row">
							<a href="http://localhost/WebSite/index.php" class="text-light"> Back to main page </a>
						</div>
					</div>
				</div>
			</div>
			<div class="progress" style="width: 100%; text-align: center;">
				<div class="progress-bar progress-bar-striped bg-info progress-bar-animated" id="prog_bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
			</div>
			<script src="progress_bar.js"></script>
			<br></br>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-lg rounded mx-auto" style="width: 95%;">
				<div class="container">
					<form>
						You subbed
						<?php echo strtolower($_POST['delay']); ?> for:
						<br></br>
						<ul class="list-group">
							
							<?php
							foreach($_REQUEST as $key => $value) {
								if (strpos($key, '_box') !== false) {
								echo '<li class="list-group-item">'.strtoupper(str_replace("_box", "",$key)).'</li>';
								}
							}
							?>
							
						</ul>
						<br></br>
						Entered e-mail: <?php echo strtolower($_POST['user_email']); ?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>