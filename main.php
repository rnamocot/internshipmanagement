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
  <!-- Qr code -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>
</head>

<body>
  <div class="sidebarleft expand">
    <div class="nav-header">
      <p class="logo">
        <img src="./public/images/logomain.png" class="dashboard-logo" alt="Logo" /> <br>
        <span class="db-username" style="color:#1e35cc;">Dashboard</span>
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
  <div class="main-db-right db-right-content">
    <div class="db-right-header">
      <h1>Welcome - <?php echo $_SESSION['username']; ?></h1>
    </div>
    <!-- Default content -->
    <div id="default-content">
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
    <!-- SUPERVISOR CODE RIGHT SIDE CONTENT -->
    <section id="supervisor">
      <div class="home-db-div">
        <div class="table-header">
          <h2>OJT-Employee</h2>
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
    </section>
    <!-- END - SUPERVISOR CODE RIGHT SIDE CONTENT -->

    <section id="teacher">
      <h1>Teacher Content</h1>
      <p>Here are the teachers.</p>
    </section>

    <section id="students">
      <h1>Students Content</h1>
      <p>Here are the students.</p>
    </section>

    <!-- QR CODE RIGHT SIDE CONTENT -->
    <section id="qr-code">
      <div class="qr-db-content">
        <h1>Your generated link</h1>
        <h4><span style="color:#0D6EFD;">Note:</span> This qr code has a unique link for ojt's employer details registration</h4>
        <!-- <a id="myAnchor" href="#">Register</a> -->
        <?php
        include "./includes/qrcode-generator.php";
        // Generate QR code for the URL 'https://example.com'
        generateQRCodeLink('http://localhost/internshipmanagement/main.php');
        ?>
      </div>
    </section>
        <!-- END QR CODE RIGHT SIDE CONTENT -->

    <section id="setting">
      <h1>Setting Content</h1>
      <p>Here are the settings.</p>
    </section>

  </div>

  <!-- End Side Contents -->



  <!-- Logout modal -->


  <style>
    /* Modal styles */
  </style>
  <!-- END - Logout modal -->

  <script src="./public/js/dashboardmain.js" async defer></script>
</body>

</html>