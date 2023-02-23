<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['message'] = "You must be logged in to access the dashboard";
    header("Location: index.php");
    exit();
}

// Display welcome message to check if session is working
// echo "Welcome, " . $_SESSION['username'] . "!";
?>
<!DOCTYPE html>
<html>
  <head>    
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="Portfolio" content="System">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1"/>
	<!--<link rel="shortcut icon" href="img/favicon.png"> for favicon-->
    <!-- Bootstrap -->
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!--font awsome-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<!-- Custom stylesheet -->
    <link href="./public/styles/mainstyles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./public/images/toga.png">
	<!--googlefont-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;700;800&display=swap" rel="stylesheet">
</head>

<body>  
<div class="main-wrapper">
	<!--content-->
		<div class="dashboard-content-wrapper">
			<div class="row">		
				<div class="col-xs-12 col-sm-2 col-md-2" id="dashboard-left-content">
				<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
					<div class="dashboard-menu">
						<ul>
							<li><i class="bi bi-house"></i><a href="#">Menu</a></li>
							<li><i class="bi bi-file-earmark-bar-graph"></i><a href="#">Menu</a></li>
							<li><i class="bi bi-pencil-square"></i><a class="dropdown-btn" href="#">Menu Dropdown <i class="bi bi-chevron-down"></i></a>
							<div class="dropdown-container">
							<ul>
							<li><i class="bi bi-cloud-download"></i><a href="#">Link 1</a></li>
							<li><i class="bi bi-person"></i><a href="#">Link 2</a></li>
							<li><i class="bi bi-pencil-square"></i><a href="#">Link 3</a></li>
							</ul>
						  </div></li>
							<li><i class="bi bi-person"></i><a href="#">Menu</a></li>
							<li><i class="bi bi-qr-code-scan"></i><a href="#">Menu</a></li>
							<li><i class="bi bi-speedometer"></i><a href="#">Menu</a></li>
							<div class="seperator-line"></div>
							<li><i class="bi bi-file-earmark-arrow-down"></i><a href="#">Menu</a></li>
							<li><i class="bi bi-person-add"></i><a href="#">Menu</a></li>
							<li><i class="bi bi-database-add"></i><a href="#">Menu</a></li>							
						</ul>
						<a href="logout.php"class="log-out"><i class="bi bi-power"></i>LOGOUT</a>
					</div>

				</div>				
				<div class="col-xs-12 col-sm-10 col-md-10" id="dashboard-right-content">
								<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6" id="inner-left-dashboard">
												<h2>OVERVIEW</h2>
												<h1>DASHBOARD</h1>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6" id="inner-right-dashboard">
										<ul>																			
											<li id="user-area"><a href="#"><i class="bi bi-person-circle"></i></a></li>
											<li id="notif"><a href="#"><i class="bi bi-bell"></a></i></li>	
										</ul>
										</div>
								</div>
						<div class="seperator-line"></div>
						<div class="dashboard-right-section">
								<table style="width:100%">
								  <tr>
									<th>Company</th>
									<th>Contact</th>
									<th>Country</th>
								  </tr>
								  <tr>
									<td>Alfreds Futterkiste</td>
									<td>Maria Anders</td>
									<td>Germany</td>
								  </tr>
								  <tr>
									<td>Centro comercial Moctezuma</td>
									<td>Francisco Chang</td>
									<td>Mexico</td>
								  </tr>
								</table>
						</div>
				</div>							
			</div><!--end of row-->
			</div><!--end of dashboard content wrapper-->
</div><!--end of main wrapper-->
</body>
<!--drop down menu js-->
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</html>