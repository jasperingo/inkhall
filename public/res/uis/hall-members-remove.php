




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
							<a href="hall-members-request.php">Become an editor/writer</a>
						</li>
						<li>
							<a href="hall-members-requests.php">Requests</a>
						</li>
						<li>
							<a href="hall-members-add.php">Add</a>
						</li>
						<li>
							<a href="hall-members-remove.php" class="active">Remove</a>
						</li>
					</ul>

				</div>

			</section>
			
			<section>
				
				<div class="main-row">
					
					<form class="hall-create-form" action="" method="POST" novalidate="novalidate">
						
						<div class="input-box">
							<label class="input-box-big-label" for="username-input">Username</label>
							<input type="text" name="username" class="input-box-input" id="username-input" />
							<span class="input-box-error hide"></span>
							<span class="input-box-bottom-note">Username of member to remove</span>
						</div>

						<div class="input-box">
							<button class="input-box-small-button">Remove</button>
						</div>

					</form>

				</div>

			</section>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>




