<?php
  // Start Sesssion
    session_start();
    if(!isset($_SESSION['students'])) header('location: login.php');
    $error_message = '';

   $students = $_SESSION['students'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/newid.css">

    <title>PUP - ID Replacement</title>
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
            <div class="application-title-container">
                <a href="id-issuance.php"><img src="icon/arrow-left.svg" alt="icon"></a>
                <div class="application-title">Application for New Identification Card</div>
            </div>
            <form action="idInfo1.php" method="GET" class="application-form" id="newID">
                <div class="application-header-content">
                    <div class="application-header">Instruction:</div>
                    <div class="application-description">Select the appropriate option/s by checking the checkbox/es:</div>
                </div>
                <div class="items-container replacement">
                    <div class="items"><input type="radio" name="reason" id="newID-chkbox" value="Late Filling">Late Filling</div>
                    <div class="items"><input type="radio" name="reason" id="newID-chkbox" value="Old ID">Old ID</div>
                    <div class="items"><input type="radio" name="reason" id="newID-chkbox" value="Damaged">Damaged</div>
                    <div class="items"><input type="radio" name="reason" id="newID-chkbox" value="Correction of Entity">Correction of Entity</div>
                </div>
                <div class="next-btn">
                    <button type="submit" class="btn-form">Next</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/sidebar.js"></script>
    <script src="js/logout.js"></script>
</body>
</html>