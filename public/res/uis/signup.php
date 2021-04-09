
<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8" />
		
		<title>InkHall - The hall of ideas</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="../css/main.css?a" />

		<link rel="stylesheet" type="text/css" href="../css/signin.css?a" />

		<script type="text/javascript" src="../js/main.js"></script>

		<script type="text/javascript" src="../js/show-password.js"></script>

	</head>
	
	<body>
		

		<?php require_once'header.php'; ?>

		
		<main>
			
			<div class="main-row">
				
				<form id="signin-form" action="" method="POST" novalidate="novalidate">

					<h1>Join InkHall</h1>

					<div class="input-box">
						<label class="input-box-label" for="first-name-input">First name</label>
						<input type="text" name="first-name" class="input-box-input" id="first-name-input" />
					</div>

					<div class="input-box">
						<label class="input-box-label" for="last-name-input">Last name</label>
						<input type="text" name="last-name" class="input-box-input" id="last-name-input" />
					</div>

					<div class="input-box">
						<label class="input-box-label" for="username-input">Username</label>
						<input type="text" name="username" class="input-box-input" id="username-input" />
					</div>

					<div class="input-box">
						<label class="input-box-label" for="email-input">Email</label>
						<input type="email" name="email" class="input-box-input" id="email-input" />
					</div>

					<div class="input-box">
						<label class="input-box-label" for="password-input">Password</label>
						<input type="password" name="password" id="password-input" class="input-box-input input-with-button" /><button type="button" class="button-with-input">

							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
								<path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/>
							</svg>
							<span class="sr-only">Show password</span>

						</button><button type="button" class="button-with-input hide">

							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
								<path d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"/>
							</svg>
							<span class="sr-only">Hide password</span>
						</button>
					</div>
					
					<div class="input-box hide">
						<label class="input-box-label" for="cpassword-input">Comfirm Password</label>
						<input type="password" name="confirm-password" class="input-box-input" id="cpassword-input" />
					</div>

					<div class="input-box">
						<button class="input-box-button">Sign up</button>
					</div>

					<div id="signin-forgot-password">
						<div>
							<span>Already have an account?</span>
							<a href="signin.php">Sign in</a>
						</div>
					</div>
					

					<div id="signin-social">

						<div id="signin-social-head">Or sign in with</div>

						<a href="" id="signin-social-fb">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
							</svg>

							<span class="sr-only">sign in with facebook</span>
						</a>

						<a href="" id="signin-social-g">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
								<path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/>
							</svg>

							<span class="sr-only">sign in with google</span>
						</a>
					</div>

				</form>

			</div>

		</main>


		<?php require_once'footer.php'; ?>
		

	</body>

</html>




