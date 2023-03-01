<?php
include_once "./includes/dashboardconfig.php";
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
</head>

<body>
  <div class="sidebarleft">
    <div class="nav-header">
      <p class="logo">OJT <br>
        <span class="db-username" style="color:#1e35cc;">Management</span>
      </p>
      <i class="bx bx-menu-alt-right btn-menu"></i>
    </div>
    <ul class="nav-links">
      <li>
        <i class="bx bx-search search-btn"></i>
        <input type="text" placeholder="search..." />
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#" onclick="showContent('default-content')">
          <i class="bx bx-home-alt-2"></i>
          <span class="title">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="#" onclick="showContent('leads')">
          <i class='bx bx-spreadsheet'></i>
          <span class="title">Leads</span>
        </a>
        <span class="tooltip">Leads</span>
      </li>
      <li>
        <a href="#" onclick="showContent('teacher')">
          <i class='bx bx-user'></i>
          <span class="title">Teacher</span>
        </a>
        <span class="tooltip">Teacher</span>
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
          <span class="title">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li>
        <a href="logout.php" onclick="logout('logout')">
          <i class='bx bx-power-off'></i>
          <span class="title">Logout</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>
    </ul>
  </div>
  <!-- Right Side Contents -->

 <!-- Default content -->
  <div id="default-content" class="db-right-content">
    <h1>Welcome - <?php echo $_SESSION['username']; ?></h1>
    <div class="home-div-">

    </div>
  </div>
   <!-- END - Default content -->

  <section id="leads" class="db-right-content">
    <h1>Leads Content</h1>
    <p>Here are the leads.</p>
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
  </section>

  <section id="setting" class="db-right-content">
    <h1>Setting Content</h1>
    <p>Here are the settings.</p>
  </section>

  <section id="logout" class="db-right-content">
    <h1>Logout Content</h1>
    <p>You have been logged out.</p>
  </section>
  <!-- End Side Contents -->
  <script src="./public/js/dashboardmain.js" async defer></script>
</body>

</html>