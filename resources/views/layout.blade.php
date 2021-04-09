
<!DOCTYPE html>
<html>
	<head>
		
		<title>@yield('title') - InkHall</title>

		<base href="http://localhost:8080/inkhall/public/" />

		<style type="text/css">
			
			body {
				margin: 0;
				padding: 0;
				font-size: 0.625em;
				font-family: 'Comic Sans MS', serif;
			}

			* {
				box-sizing: border-box;
			}

			a {
				text-decoration: none;
			}

			input, textarea, select, button {
				font-family: 'Josefin Slab', 'Comic Sans MS', serif;
			}

			#main-header {
				padding: 1em;
				color: #FFFFFF;
				background-color: #0000FF;			
			}

			#main-header-title {
				width: 50%;
				color: #FFFFFF;
				font-size: 3em;
				padding: 0.33em;
				font-weight: bolder;
				display: inline-block;
				vertical-align: middle;
				borderr: 1px solid green;
			}

			#main-header-title:focus {
				border:1px solid #FFFFFF;
			}

			#main-nav {
				width: 50%;
				font-size: 2em;
				display: inline-block;
				vertical-align: middle;
				borderr: 1px solid green;
			}

			#main-nav > ul {
				width: 90%;
				padding: 0;
				margin: auto;
				text-align: center;
				borderr: 1px solid yellow;
			}

			#main-nav > ul > li {
				margin-right: 0.5em;
				display: inline-block;
			}

			#main-nav > ul > li > a {
				min-width: 5em;
				color: #FFFFFF;
				padding: 0.5em;
				list-style: none;
				font-weight: bold;
				display: inline-block;
				margin-right: 0.5em;
				border-radius: 0.5em;
				border: 0.1em solid #FFFFFF;
			}

			#main-nav > ul > li > a:focus {
				border-style: dashed;
			}

			#main-nav > ul > li > a:active {
				background-color: #808080;
			}

			main {
				padding: 1em;
				font-size: 2em;
			}



		</style>

		@yield('page_style')

	</head>

	<body>
		
		<header id="main-header">
			<a id="main-header-title" href="en">
				InkHall
			</a><nav id="main-nav">
				<ul>
					@if (!auth()->check())
					<li>
						<a href="{{ inkhall_makeUrl('login') }}">Login</a>
					</li>
					<li>
						<a href="{{ inkhall_makeUrl('register') }}">@lang('auth.register')</a>
					</li>
					@else 
					<li>
						<a href="{{ inkhall_makeUrl('user/'.auth()->user()->username) }}">{{ auth()->user()->username }}</a>
					</li>
					<li>
						<a href="{{ inkhall_makeUrl('logout') }}">Logout</a>
					</li>
					@endif
					<li>
						<a href="">Authors</a>
					</li>
					<li>
						<a href="">Articles</a>
					</li>
				</ul>
			</nav>
		</header>
		
		
		<main>
	    	@yield('main_content')
	    </main>

		
	</body>

</html>






