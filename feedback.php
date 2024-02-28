<?php
  // Start Sesssion
    session_start();
    if(!isset($_SESSION['students'])) header('location: login.php');
    $error_message = '';

    $students = $_SESSION['students'];

    include('database/data.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/newid.css">

    <title>PUP - ID Information</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="nav-logo-content">
                <div class="nav-logo"><img src="img/school-logo-w.png" alt="logo"></div>
                <div class="nav-school-name"><span>Polytechnic University of the Philippines</span><br>PUP Student ID</div>
            </div>
            <div class="signin-btn">
                <a href="database/logout.php" class="btn-form" onclick="confirmLogout()">Sign Out</a>
            </div>
            <div class="content">
                <a href="database/logout.php" class="sign-out-btn" onclick="confirmLogout()"><img src="icon/signout.svg" alt="icon"></a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="application-container">
            <form action="id-display.php" method="POST" class="application-form" id="newID" >
                <div class="application-header-content">
                    <div class="application-header">Thank you for providing your data!</div>
                </div>
                <div class="feedback-description">Your comment, feedback or suggestion:</div>
                <div class="feedback-container">
                    <textarea name="message" id="message" cols="150" rows="5"></textarea>
                </div>
                <div class="next-btn">
                    <button type="submit" class="btn-form">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/sidebar.js"></script>
    <script src="js/logout.js"></script>
</body>
</html>