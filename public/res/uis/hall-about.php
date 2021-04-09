
<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?asb" />

		<link rel="stylesheet" type="text/css" href="../css/u-h-about.css?ba" />

		<link rel="stylesheet" type="text/css" href="../css/hall-item.css?b" />

		<link rel="stylesheet" type="text/css" href="../css/tag-item.css?ll" />

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
					
					<ul class="tab inverse-tab">
						<li>
							<form action="" method="POST">
								<button class="main-button">Follow</button>
							</form>
						</li>
						<li>
							<a href="hall-about.php">About</a>
						</li>
						<li>
							<a href="hall-members.php">Members</a>
						</li>
						<li>
							<a href="hall-paper-drafts.php">Paper drafts</a>
						</li>
						<li>
							<a href="hall-settings.php">Settings</a>
						</li>
						<li>
							<form action="" method="POST">
								<button class="negative-button">Leave hall</button>
							</form>
						</li>
					</ul>

				</div>

			</section>

			<section id="user-about">
				
				<div class="main-row">

					<img src="topic.jpg" alt="" id="photo" />

					<div id="details">

						<div id="bio">

							<div class="detail-header">Description</div>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						
						<div id="tags">

							<div class="detail-header">Tags</div>

							<ul>
								<?php include "tag-item.php"; ?>
								<?php include "tag-item.php"; ?>
								<?php include "tag-item.php"; ?>
							</ul>
						</div>

						<div id="members">
							
							<div class="detail-header">Owner</div>

							<ul>
								<?php include "hall-item.php"; ?>
							</ul>

							<a href="hall-members.php" class="inverted-button see-more-button">See members</a>

						</div>


					</div>

				</div>

			</section>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>







