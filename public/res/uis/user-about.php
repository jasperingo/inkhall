
<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?b" />

		<link rel="stylesheet" type="text/css" href="../css/u-h-about.css?vv" />

		<script type="text/javascript" src="../js/main.js"></script>

	</head>
	
	<body>
		
		
		<?php require_once'header.php'; ?>

		
		<main>

			<section class="page-head">

				<div class="main-row">
					
					<h1>
						<a href="user-profile.php">Mattew Levy Franklin</a>
					</h1>
					
					<ul class="tab inverse-tab">
						<li>
							<form action="" method="POST">
								<button class="main-button">Follow</button>
							</form>
						</li>
						<li>
							<a href="user-about.php">About</a>
						</li>
					</ul>

				</div>

			</section>
			
			<section id="user-about">
				
				<div class="main-row">

					<img src="topic.jpg" alt="" id="photo" />

					<div id="details">

						<div id="username">@mattfrank</div>

						<div id="bio">

							<div class="detail-header">Bio</div>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>

						<dl id="relationships">
							<dt class="detail-header">People</dt>
							<dd>
								<ul>
									<li>
										<a href="user-users.php">11 Followers</a>
									</li>
									<li>		
										<a href="user-users.php">50 Following</a>
									</li>
								</ul>
							</dd>
							
							<dt class="detail-header">Halls</dt>
							<dd>
								<ul>
									<li>		
										<a href="user-halls.php">Owner of 2</a>
									</li>
									<li>		
										<a href="user-halls.php">Editor in 5</a>
									</li>
									<li>		
										<a href="user-halls.php">Writer in 1</a>
									</li>
									<li>		
										<a href="user-halls.php">11 Following</a>
									</li>
								</ul>
							</dd>
						</dl>


					</div>

				</div>

			</section>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>







