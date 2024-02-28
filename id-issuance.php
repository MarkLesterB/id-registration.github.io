<?php
  // Start Sesssion
    session_start();
    if(!isset($_SESSION['students'])) header('location: login.php');
    $error_message = '';

  $students = $_SESSION['students'];

  if(isset($_GET['idType'])) {
    $_SESSION['idType'] = $_GET['idType'];
  }

  if (isset($_GET['idType'])) {
    $action = $_GET['idType'];
    if ($action === "New ID") {
        header('location: new-id.php');
    } elseif ($action === "Replacement ID") {
        header('location: replacement-id.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/form.css">

    <title>PUP Student ID</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
    <body>
      <div class="error-container">
        <div class="error-message">Please enter a valid email and password.</div>
      </div>
      <div class="container">
          <a href="database/logout.php" class="back-btn" onclick="confirmLogout();">X</a>
          <div class="form--container--logo"><img src="img/school-logo-w.png" alt="logo"></div>
          <div class="form--container--header">PUP Student ID</div>
            <div class="form--container">
            <form class="studentId-form" method="GET">
                <button type="submit" class="btn-form blue-btn" name="idType" value="New ID">New ID</button>
                <button type="submit" class="btn-form" name="idType" value="Replacement ID">Replacement ID</button>
                <div class="form-description">
                    <p>By using this service, you understand and agree to the <b>PUP Online Services, Terms and Use and Privacy Statement</b></p>
                </div>
            </form>
            </div>
      </div>

    <script src="js/login.js"></script>
    <script src="js/logout.js"></script>
  </body>
</html>