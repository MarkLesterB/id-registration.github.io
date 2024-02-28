<?php
  // Start Sesssion
    session_start();
    if(!isset($_SESSION['students'])) header('location: login.php');
    $error_message = '';

    $students = $_SESSION['students'];

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_GET['reason'])) {
            $_SESSION['reason'] = $_GET['reason']; 
        } else {
            echo "Reason not selected";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/id-info-1.css">

    <title>PUP - New ID</title>
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
                <div class="application-title">ID Information</div>
            </div>
            <form action="idInfo2.php" method="GET" class="application-form" id="newID" >
                <div class="application-header-content">
                    <div class="application-header">Instruction:</div>
                    <div class="application-description">Fill the form below. Please make sure that the information you will provide is true and correct. All fields are required unless marked.</div>
                </div>
                <div class="information-container">
                        <div class="label-input-row">
                            <div class="input-box">
                                <label for="firstName"><b>First Name</b></label>
                                <input type="text" id="firstName" name="first_name" placeholder="First Name" required oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
                            </div>
                            <div class="input-box">
                                <label for="middleName"><b>Middle Name</b></label>
                                <input type="text" id="middleName" name="middle_name" placeholder="Middle Name" required oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
                                <p>Your complete middle name [Optional]</p>
                            </div>
                            <div class="input-box">
                                <label for="lastName"><b>Last Name</b></label>
                                <input type="text" id="lastName" name="last_name" placeholder="Last Name" required oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="gender"><b>Gender</b></label>
                            <select id="gender" name="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="PreferNotToSay">Prefer not to say</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label for="dob"><b>Date Of Birth</b></label>
                            <input type="date" id="dob" name="birthdate" required>
                            <p>Select the month, day and year of your birth</p>
                        </div>
                        <div class="input-box">
                            <label for="homeAddress"><b>Home Address</b></label>
                            <input type="text" id="homeAddress" name="home_address" placeholder="Home Address" required oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);">
                            <p>Type your address including Unit, Number, Street, and Subdivision (example: Unit 101 #88 Teresa St., Sta. Mesa)</p>
                        </div>
                        <div class="input-box">
                            <label for="phoneNumber"><b>Phone/Mobile Number</b></label>
                            <input type="number" id="phoneNumber" name="phone_number" placeholder="Mobile Number" required pattern="^09\d{9}$" maxlength="11">
                            <p>Multiple phone/mobile number is not allowed</p>
                        </div>
                        <div class="input-box">
                            <label for="email"><b>Email Address</b></label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <p>Usually used email address to contact: (example: juandelacruz@gmail.com)</p>
                        </div>
                        <div class="label-input-row">
                            <div class="input-box">
                                <label for="college"><b>College</b></label>
                                <select id="college" name="college" required>
                                    <option value="" disabled selected>Select College</option>
                                    
                                    <!-- Undergraduate Programs -->
                                    <optgroup label="Undergraduate Programs">
                                        <option value="BSENTREP">Bachelor of Science in Entrepreneurship (BSENTREP)</option>
                                        <option value="BABR">Bachelor of Arts in Broadcasting (BABR)</option>
                                        <option value="BSBAHRM">Bachelor of Science in Business Administration major in Human Resource Management (BSBAHRM)</option>
                                        <option value="BSBAMM">Bachelor of Science in Business Administration major in Marketing Management (BSBAMM)</option>
                                        <option value="BSOA">Bachelor of Science in Office Administration (BSOA)</option>
                                        <option value="BSTM">Bachelor of Science in Tourism Management (BSTM)</option>
                                        <option value="BPA">Bachelor of Public Administration (BPA)</option>
                                    </optgroup>
                            
                                    <!-- College of Accountancy and Finance (CAF) -->
                                    <optgroup label="College of Accountancy and Finance (CAF)">
                                        <option value="BSA">Bachelor of Science in Accountancy (BSA)</option>
                                        <option value="BSMA">Bachelor of Science in Management Accounting (BSMA)</option>
                                        <option value="BSBAFM">Bachelor of Science in Business Administration Major in Financial Management (BSBAFM)</option>
                                    </optgroup>
                            
                                    <!-- College of Architecture, Design and the Built Environment (CADBE) -->
                                    <optgroup label="College of Architecture, Design and the Built Environment (CADBE)">
                                        <option value="BS-ARCH">Bachelor of Science in Architecture (BS-ARCH)</option>
                                        <option value="BSID">Bachelor of Science in Interior Design (BSID)</option>
                                        <option value="BSEP">Bachelor of Science in Environmental Planning (BSEP)</option>
                                    </optgroup>
                            
                                    <!-- College of Arts and Letters (CAL) -->
                                    <optgroup label="College of Arts and Letters (CAL)">
                                        <option value="ABE">Bachelor of Arts in English (ABE)</option>
                                        <option value="ABF">Bachelor of Arts in Filipino (ABF)</option>
                                        <option value="ABPHILO">Bachelor of Arts in Philosophy (ABPHILO)</option>
                                        <option value="ABTA">Bachelor of Arts in Theater Arts (ABTA)</option>
                                    </optgroup>
                            
                                    <!-- College of Business Administration (CBA) -->
                                    <optgroup label="College of Business Administration (CBA)">
                                        <option value="BSBA-MM">Bachelor of Science in Business Administration major in Marketing Management (BSBA-MM)</option>
                                        <option value="BSBA-HRDM">Bachelor of Science in Business Administration major in Human Resource Development Management (BSBA-HRDM)</option>
                                        <option value="BSEntrep">Bachelor of Science in Entrepreneurship (BSEntrep)</option>
                                        <option value="BSOA-CBA">Bachelor of Science in Office Administration (BSOA)</option>
                                    </optgroup>
                            
                                    <!-- College of Communication (COC) -->
                                    <optgroup label="College of Communication (COC)">
                                        <option value="BAPR">Bachelor in Advertising and Public Relation (BAPR)</option>
                                        <option value="ABJ">Bachelor of Arts in Journalism (ABJ)</option>
                                        <option value="BA Broadcasting">Bachelor of Arts on Broadcasting (BA Broadcasting)</option>
                                        <option value="ABCR">Bachelor of Arts in Communication Research (ABCR)</option>
                                    </optgroup>
                            
                                    <!-- College of Computer and Information Sciences (CCIS) -->
                                    <optgroup label="College of Computer and Information Sciences (CCIS)">
                                        <option value="BSCS">Bachelor of Science in Computer Science (BSCS)</option>
                                        <option value="BSIT">Bachelor of Science in Information Technology (BSIT)</option>
                                    </optgroup>
                            
                                    <!-- College of Education (COED) -->
                                    <optgroup label="College of Education (COED)">
                                        <option value="BTLEd">Bachelor of Technology and Livelihood Education (BTLEd) major in Home Economics, Industrial Arts, Information and Communication Technology</option>
                                        <option value="BLIS">Bachelor of Library and Information Science (BLIS)</option>
                                        <option value="BSEd-English">Bachelor of Secondary Education (BSEd) major in English</option>
                                        <option value="BSEd-Math">Bachelor of Secondary Education (BSEd) major in Mathematics</option>
                                        <option value="BSEd-Science">Bachelor of Secondary Education (BSEd) major in Science</option>
                                        <option value="BSEd-Filipino">Bachelor of Secondary Education (BSEd) major in Filipino</option>
                                        <option value="BSEd-Social Studies">Bachelor of Secondary Education (BSEd) major in Social Studies</option>
                                        <option value="BEEd">Bachelor of Elementary Education (BEEd)</option>
                                        <option value="BECEd">Bachelor of Early Childhood Education (BECEd)</option>
                                    </optgroup>
                            
                                    <!-- College of Engineering (CE) -->
                                    <optgroup label="College of Engineering (CE)">
                                        <option value="BSCE">Bachelor of Science in Civil Engineering (BSCE)</option>
                                        <option value="BSCpE">Bachelor of Science in Computer Engineering (BSCpE)</option>
                                        <option value="BSEE">Bachelor of Science in Electrical Engineering (BSEE)</option>
                                        <option value="BSECE">Bachelor of Science in Electronics Engineering (BSECE)</option>
                                        <option value="BSIE">Bachelor of Science in Industrial Engineering (BSIE)</option>
                                        <option value="BSME">Bachelor of Science in Mechanical Engineering (BSME)</option>
                                        <option value="BSRE">Bachelor of Science in Railway Engineering (BSRE)</option>
                                    </optgroup>
                            
                                    <!-- College of Human Kinetics (CHK) -->
                                    <optgroup label="College of Human Kinetics (CHK)">
                                        <option value="BPE">Bachelor in Physical Education (BPE)</option>
                                    </optgroup>
                            
                                    <!-- College of Political Science and Public Administration (CPSPA) -->
                                    <optgroup label="College of Political Science and Public Administration (CPSPA)">
                                        <option value="BAPS">Bachelor of Arts in Political Science (BAPS)</option>
                                        <option value="BAPE">Bachelor of Arts in Political Economy (BAPE)</option>
                                        <option value="BAIS">Bachelor of Arts in International Studies (BAIS)</option>
                                        <option value="BPA-PolSci">Bachelor of Public Administration (BPA)</option>
                                    </optgroup>
                            
                                    <!-- College of Social Sciences and Development (CSSD) -->
                                    <optgroup label="College of Social Sciences and Development (CSSD)">
                                        <option value="BC">Bachelor in Cooperatives (BC)</option>
                                        <option value="ABH">Bachelor of Arts in History (ABH)</option>
                                        <option value="BSE">Bachelor of Science in Economics (BSE)</option>
                                        <option value="BSPSY">Bachelor of Science in Psychology (BSPSY)</option>
                                        <option value="BSS">Bachelor of Science in Sociology (BSS)</option>
                                    </optgroup>
                            
                                    <!-- College of Science (CS) -->
                                    <optgroup label="College of Science (CS)">
                                        <option value="BAS">Bachelor in Applied Statistics (BAS)</option>
                                        <option value="BSAM">Bachelor of Science in Applied Mathematics (BSAM) major in Actuarial Mathematics</option>
                                        <option value="BSBIO">Bachelor of Science in Biology (BSBIO)</option>
                                        <option value="BSCHEM">Bachelor of Science in Chemistry (BSCHEM)</option>
                                        <option value="BSFT">Bachelor of Science in Food Technology (BSFT)</option>
                                        <option value="BSM">Bachelor of Science in Mathematics (BSM)</option>
                                        <option value="BSND">Bachelor of Science in Nutrition and Dietetics (BSND)</option>
                                        <option value="BSP">Bachelor of Science in Physics (BSP)</option>
                                    </optgroup>
                            
                                    <!-- College of Tourism, Hospitality and Transportation Management (CTHTM) -->
                                    <optgroup label="College of Tourism, Hospitality and Transportation Management (CTHTM)">
                                        <option value="BSTM-CTHTM">Bachelor of Science in Tourism Management (BSTM)</option>
                                        <option value="BTM">Bachelor in Transportation Management (BTM)</option>
                                        <option value="BSHM">Bachelor of Science in Hospitality Management (BSHM)</option>
                                    </optgroup>
                            
                                    <!-- Institute of Technology (ITECH) -->
                                    <optgroup label="Institute of Technology (ITECH)">
                                        <option value="DipCompEngTech">Diploma in Computer Engineering Technology</option>
                                        <option value="DipElecCommEngTech">Diploma in Electronics Communications Engineering Technology</option>
                                        <option value="DipElecEngTech">Diploma in Electrical Engineering Technology</option>
                                        <option value="DipICT">Diploma in Information Communication Technology</option>
                                        <option value="DipMechEngTech">Diploma in Mechanical Engineering Technology</option>
                                        <option value="DipOfficeMgmtTech">Diploma in Office Management Technology</option>
                                    </optgroup>
                                </select>
                            </div>
                            
                            <div class="input-box">
                                <label for="courseYearSection"><b>Course, Year & Section</b></label>
                                <input type="text" id="courseYearSection" name="year_section" placeholder="Course, Year & Section" required>
                                <p>Use uppercase letters: (example: BSIT 3-1N)</p>
                            </div>
                        </div>
                        <div class="next-btn info">
                            <a href="id-issuance.php"><button type="button" class="btn-form back-btn">Back</button></a>
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
