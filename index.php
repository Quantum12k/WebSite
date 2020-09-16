<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>News site</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<header class="header">
		<table>
			<tr>
				<td>
					<div class="header-vertical-menus">
						<table>
							<tr>								
								<div class="header-vertical-menus-line">
									HEADER FOR SOME CONTENT LATER ???
								</div>
							</tr>
							<tr>
								<div class="header-vertical-menus-line">										
									<?php require_once('generation/news_sections_generator.php') ?>
								</div>
							</tr>
						</table>
					</div>
				</td>
				<td>
					<div class="auth-menu">
						<div class="auth-button">
							Login
						</div>
					</div>
				</td>
			</tr>
		</table>
	</header>

	<div class="middle">
		<div class="container">
			<main class="content">
				<?php require_once('generation/content_sections_generator_main.php') ?>
			</main>
		</div>
		<aside class="right-sidebar">
			<?php require_once('generation/content_sections_generator_trending.php') ?>
		</aside>
	</div>

</div>

<footer class="footer">
	Footer
</footer>

</body>
</html>