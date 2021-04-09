

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?of" />

		<link rel="stylesheet" type="text/css" href="../css/hall-item.css?apq" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>
			
			<section class="page-head">

				<div class="main-row">
					
					<h1>
						<span>#software_issues</span>
					</h1>

					<ul class="tab">
						<li>
							<a href="tag-papers.php">Papers</a>
						</li>
						<li>
							<a href="tag-halls.php" class="active">Halls</a>
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





