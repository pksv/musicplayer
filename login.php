<!DOCTYPE HTML>
<html>

<head>
	<title>MusicPlayer::Login</title>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		function clean() {
			document.getElementById("form1").reset();
			document.getElementById("form2").reset();
			document.getElementById("form3").reset();
		}
	</script>
	<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext" rel="stylesheet">
</head>

<body>
	<script>
		alert("Successfully Registered");
	</script>
	<div class="main-bg">
		<h1>Music Player</h1>
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
					<article>
						<form action="home.php" method="post">							
						
						<h3 class="legend">Login Here</h3>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required  autocomplete="off"/>
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required  autocomplete="off"/>
							</div>
							<button type="submit" class="btn submit" onClick="clean()">Login</button>
							<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</label>
					<article>
						<form action="sql/register.php" method="post">
							<h3 class="legend">Register Here</h3>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required  autocomplete="off"/>
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required  autocomplete="off"/>
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Confirm Password" name="password" required  autocomplete="off" />
							</div>
							<button type="submit" class="btn submit" onClick="clean()">Register</button>
						</form>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3">
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
					<article>
						<form action="#" method="post">
							<h3 class="legend last">Reset Password</h3>
							<p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
							<p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="#">retrieve an existing
									account.</a></p>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required />
							</div>
							<button type="submit" class="btn submit last-btn" onClick="clean()">Reset</button>
						</form>
					</article>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

</body>

</html>