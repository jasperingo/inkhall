
<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?fll" />

		<link rel="stylesheet" type="text/css" href="../css/index.css?all" />

		<link rel="stylesheet" type="text/css" href="../css/paper-item.css?y88" />

		<link rel="stylesheet" type="text/css" href="../css/hall-item.css?k" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>

			<section id="index-featured">

				<div class="main-row">
					<ul class="list-halved">
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
					</ul>
				</div>

			</section>

			
			<section id="index-halls">
				<div class="main-row">
					<h2>HALLS ON INKHALL</h2>
					<ul>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
						<?php include "hall-item.php"; ?>
					</ul>
					<a href="halls.php" class="inverted-button see-more-button">See more</a>
				</div>
			</section>
			

			<section id="index-papers">

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










