<?php
  // Start Sesssion
    session_start();
    if(!isset($_SESSION['students'])) header('location: login.php');
    $error_message = '';

    $students = $_SESSION['students'];
        
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_GET['first_name'])) {
            $_SESSION['first_name'] = $_GET['first_name']; 
        }
        if(isset($_GET['middle_name'])) {
            $_SESSION['middle_name'] = $_GET['middle_name']; 
        }
        if(isset($_GET['last_name'])) {
            $_SESSION['last_name'] = $_GET['last_name']; 
        }
        if(isset($_GET['gender'])) {
            $_SESSION['gender'] = $_GET['gender']; 
        }
        if(isset($_GET['birthdate'])) {
            $_SESSION['birthdate'] = $_GET['birthdate']; 
        }
        if(isset($_GET['home_address'])) {
            $_SESSION['home_address'] = $_GET['home_address']; 
        }
        if(isset($_GET['phone_number'])) {
            $_SESSION['phone_number'] = $_GET['phone_number']; 
        }
        if(isset($_GET['email'])) {
            $_SESSION['email'] = $_GET['email']; 
        }
        if(isset($_GET['college'])) {
            $_SESSION['college'] = $_GET['college']; 
        }
        if(isset($_GET['year_section'])) {
            $_SESSION['year_section'] = $_GET['year_section']; 
        }
        else {
            echo "Form not saved";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PUP Student ID - ID INFORMATION</title>
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="styles/id-info-1.css">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="nav-logo-content">
                    <div class="nav-logo"><img src="img/school-logo-w.png" alt="logo"></div>
                    <div class="nav-school-name"><span>Polytechnic University of the Philippines</span><br>PUP Student ID</div>
                </div>
                <div class="signin-btn">
                    <a href="#" class="btn-form" onclick="confirmLogout()">Sign Out</a>
                </div>
                <div class="content">
                    <div class="sign-out-btn" onclick="confirmLogout()"><img src="icon/signout.svg" alt="icon"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="application-container">
                <div class="application-title-container">
                    <a href="id-issuance.php"><img src="icon/arrow-left.svg" alt="icon"></a>
                    <div class="application-title">ID Information</div>
                </div>
                <form action="feedback.php" method="POST" class="application-form" id="newID" >
                    <div class="application-header-content">
                        <div class="application-header">Instruction:</div>
                        <div class="application-description">Fill the form below. Please make sure that the information you will provide is true and correct. All fields are required unless marked.</div>
                    </div>
                    <div class="information-container">
                        <div class="input-box">
                            <h3>In case of emergency, please notify:</h3>
                            <br>
                            <label for="contactPerson"><b>Contact Person</b></label>
                            <input type="text" id="contactPerson" name="contact_person" placeholder="Contact Person" required oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
                            <p>Type the complete name of the person to contact in case of emergency (your parent or legal guardian/partner)</p>
                        </div>
                        <div class="input-box">
                            <label for="address"><b>Address</b></label>
                            <input type="text" id="address" name="guardian_address" placeholder="Home Address" required>
                            <p>Type the complete address of the person to contact including Unit, Number, Street, and Subdivision (example: Unit 101 #88 Teresa St., Sta. Mesa)</p>
                        </div>
                        <div class="input-box">
                            <label for="phoneNumber"><b>Phone/Mobile Number</b></label>
                            <input type="number" id="phoneNumber" name="guardian_contact" placeholder="Mobile Number" required pattern="^09\d{9}$" maxlength="11">
                            <p>Multiple phone/mobile number is not allowed</p>
                        </div>
                        <div class="next-btn info">
                            <a href="idInfo1.php"><button type="button" class="btn-form back-btn">Back</button></a>
                            <button type="submit" class="btn-form">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="js/sidebar.js"></script>
        <script src="js/logout.js"></script>
    </body>
</html>
