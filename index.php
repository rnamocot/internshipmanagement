<?php
session_start();
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
// Check if user is logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internship Management - Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Custom stylesheet -->
    <link href="./public/styles/mainstyles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./public/images/toga.png">
    <!--googlefont-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro;:wght@200;300;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper page-login">
        <!--content-->
        <div class="container content-wrapper loginpage-sec">
            <div class="row" id="login-section">

                <div class="col-xs-12 col-sm-8 col-md-8" id="left-content">
                    <div class="icon-login">
                        <img src="./public/images/toga.png" id="icon-toga" alt="toga">
                    </div>
                    <h1>Welcome</h1>
                    <h3>You are on your way to becoming excellent educators and mentors for the next generation. As you embark on this journey, we wish you all the best and hope that you gain valuable insights, knowledge, and experience that will help you in your future careers.</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4" id="right-content">
                    <div class="signin-heading">
                        <h2>Sign in</h2>
                    </div>
                    <?php
                    ?>
                    <form action="login.php" method="post">
                        <div class="form-inner-container">
                            <input type="text" placeholder="Username" name="username" required>

                            <input type="password" placeholder="Password" name="password" required>

                            <button type="submit" name="btn-login">Login</button>
                        </div>
                        <div class="forgot-reg">
                            <span class="psw">Forgot <a href="#">password?</a></span>
                            <div class="signup-div">
                                <span>Don't have an account? <a href="#" type="button" class="reg-btn btn-primary" data-bs-toggle="modal" data-bs-target="#register">Sign up</a></span>
                            </div>
                    </form>
                </div>
            </div>
        </div><!--end of login section-->
    </div><!--end of content wrapper-->
    </div><!--end of main wrapper-->

    <!-- Registraion Page -->
    <!-- The Modal -->
	<div class="modal fade" id="register">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h1>Registration</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->

				<div class="modal-body">

					<form action="register_user.php" method="post">
						<div class="container">
							<p>Please fill in this form to create an account.</p>
							<input type="text" placeholder="Enter Name" name="name" id="name" required>
							<input type="text" placeholder="Enter User Name" name="username" id="username" required>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>
							<input type="password" placeholder="Enter Password" name="password" id="psw" required>
							<input type="password" placeholder="Confirm Password" name="confirm_password" id="psw-repeat" required>
							<p class="p-terms">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
							<button type="submit" value="Register" class="btn-registerbtn" name="btn-register">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <script src="" async defer></script>
</body>

</html>