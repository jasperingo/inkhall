

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?k" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>

			<div class="main-row">


				<h1 class="create-form-out-header">
					<a href="hall-home.php">Black and free</a>
				</h1>

				
				<form class="create-form" action="" method="POST" novalidate="novalidate">
						
					<div class="input-box">
						<label class="input-box-big-label" for="name-input">Name</label>
						<input type="text" name="name" class="input-box-input" id="name-input" />
					</div>

					<div class="input-box">
						<button class="input-box-small-button">Save</button>
					</div>

				</form>

				<form class="create-form" action="" method="POST" novalidate="novalidate">
						
					<div class="input-box">
						<label class="input-box-big-label" for="description-input">Description</label>
						<textarea name="description" class="input-box-textarea" id="description-input"></textarea>
						<span class="input-box-error hide"></span>
						<span class="input-box-bottom-note">Not required, max 200 characters</span>
					</div>

					<div class="input-box">
						<button class="input-box-small-button">Save</button>
					</div>

				</form>

				<form class="create-form" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
						
					<div class="input-box photo-input-box">
						<span class="input-box-big-label">Logo</span>
						<div class="photo-input-box">
							<img src="tree.jpg" alt="" />
							<div class="input-box-photo-input">
								<label for="photo-input">Choose</label>
								<input type="file" accept="image/*" name="photo" id="photo-input" />
							</div>
						</div>
					</div>

					<div class="input-box">
						<button class="input-box-small-button">Save</button>
					</div>

				</form>

				<form class="create-form create-negative-form" action="" method="POST" novalidate="novalidate">

					<div class="input-box">
						<label class="input-box-big-label" for="description-input">Delete Hall</label>
						<button class="input-box-small-button negative-button">Delete</button>
						<span class="input-box-bottom-note">This Hall will be deleted permanently</span>
					</div>

				</form>


			</div>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>






