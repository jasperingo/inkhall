
<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?s" />

		<link rel="stylesheet" type="text/css" href="../css/search.css?a" />

		<link rel="stylesheet" type="text/css" href="../css/paper-item.css?a" />

		<link rel="stylesheet" type="text/css" href="../css/hall-item.css?d" />

		<link rel="stylesheet" type="text/css" href="../css/tag-item.css?a" />

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>

			<section class="page-head">

				<div class="main-row">

					<form id="main-search-form" action="" method="GET">
						<label for="main-search-input" class="sr-only">Enter your search query</label>
						<input id="main-search-input" type="search" name="q" placeholder="Search InkHall" /><button>

							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/>
							</svg>
							<span class="sr-only">Submit search</span>

						</button>
					</form>
				

					<ul class="tab">
						<li>
							<a href="" class="active">Papers</a>
						</li>
						<li>
							<a href="">Halls</a>
						</li>
						<li>
							<a href="">People</a>
						</li>
						<li>
							<a href="">Tags</a>
						</li>
					</ul>
				</div>

			</section>

			<section id="search-results">
				<div class="main-row">

					<ul>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
						<?php include "paper-item.php"; ?>
					</ul>

					<div class="pagination">
						<a href="" class="pagination-prev-button main-button">Prev</a>
						<a href="" class="pagination-next-button main-button">Next</a>
					</div>

				</div>
			</section>


		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>






