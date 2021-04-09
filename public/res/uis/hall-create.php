

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?q" />

		<link rel="stylesheet" type="text/css" href="../css/tag-item.css?vv" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>
			
			<div class="main-row">

				
				<form class="create-form" action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">

					<h1>
						<span>New Hall</span>
					</h1>
					
					<div class="input-box">
						<label class="input-box-big-label" for="name-input">Name</label>
						<input type="text" name="name" class="input-box-input" id="name-input" />
					</div>

					<div class="input-box">
						<label class="input-box-big-label" for="description-input">Description</label>
						<textarea name="description" class="input-box-textarea" id="description-input"></textarea>
						<span class="input-box-error hide"></span>
						<span class="input-box-bottom-note">Not required, max 200 characters</span>
					</div>

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
						<label class="input-box-big-label" for="tags-input">Tags</label>
						<input type="text" name="tags" id="tags-input" class="input-box-input input-with-button" /><button type="button" class="button-with-input">Add</button>
						<span class="input-box-bottom-note">Adding tags allows people to search for and discover your hall</span>
						<ul>
							<?php include "tag-item.php"; ?>
							<?php include "tag-item.php"; ?>
							<?php include "tag-item.php"; ?>
						</ul>
					</div>


					<div class="input-box">
						<button class="input-box-small-button">Create</button>
					</div>

				</form>

			</div>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>






