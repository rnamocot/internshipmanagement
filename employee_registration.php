<?php
session_start();
// connect to the database
include_once("./config/mydb.php");
$conn = connectionDB();

if (isset($_POST['btn-employee-reg'])) {
    // Get form data
    $employeename = mysqli_real_escape_string($conn, $_POST['employeename']);
    $supervisorname = mysqli_real_escape_string($conn, $_POST['supervisorname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Insert user data into database
    $sqlemployee = "INSERT INTO employee_details(employee_name,supervisor_name, employee_phone, employee_email,employee_address) VALUES ('$employeename', '$supervisorname', '$phone', '$email','$address')";
    mysqli_query($conn, $sqlemployee);

  // Set session variables
  $_SESSION['message_thanks'] = "Thank you. Submitted Successfully";
    $conn->close();
    header("Location: index.php");
    exit();
}

?>




<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OJT - Employee Registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Custom stylesheet -->
        <link href="./public/styles/employee.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./public/images/fav.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="employe-reg-div">
        <div class="container">
            <div class="row">
                <div class="col-md-7 employee-form">
                    <div class="employee-heading">
                    <h2>Employee Registration Form</h2>
                    </div>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="employeeName">Employee Name:</label>
                            <input type="text" class="form-control" id="employeeName" name="employeename" required>
                        </div>
                        <div class="form-group">
                            <label for="yourName">Supervisor Name:</label>
                            <input type="text" class="form-control" id="supervisorName" name="supervisorname" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone #:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input class="form-control" id="address" name="address" rows="3" required></input>
                        </div>
                        <button type="submit" class="btn-employee-reg" name="btn-employee-reg">Submit</button>
                        <div class="form-message">
                        <p> <?php echo $_SESSION['message_thanks']; ?></p>
                    </div>
                    </form>
                </div>
                <div class="col-md-5">
                <div class="employee-img-div">
                        <img src="./public/images/employee.jpg" class="employee-img" alt="Employee - OJT" />
                </div>
                <div class="btn-go-home">
                <a href="index.php">Go to homepage</a>
                </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap JS -->
</body>

</html>