

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?c" />

		<link rel="stylesheet" type="text/css" href="../css/user-notifications.css?s" />

		<link rel="stylesheet" type="text/css" href="../css/notification-item.css?s" />

		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>
			
			<div class="main-row">

				<div id="notifications">

					<h1>
						<span>Notifications</span>
					</h1>
					
					<ul>
						<?php include "notification-item.php"; ?>
						<?php include "notification-item.php"; ?>
						<?php include "notification-item.php"; ?>
						<?php include "notification-item.php"; ?>
						<?php include "notification-item.php"; ?>
						<?php include "notification-item.php"; ?>
					</ul>

					<div class="pagination">
						<a href="" class="pagination-prev-button main-button">Prev</a>
						<a href="" class="pagination-next-button main-button">Next</a>
					</div>

				</div>

			</div>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>








