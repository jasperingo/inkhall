

<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?vd" />
		
		<link rel="stylesheet" type="text/css" href="../css/tag-item.css?mm" />
		
		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>

			<div class="main-row">
				
				<form class="create-form" action="" method="POST" novalidate="novalidate">

					<h1>
						<span>Write Your Paper</span>
					</h1>

					<div class="input-box">
						<label class="input-box-big-label" for="title-input">Title</label>
						<input type="text" name="title" class="input-box-input" id="title-input" />
					</div>

					<div class="input-box">
						<label class="input-box-big-label" for="subtitle-input">Subtitle</label>
						<input type="text" name="subtitle" class="input-box-input" id="subtitle-input" />
					</div>

					<div class="input-box">
						<label class="input-box-big-label" for="content-input">Content</label>
						<textarea name="content" class="input-box-textarea" id="content-input"></textarea>
					</div>

					<div class="input-box">
						<label class="input-box-big-label" for="tags-input">Tags</label>
						<input type="text" name="tags" id="tags-input" class="input-box-input input-with-button" /><button type="button" class="button-with-input">Add</button>
						<span class="input-box-bottom-note">Adding tags allows people to search for and discover your paper</span>
						<ul>
							<?php include "tag-item.php"; ?>
							<?php include "tag-item.php"; ?>
							<?php include "tag-item.php"; ?>
						</ul>
					</div>

					
					<div class="input-box">
						<label class="input-box-big-label" for="hall-input">Hall</label>
						<input type="text" name="hall" id="hall-input" class="input-box-input input-with-button" /><button type="button" class="button-with-input">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"s>
								<path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/>
							</svg>
							<span class="sr-only">Search for a hall to hich this paper will be published</span>
						</button>
						<span class="input-box-bottom-note">Name of the hall you want to which this paper will be published</span>
					</div>

					<div class="input-box">
						<button class="input-box-small-button">Publish</button>

						<button class="input-box-small-button inverted-button">Save</button>
					</div>

				</form>

			</div>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>






