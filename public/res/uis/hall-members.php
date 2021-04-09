

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?a" />

		<link rel="stylesheet" type="text/css" href="../css/hall-item.css?vv" />

		
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
							<a href="" class="active">Members</a>
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
							<a href="hall-members-remove.php">Remove</a>
						</li>
					</ul>

				</div>

			</section>
			
			<section>
				
				<div class="main-row">
					<ul class="list-halved">
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
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




