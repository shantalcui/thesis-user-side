<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
	<title>Don Covido's</title>
</head>

<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form class="sign-in-form">
					<!-- SIGN IN -->
					<h2 class="title">Sign In</h2>
					<div class="input-field">
						<img src="https://img.icons8.com/ios-glyphs/50/ffffff/user-male.png" width="25" height="auto" style="margin-top: 13px; margin-left: 15px;" />
						<input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
					</div>

					<div class="input-field">
						<img src="https://img.icons8.com/metro/50/ffffff/lock-2.png" width="25" height="auto" style="margin-top: 13px; margin-left: 15px;" />
						<input type="password" name="pass" id="pass" placeholder="Password" autocomplete="off">
					</div>
					<input type="button" value="Login" class="btn solid" id="sign-in" onclick="loginSuccess()">
				</form>

				<!-- SIGN UP -->
				<form action="" class="sign-up-form">
					<h2 class="title">Sign Up</h2>
					<div class="input-field">
						<img src="https://img.icons8.com/ios-glyphs/50/ffffff/user-male.png" width="25" height="auto" style="margin-top: 13px; margin-left: 15px;" />
						<input type="text" id="username" placeholder="Username" autocomplete="off">
					</div>

					<div class="input-field">
						<img src="https://img.icons8.com/ios-filled/50/ffffff/email-open.png" width="25" height="auto" style="margin-top: 13px; margin-left: 15px;" />
						<input type="email" id="email" placeholder="Email Address" autocomplete="off">
					</div>

					<div class="input-field">
						<img src="https://img.icons8.com/metro/50/ffffff/lock-2.png" width="25" height="auto" style="margin-top: 13px; margin-left: 15px;" />
						<input type="password" id="pass" placeholder="Password" autocomplete="off">
					</div>
					<input type="submit" value="Submit" class="btn solid" onclick="signupSuccess()">
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<img src="../images/logo_transparent.png" width="250" height="auto">
					<h1>Welcome to Don Covido's!</h1>
					<h3>Life is Too Short For Average Food!</h3>
					<p>Don't have an account?</p>
					<button class="btn btn1" id="sign-up-btn">SIGN UP</button>
				</div>
			</div>

			<div class="panel right-panel">
				<div class="content">
					<img src="../images/logo_transparent.png" width="250" height="auto">
					<h1>Welcome to Don Covido's!</h1>
					<h3>Life is Too Short For Average Food!</h3>
					<p>Already have an account?</p>
					<button class="btn" id="sign-in-btn">SIGN IN</button>
				</div>
			</div>
		</div>
	</div>

	<script src="js/login.js" async></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		function loginSuccess() {
			Swal.fire({
				title: 'Welcome!',
				icon: 'success'
			}).then(() => {
				document.location = 'home.html'
			});
		}

		function signupSuccess() {
			Swal.fire({
				title: 'Success!',
				icon: 'success'
			}).then(() => {
				document.location = 'index.html'
			});
		}
	</script>

</body>

</html>