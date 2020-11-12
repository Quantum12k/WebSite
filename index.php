<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>News site</title>
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
			<!-- top menu -->
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-light border-bottom shadow-sm rounded">
				<div class="container">
					<div class="float-right">
						<div class="row">
							<div class="col">
								<div class="col-2"> <a href="#" class="text-light"> Login </a></div>
							</div>
							<div class="col">
								<div class="col-2"> <a href="signup/form_sign.php" class="text-light"> Signup </a></div>
							</div>
							<div class="col">
								<div class="col-2"> <a href="publish/form_publish.php" class="text-light"> Publish </a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-lg rounded">
				<div class="container">
					<?php require_once('generation/top_section_generator.php') ?>
				</div>
			</div>
			
			<!-- news cards -->
			<div class="container">
                <div class="row">

                </div>
				<div class="row">
					<div class="col-9">
						<?php require_once('generation/content_sections_generator_main.php') ?>
					</div>
					<div class="col-3">
						<?php require_once('generation/content_sections_generator_trending.php') ?>
						<a href="mailing/mailing_form.php" class="btn btn-secondary">Subscribe for mailing news!</a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		</div>
	</body>
</html>