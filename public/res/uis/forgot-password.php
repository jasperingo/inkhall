

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?s" />

		<link rel="stylesheet" type="text/css" href="../css/signin.css?a" />

		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		

		<?php require_once'header.php'; ?>

		
		<main>

			<div class="main-row">
				
				<form id="signin-form" action="" method="POST" novalidate="novalidate">

					<h1>Recover account</h1>

					<div class="input-box">
						<label class="input-box-label" for="username-input">Email</label>
						<input type="text" name="username" class="input-box-input" id="username-input" />
					</div>

					<div class="input-box">
						<button class="input-box-button">Find my account</button>
					</div>

				</form>

			</div>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>



