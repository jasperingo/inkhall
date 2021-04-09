

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?ll" />

		<link rel="stylesheet" type="text/css" href="../css/comment-item.css?as" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>
			
			<section class="page-head">

				<div class="main-row">
					
					<h1>
						<a href="paper-home.php">Comment</a>
					</h1>

					<ul>
						<?php include "comment-item.php"; ?>
					</ul>

				</div>

			</section>

			<section>
				
				<div class="main-row">

					<form action="#" method="POST" class="element-halved">
					
						<div class="input-box">
							<label class="sr-only" for="comment-input">Type your comment</label>
							<textarea name="comment" class="input-box-textarea" id="comment-input" placeholder="Type your comment"></textarea>
							<span class="input-box-error hide"></span>
						</div>

						<div class="input-box">
							<button class="input-box-small-button">Comment</button>
						</div>

					</form>

					<ul class="list-halved">
						<?php include "comment-item.php"; ?>
						<?php include "comment-item.php"; ?>
						<?php include "comment-item.php"; ?>
						<?php include "comment-item.php"; ?>
						<?php include "comment-item.php"; ?>
						<?php include "comment-item.php"; ?>
						<?php include "comment-item.php"; ?>
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










