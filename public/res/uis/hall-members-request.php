

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?a" />

		<link rel="stylesheet" type="text/css" href="../css/hall-item.css?vv" />

		<link rel="stylesheet" type="text/css" href="../css/hall-members.css?a" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>
			
			<section class="page-head">

				<div class="main-row">
					
					<h1>
						<img src="tree.jpg" alt="" />
						<a href="hall-home.php">Black and free</a>
					</h1>

					<h2>Members</h2>

					<ul class="tab">
						<li>
							<a href="hall-members.php">Members</a>
						</li>
						<li>
							<a href="hall-members-request.php"  class="active">Become an editor/writer</a>
						</li>
						<li>
							<a href="hall-members-requests.php">Requests</a>
						</li>
						<li>
							<a href="hall-members-add.php">Add</a>
						</li>
						<li>
							<a href="hall-members-remove.php">Remove</a>
						</li>
					</ul>

				</div>

			</section>
			
			<section>
				
				<div class="main-row">
					
					<form class="hall-create-form" action="" method="POST" novalidate="novalidate">

						<div class="input-box">
							<span class="input-box-big-label">Role</span>

							<div class="input-box-radio-button">
								<input type="radio" name="role" value="2" id="role-writer-input" checked="checked" />
								<label for="role-writer-input">Writer</label>
							</div>

							<div class="input-box-radio-button">
								<input type="radio" name="role" value="2" id="role-editor-input" />
								<label for="role-editor-input">Editor</label>
							</div>

							<span class="input-box-bottom-note">Become a writer or an editor to this Hall</span>
						</div>

						<div class="input-box">
							<label class="input-box-big-label" for="description-input">Why do you want a role in this Hall?</label>
							<textarea name="description" class="input-box-textarea" id="description-input"></textarea>
							<span class="input-box-bottom-note">Required, max 100 characters</span>
						</div>

						<div class="input-box">
							<button class="input-box-small-button">Send</button>
						</div>

					</form>

				</div>

			</section>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>




