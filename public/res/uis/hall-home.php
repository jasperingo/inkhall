

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?aw" />

		<link rel="stylesheet" type="text/css" href="../css/paper-item.css?a" />
		
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

			<section>
				
				<div class="main-row">
					<ul class="list-halved">
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
					</ul>

					<div class="pagination pagination-halved">
						<a href="" class="pagination-prev-button main-button">Prev</a>
						<a href="" class="pagination-next-button main-button">Next</a>
					</div>
				</div>

			</section>	

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>






