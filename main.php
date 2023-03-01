<?php
require_once "./includes/dashboardconfig.php";
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['message'] = "You must be logged in to access the dashboard";
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OJT - Dashboard</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./public/styles/main.css">
  <link rel="icon" type="image/x-icon" href="./public/images/fav.png">
  <script src="https://cdn.jsdelivr.net/npm/slugify"></script>
</head>

<body>
  <div class="sidebarleft expand">
    <div class="nav-header">
      <p class="logo">OJT <br>
        <span class="db-username" style="color:#1e35cc;">Management</span>
      </p>
      <i class="bx bx-menu-alt-right btn-menu"></i>
    </div>
    <ul class="nav-links">
      <!-- <li>
        <i class="bx bx-search search-btn"></i>
        <input type="text" placeholder="search..." />
        <span class="tooltip">Search</span>
      </li> -->
      <li>
        <a href="#" onclick="showContent('default-content')">
          <i class="bx bx-home-alt-2"></i>
          <span class="title">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="#" onclick="showContent('supervisor')">
          <i class='bx bx-spreadsheet'></i>
          <span class="title">Supervisor</span>
        </a>
        <span class="tooltip">Supervisor</span>
      </li>
      <li>
        <a href="#" onclick="showContent('teacher')">
          <i class='bx bx-user'></i>
          <span class="title">Teachers</span>
        </a>
        <span class="tooltip">Teachers</span>
      </li>
      <li>
        <a href="#" onclick="showContent('students')">
          <i class='bx bx-street-view'></i>
          <span class="title">Students</span>
        </a>
        <span class="tooltip">Students</span>
      </li>
      <li>
        <a href="#" onclick="showContent('qr-code')">
          <i class='bx bx-qr-scan'></i>
          <span class="title">QR Code</span>
        </a>
        <span class="tooltip">QR Code</span>
      </li>
      <li>
        <a href="#" onclick="showContent('setting')">
          <i class="bx bx-cog"></i>
          <span class="title">Profile Settings</span>
        </a>
        <span class="tooltip">Profile Settings</span>
      </li>
      <li>
        <a href="logout.php" onclick="showLogoutModal()">
          <i class='bx bx-power-off'></i>
          <span class="title">Logout</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>
    </ul>

    <!-- Logout button -->
  </div>
  <!-- Right Side Contents -->

  <!-- Default content -->
  <div id="default-content" class="db-right-content">
    <div class="db-right-header">
      <h1>Welcome - <?php echo $_SESSION['username']; ?></h1>
    </div>
    <div class="home-db-div">
      <div class="table-header">
        <h2>OJT-Employer List</h2>
        <input class="form-control search-box" type="text" placeholder="Search name...">
      </div>
      <table>
        <tr>
          <th>Employee Name</th>
          <th>Supervisor Name</th>
          <th>Phone </th>
          <th>Email</th>
          <th>Address</th>
        </tr>
        <?php viewEmployee(); ?> <!-- call the viewEmployee method to display employee data -->
      </table>
    </div>
  </div>
  <!-- END - Default content -->

  <section id="supervisor" class="db-right-content">
    <div class="db-right-header">
      <h1>Welcome - <?php echo $_SESSION['username']; ?></h1>
    </div>
    <div class="home-db-div">
      <h1>Supervisor Accounts</h1>
      <input class="form-control search-box" type="text" placeholder="Search name...">
      <table>
        <tr>
          <th>Employee Name</th>
          <th>Supervisor Name</th>
          <th>Phone </th>
          <th>Email</th>
          <th>Address</th>
        </tr>
        <?php viewEmployee(); ?> <!-- call the viewEmployee method to display employee data -->
      </table>
    </div>
  </section>

  <section id="teacher" class="db-right-content">
    <h1>Teacher Content</h1>
    <p>Here are the teachers.</p>
  </section>

  <section id="students" class="db-right-content">
    <h1>Students Content</h1>
    <p>Here are the students.</p>
  </section>

  <section id="qr-code" class="db-right-content">
    <h1>QR Code Content</h1>
    <p>Here is the QR code.</p>
    <a id="myAnchor" href="#">Register</a>
  </section>

  <section id="setting" class="db-right-content">
    <h1>Setting Content</h1>
    <p>Here are the settings.</p>
  </section>
  <!-- End Side Contents -->



  <!-- Logout modal -->


  <style>
    /* Modal styles */
  </style>
  <!-- END - Logout modal -->

  <script src="./public/js/dashboardmain.js" async defer></script>
</body>

<script>
  const slugify = new Slugify();
  const name = 'John Doe';
  const slug = slugify.slugify(name);

  const registrationUrl = 'registration.php';
  const anchorTag = document.getElementById('myAnchor');
  anchorTag.href = registrationUrl + '?slug=' + slug;
</script>

</html>