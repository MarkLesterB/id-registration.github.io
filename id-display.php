<?php
  // Start Sesssion
    session_start();
    if(!isset($_SESSION['students'])) header('location: login.php');
    $error_message = '';

    $students = $_SESSION['students'];
    
    include('database/feedback-data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/id-info-1.css">

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
    <?php
        include('database/conn.php');

        // Assuming you have stored the current user's identifier in a session variable
        $studentNumber = $_SESSION['students']['studentNumber'];

        // Select only the data of the currently logged-in user and the newly inputted data
        $sql = "SELECT * FROM idapplication WHERE studentNumber = '$studentNumber' ORDER BY id DESC LIMIT 1";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="data-container">
                    <div class="information-container">
                        <div class="input-box">
                            <label for="studentNumber"><b>Student Number</b></label>
                            <p><?php echo $row['studentNumber']; ?></p>
                        </div>
                        <div class="label-input-row">
                            <div class="input-box">
                                <label for="firstName"><b>First Name</b></label>
                                <p><?php echo $row['first_name']; ?></p>
                            </div>
                            <div class="input-box">
                                <label for="middleName"><b>Middle Name</b></label>
                                <p><?php echo $row['middle_name']; ?></p>
                            </div>
                            <div class="input-box">
                                <label for="lastName"><b>Last Name</b></label>
                                <p><?php echo $row['last_name']; ?></p>
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="gender"><b>Gender</b></label>
                            <p><?php echo $row['gender']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="dob"><b>Date of Birth</b></label>
                            <p><?php echo $row['birthdate']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="homeAddress"><b>Home Address</b></label>
                            <p><?php echo $row['home_address']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="phoneNumber"><b>Phone Number</b></label>
                            <p><?php echo $row['phone_number']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="email"><b>Email Address</b></label>
                            <p><?php echo $row['email']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="college"><b>College</b></label>
                            <p><?php echo $row['college']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="courseYearSection"><b>Course, Year & Section</b></label>
                            <p><?php echo $row['year_section']; ?></p>
                        </div>

                        <div class="divider"></div>

                        <div class="input-box">
                            <label for="contact_person"><b>Contact Person</b></label>
                            <p><?php echo $row['contact_person']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="guardian_address"><b>Address</b></label>
                            <p><?php echo $row['guardian_address']; ?></p>
                        </div>
                        <div class="input-box">
                            <label for="guardian_contact"><b>Contact Number</b></label>
                            <p><?php echo $row['guardian_contact']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No data found.</p>";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>